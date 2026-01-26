<?php

namespace App\Modules\Product\Repositories;

use App\Modules\Product\Models\Product;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Modules\Product\Models\ProductImage;


class ProductRepository
{
  public function __construct(
    private Product $product
  ) {
  }

  public function getAll(): Collection
  {
    return $this->product->with('category')->get();
  }

  public function findById(string $id): ?Product
  {
    return $this->product->with('category')->find($id);
  }

  public function findByCategory(int $categoryId): Collection
  {
    return $this->product->where('category_id', $categoryId)
      ->with('category')
      ->get();
  }

  public function getPromotionalProducts(): Collection
  {
    return $this->product->where('is_promotional', true)
      ->where(function ($query) {
        $query->whereNull('promo_end_date')
          ->orWhere('promo_end_date', '>', now());
      })
      ->with('category')
      ->get();
  }

  public function search(string $searchTerm): Collection
  {
    return $this->product->where('name', 'like', "%{$searchTerm}%")
      ->orWhere('description', 'like', "%{$searchTerm}%")
      ->with('category')
      ->get();
  }

  public function getLowStockProducts(int $threshold = 10): Collection
  {
    return $this->product->where('stock', '>', 0)
      ->where('stock', '<=', $threshold)
      ->with('category')
      ->get();
  }

  public function getOutOfStockProducts(): Collection
  {
    return $this->product->where('stock', '<=', 0)
      ->with('category')
      ->get();
  }

    public function create(array $data): Product
    {
        return Product::query()->create($data);
    }

public function update(Product $product, array $data): bool
{
    try {
        // Convertir les tableaux en JSON si nécessaire
        foreach (['ingredients', 'benefits'] as $field) {
            if (isset($data[$field]) && is_array($data[$field])) {
                $data[$field] = json_encode(array_values($data[$field]));
            }
        }

        // Gérer la date de fin de promo
        if (isset($data['promo_end_date']) && !empty($data['promo_end_date'])) {
            $data['promo_end_date'] = \Carbon\Carbon::parse($data['promo_end_date']);
        }

        // Gérer original_price si is_promotional est false
        if (isset($data['is_promotional']) && !$data['is_promotional']) {
            $data['original_price'] = null;
            $data['promo_end_date'] = null;
        }

        return $product->update($data);
    } catch (\Exception $e) {
        Log::error('Repository update error', [
            'product_id' => $product->id,
            'error' => $e->getMessage(),
            'data' => $data
        ]);
        throw $e;
    }
}
    public function addGalleryImage(Product $product, string $path): void
    {
        ProductImage::query()->create([
            'product_id' => $product->id,
            'path' => $path,
        ]);
    }

    public function findWithRelations(string $id): Product
    {
        return Product::query()
            ->with(['images', 'category'])
            ->findOrFail($id);
    }


  public function updateStock(string $id, int $quantity): bool
  {
    return $this->product->where('id', $id)->update(['stock' => $quantity]);
  }

  public function incrementStock(string $id, int $quantity): bool
  {
    return $this->product->where('id', $id)
      ->update(['stock' => DB::raw("stock + {$quantity}")]);
  }

  public function decrementStock(string $id, int $quantity): bool
  {
    return $this->product->where('id', $id)
      ->where('stock', '>=', $quantity)
      ->update(['stock' => DB::raw("stock - {$quantity}")]);
  }

  public function applyPromotion(string $id, float $discountPrice, ?\DateTime $endDate = null): bool
  {
    $product = $this->findById($id);

    if (!$product) {
      return false;
    }

    $updateData = [
      'is_promotional' => true,
      'original_price' => $product->price,
      'price' => $discountPrice
    ];

    if ($endDate) {
      $updateData['promo_end_date'] = $endDate;
    }

    return $product->update($updateData);
  }

  public function removePromotion(string $id): bool
  {
    $product = $this->findById($id);

    if (!$product) {
      return false;
    }

    $updateData = [
      'is_promotional' => false,
      'price' => $product->original_price ?: $product->price,
      'original_price' => null,
      'promo_end_date' => null
    ];

    return $product->update($updateData);
  }

  public function delete(Product $product): ?bool
  {
    return $product->delete();
  }

  public function restore(string $id): bool
  {
    $product = $this->product->withTrashed()->find($id);

    if ($product) {
      return $product->restore();
    }

    return false;
  }

  public function forceDelete(string $id): bool
  {
    $product = $this->product->withTrashed()->find($id);

    if ($product) {
      return $product->forceDelete();
    }

    return false;
  }

  
}