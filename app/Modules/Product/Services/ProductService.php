<?php

namespace App\Modules\Product\Services;

use Illuminate\Support\Str;
use App\Modules\Product\Repositories\ProductRepository;
use App\Modules\Product\Models\Product;
use App\Modules\Product\Models\ProductImage;
use App\Modules\Product\Events\ProductStockLow;
use App\Modules\Product\Events\ProductOutOfStock;
use App\Modules\Product\Requests\StoreProductRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProductService
{
  private int $lowStockThreshold;

  public function __construct(
    private ProductRepository $productRepository
  ) {
    $this->lowStockThreshold = config('product.stock_low_threshold', 10);
  }

  private function productBasePath(Product $product): string
{
    $slug = Str::slug($product->name);
    $shortUuid = substr($product->id, 0, 5);

    return "products/{$slug}-{$shortUuid}";
}


  public function getAllProducts(): Collection
  {
    return $this->productRepository->getAll();
  }

  public function getProductById(string $id): ?Product
  {
    return $this->productRepository->findById($id);
  }

  public function getProductsByCategory(int $categoryId): Collection
  {
    return $this->productRepository->findByCategory($categoryId);
  }

  public function getPromotionalProducts(): Collection
  {
    return $this->productRepository->getPromotionalProducts();
  }

  public function getLowStockProducts(): Collection
  {
    return $this->productRepository->getLowStockProducts($this->lowStockThreshold);
  }

  public function getOutOfStockProducts(): Collection
  {
    return $this->productRepository->getOutOfStockProducts();
  }


public function store(StoreProductRequest $request): Product
{
    return DB::transaction(function () use ($request) {

        // 1️⃣ Création produit (sans fichiers)
        $product = $this->productRepository->create(
            $request->except(['main_image', 'images'])
        );

        $basePath = $this->productBasePath($product);

        // 2️⃣ Image principale
        if ($request->hasFile('main_image')) {
            $mainPath = $request->file('main_image')->store(
                "{$basePath}/main",
                'public'
            );

            $this->productRepository->update($product, [
                'main_image' => $mainPath,
            ]);
        }

        // 3️⃣ Galerie
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store(
                    "{$basePath}/gallery",
                    'public'
                );

                $this->productRepository
                    ->addGalleryImage($product, $path);
            }
        }

        return $this->productRepository
            ->findWithRelations($product->id);
    });
}




public function updateProduct(string $id, array $data): bool
{
    $product = $this->productRepository->findById($id);

    if (!$product) {
        return false;
    }

    DB::beginTransaction();
    
    try {
        $oldStock = $product->stock;
        
        // Extraire les données d'images
        $imageData = $this->extractImageData($data);
        $regularData = array_diff_key($data, [
            'main_image' => null,
            'images' => null,
            'existing_gallery' => null
        ]);

        // Mettre à jour les données régulières
        if (!empty($regularData)) {
            $result = $this->productRepository->update($product, $regularData);
            if (!$result) {
                DB::rollBack();
                return false;
            }
        }

        // Gérer les images
        if (!empty($imageData)) {
            $this->handleProductImages($product, $imageData);
        }

        // Vérifier le stock après mise à jour
        $product->refresh();
        if ($oldStock != $product->stock) {
            $this->checkStockAndDispatchEvents($product);
        }

        DB::commit();
        return true;
        
    } catch (\Exception $e) {
        DB::rollBack();
        Log::error('Erreur lors de la mise à jour du produit', [
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString(),
            'product_id' => $id,
            'data' => $data
        ]);
        throw $e;
    }
}

private function extractImageData(array $data): array
{
    $imageData = [];
    
    if (isset($data['main_image'])) {
        $imageData['main_image'] = $data['main_image'];
    }
    
    if (isset($data['images'])) {
        $imageData['images'] = $data['images'];
    }
    
    if (isset($data['existing_gallery'])) {
        $imageData['existing_gallery'] = $data['existing_gallery'];
    }
    
    return $imageData;
}

private function handleProductImages(Product $product, array $imageData): void
{
    $basePath = $this->productBasePath($product);

    /** -----------------
     * IMAGE PRINCIPALE
     * ----------------- */
    if (!empty($imageData['main_image'])) {

        if ($product->main_image) {
            Storage::disk('public')->delete($product->main_image);
        }

        $path = $imageData['main_image']->store(
            "{$basePath}/main",
            'public'
        );

        $product->update(['main_image' => $path]);
    }

    /** -----------------
     * GALERIE – SUPPRESSION
     * ----------------- */
    $existing = $imageData['existing_gallery'] ?? [];

    $product->images()
        ->whereNotIn('path', $existing)
        ->get()
        ->each(function ($img) {
            Storage::disk('public')->delete($img->path);
            $img->delete();
        });

    /** -----------------
     * GALERIE – AJOUT
     * ----------------- */
    if (!empty($imageData['images'])) {
        foreach ($imageData['images'] as $image) {
            $path = $image->store(
                "{$basePath}/gallery",
                'public'
            );

            $product->images()->create([
                'path' => $path
            ]);
        }
    }
}

  public function applyPromotion(string $id, float $discountPrice, ?\DateTime $endDate = null): bool
  {
    $product = $this->productRepository->findById($id);

    if (!$product) {
      return false;
    }

    // Vérifier que le prix promotionnel est inférieur au prix actuel
    if ($discountPrice >= $product->price) {
      throw new \InvalidArgumentException('Le prix promotionnel doit être inférieur au prix actuel');
    }

    return $this->productRepository->applyPromotion($id, $discountPrice, $endDate);
  }

  public function removePromotion(string $id): bool
  {
    return $this->productRepository->removePromotion($id);
  }

public function deleteProduct(string $id): bool
{
    $product = $this->productRepository->findById($id);

    if (!$product) {
        return false;
    }

    return DB::transaction(function () use ($product) {

        // 1️⃣ Supprimer le dossier images
        $basePath = $this->productBasePath($product);
        Storage::disk('public')->deleteDirectory($basePath);

        // 2️⃣ Supprimer le produit (cascade images)
        return $this->productRepository->delete($product) !== false;
    });
}


  private function checkStockAndDispatchEvents(Product $product): void
  {
    if ($product->isStockLow()) {
      Event::dispatch(new ProductStockLow($product));
    }

    if ($product->isOutOfStock()) {
      Event::dispatch(new ProductOutOfStock($product));
    }
  }

public function deleteImage(ProductImage $image): void
{
    Storage::disk('public')->delete($image->path);
    $image->delete();
}

}
