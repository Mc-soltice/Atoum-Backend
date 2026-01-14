<?php

namespace App\Modules\Product\Repositories;

use App\Modules\Product\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

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

  public function getPaginated(int $perPage = 15): LengthAwarePaginator
  {
    return $this->product->with('category')->paginate($perPage);
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
    return $this->product->create($data);
  }

  public function update(Product $product, array $data): bool
  {
    return $product->update($data);
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