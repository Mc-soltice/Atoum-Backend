<?php

namespace App\Modules\Product\Repositories;

use App\Modules\Product\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class CategoryRepository
{
  public function __construct(
    private Category $category
  ) {
  }

  public function getAll(): Collection
  {
    return $this->category->all();
  }

  public function getPaginated(int $perPage = 15): LengthAwarePaginator
  {
    return $this->category->paginate($perPage);
  }

  public function findById(int $id): ?Category
  {
    return $this->category->find($id);
  }

  public function findByIdWithProducts(int $id): ?Category
  {
    return $this->category->with('products')->find($id);
  }

  public function create(array $data): Category
  {
    return $this->category->create($data);
  }

  public function update(Category $category, array $data): bool
  {
    return $category->update($data);
  }

  public function delete(Category $category): ?bool
  {
    return $category->delete();
  }

  public function restore(int $id): bool
  {
    $category = $this->category->withTrashed()->find($id);

    if ($category) {
      return $category->restore();
    }

    return false;
  }

  public function forceDelete(int $id): bool
  {
    $category = $this->category->withTrashed()->find($id);

    if ($category) {
      return $category->forceDelete();
    }

    return false;
  }
}