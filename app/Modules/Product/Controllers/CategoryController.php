<?php

namespace App\Modules\Product\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Product\Requests\StoreCategoryRequest;
use App\Modules\Product\Services\CategoryService;
use App\Modules\Product\Resources\CategoryResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function __construct(
    private CategoryService $categoryService
  ) {
  }

  public function index(Request $request): JsonResponse
  {
    $perPage = $request->get('per_page', 15);
    $categories = $this->categoryService->getPaginatedCategories($perPage);

    return response()->json([
      'data' => CategoryResource::collection($categories),
      'meta' => [
        'current_page' => $categories->currentPage(),
        'total' => $categories->total(),
        'per_page' => $categories->perPage(),
        'last_page' => $categories->lastPage()
      ]
    ]);
  }

  public function show(int $id): JsonResponse
  {
    $category = $this->categoryService->getCategoryWithProducts($id);

    if (!$category) {
      return response()->json([
        'message' => 'Catégorie non trouvée'
      ], 404);
    }

    return response()->json(new CategoryResource($category));
  }

  public function store(StoreCategoryRequest $request): JsonResponse
  {
    $category = $this->categoryService->createCategory($request->validated());

    return response()->json(new CategoryResource($category), 201);
  }

  public function update(StoreCategoryRequest $request, int $id): JsonResponse
  {
    $category = $this->categoryService->getCategoryById($id);

    if (!$category) {
      return response()->json([
        'message' => 'Catégorie non trouvée'
      ], 404);
    }

    $updated = $this->categoryService->updateCategory($id, $request->validated());

    if ($updated) {
      return response()->json(new CategoryResource($category->fresh()));
    }

    return response()->json([
      'message' => 'Erreur lors de la mise à jour'
    ], 500);
  }

  public function destroy(int $id): JsonResponse
  {
    $deleted = $this->categoryService->deleteCategory($id);

    if ($deleted) {
      return response()->json(null, 204);
    }

    return response()->json([
      'message' => 'Catégorie non trouvée'
    ], 404);
  }

  public function restore(int $id): JsonResponse
  {
    $restored = $this->categoryService->restoreCategory($id);

    if ($restored) {
      $category = $this->categoryService->getCategoryById($id);
      return response()->json(new CategoryResource($category));
    }

    return response()->json([
      'message' => 'Catégorie non trouvée'
    ], 404);
  }
}