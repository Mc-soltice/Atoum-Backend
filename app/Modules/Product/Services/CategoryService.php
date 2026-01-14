<?php

namespace App\Modules\Product\Services;

use App\Modules\Product\Repositories\CategoryRepository;
use App\Modules\Product\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Log;

class CategoryService
{
  public function __construct(
    private CategoryRepository $categoryRepository
  ) {
  }

  public function getAllCategories(): Collection
  {
    return $this->categoryRepository->getAll();
  }

  public function getPaginatedCategories(int $perPage = 15): LengthAwarePaginator
  {
    return $this->categoryRepository->getPaginated($perPage);
  }

  public function getCategoryById(int $id): ?Category
  {
    return $this->categoryRepository->findById($id);
  }

  public function getCategoryWithProducts(int $id): ?Category
  {
    return $this->categoryRepository->findByIdWithProducts($id);
  }

  public function createCategory(array $data): Category
  {
    try {
      return $this->categoryRepository->create($data);
    } catch (\Exception $e) {
      Log::error('Erreur lors de la création de la catégorie', [
        'error' => $e->getMessage(),
        'data' => $data
      ]);
      throw $e;
    }
  }

  public function updateCategory(int $id, array $data): bool
  {
    $category = $this->categoryRepository->findById($id);

    if (!$category) {
      return false;
    }

    try {
      return $this->categoryRepository->update($category, $data);
    } catch (\Exception $e) {
      Log::error('Erreur lors de la mise à jour de la catégorie', [
        'error' => $e->getMessage(),
        'category_id' => $id,
        'data' => $data
      ]);
      throw $e;
    }
  }

  public function deleteCategory(int $id): bool
  {
    $category = $this->categoryRepository->findById($id);

    if (!$category) {
      return false;
    }

    try {
      return $this->categoryRepository->delete($category) !== false;
    } catch (\Exception $e) {
      Log::error('Erreur lors de la suppression de la catégorie', [
        'error' => $e->getMessage(),
        'category_id' => $id
      ]);
      throw $e;
    }
  }

  public function restoreCategory(int $id): bool
  {
    try {
      return $this->categoryRepository->restore($id);
    } catch (\Exception $e) {
      Log::error('Erreur lors de la restauration de la catégorie', [
        'error' => $e->getMessage(),
        'category_id' => $id
      ]);
      throw $e;
    }
  }
}