<?php

namespace App\Modules\Product\Services;

use App\Modules\Product\Repositories\ProductRepository;
use App\Modules\Product\Models\Product;
use App\Modules\Product\Events\ProductStockLow;
use App\Modules\Product\Events\ProductOutOfStock;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;

class ProductService
{
  private int $lowStockThreshold;

  public function __construct(
    private ProductRepository $productRepository
  ) {
    $this->lowStockThreshold = config('product.stock_low_threshold', 10);
  }

  public function getAllProducts(): Collection
  {
    return $this->productRepository->getAll();
  }

  public function getPaginatedProducts(int $perPage = 15): LengthAwarePaginator
  {
    return $this->productRepository->getPaginated($perPage);
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

  public function searchProducts(string $searchTerm): Collection
  {
    return $this->productRepository->search($searchTerm);
  }

  public function getLowStockProducts(): Collection
  {
    return $this->productRepository->getLowStockProducts($this->lowStockThreshold);
  }

  public function getOutOfStockProducts(): Collection
  {
    return $this->productRepository->getOutOfStockProducts();
  }

  public function createProduct(array $data): Product
  {
    try {
      $product = $this->productRepository->create($data);

      // Vérifier le stock après création
      $this->checkStockAndDispatchEvents($product);

      return $product;
    } catch (\Exception $e) {
      Log::error('Erreur lors de la création du produit', [
        'error' => $e->getMessage(),
        'data' => $data
      ]);
      throw $e;
    }
  }

  public function updateProduct(string $id, array $data): bool
  {
    $product = $this->productRepository->findById($id);

    if (!$product) {
      return false;
    }

    try {
      $oldStock = $product->stock;
      $result = $this->productRepository->update($product, $data);

      // Vérifier le stock après mise à jour
      if ($result && $oldStock != $data['stock'] ?? $product->stock) {
        $this->checkStockAndDispatchEvents($product->fresh());
      }

      return $result;
    } catch (\Exception $e) {
      Log::error('Erreur lors de la mise à jour du produit', [
        'error' => $e->getMessage(),
        'product_id' => $id,
        'data' => $data
      ]);
      throw $e;
    }
  }

  public function updateStock(string $id, int $stock): bool
  {
    $product = $this->productRepository->findById($id);

    if (!$product) {
      return false;
    }

    $oldStock = $product->stock;
    $result = $this->productRepository->updateStock($id, $stock);

    if ($result && $oldStock != $stock) {
      $this->checkStockAndDispatchEvents($product->fresh());
    }

    return $result;
  }

  public function incrementStock(string $id, int $quantity): bool
  {
    return $this->productRepository->incrementStock($id, $quantity);
  }

  public function decrementStock(string $id, int $quantity): bool
  {
    $product = $this->productRepository->findById($id);

    if (!$product || $product->stock < $quantity) {
      return false;
    }

    $result = $this->productRepository->decrementStock($id, $quantity);

    if ($result) {
      $updatedProduct = $product->fresh();
      $this->checkStockAndDispatchEvents($updatedProduct);
    }

    return $result;
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

    try {
      return $this->productRepository->delete($product) !== false;
    } catch (\Exception $e) {
      Log::error('Erreur lors de la suppression du produit', [
        'error' => $e->getMessage(),
        'product_id' => $id
      ]);
      throw $e;
    }
  }

  public function restoreProduct(string $id): bool
  {
    try {
      return $this->productRepository->restore($id);
    } catch (\Exception $e) {
      Log::error('Erreur lors de la restauration du produit', [
        'error' => $e->getMessage(),
        'product_id' => $id
      ]);
      throw $e;
    }
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
}