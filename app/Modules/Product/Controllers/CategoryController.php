<?php

namespace App\Modules\Product\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Product\Requests\StoreCategoryRequest;
use App\Modules\Product\Services\CategoryService;
use App\Modules\Product\Resources\CategoryResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Categories",
 *     description="Endpoints pour la gestion des catégories"
 * )
 */
class CategoryController extends Controller
{
  public function __construct(
    private CategoryService $categoryService
  ) {
  }

  /**
   * @OA\Get(
   *     path="/api/users/categories",
   *     tags={"Categories"},
   *     summary="Lister toutes les catégories",
   *     security={{"sanctum": {}}},
   *     @OA\Parameter(
   *         name="per_page",
   *         in="query",
   *         description="Nombre d'éléments par page",
   *         @OA\Schema(type="integer", default=15)
   *     ),
   *     @OA\Response(
   *         response=200,
   *         description="Liste paginée des catégories",
   *         @OA\JsonContent(
   *             @OA\Property(property="data", type="array", @OA\Items(ref="#/components/schemas/Category")),
   *             @OA\Property(property="meta", type="object")
   *         )
   *     )
   * )
   */
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

  /**
   * @OA\Get(
   *     path="/api/users/categories/{id}",
   *     tags={"Categories"},
   *     summary="Afficher une catégorie",
   *     security={{"sanctum": {}}},
   *     @OA\Parameter(
   *         name="id",
   *         in="path",
   *         required=true,
   *         description="ID de la catégorie",
   *         @OA\Schema(type="integer")
   *     ),
   *     @OA\Response(response=200, description="Détails de la catégorie"),
   *     @OA\Response(response=404, description="Catégorie non trouvée")
   * )
   */
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

  /**
   * @OA\Post(
   *     path="/api/users/categories",
   *     tags={"Categories"},
   *     summary="Créer une catégorie",
   *     security={{"sanctum": {}}},
   *     @OA\RequestBody(
   *         required=true,
   *         @OA\JsonContent(
   *             required={"name", "description"},
   *             @OA\Property(property="name", type="string", example="Électronique"),
   *             @OA\Property(property="description", type="string", example="Produits électroniques")
   *         )
   *     ),
   *     @OA\Response(response=201, description="Catégorie créée"),
   *     @OA\Response(response=422, description="Erreur de validation")
   * )
   */
  public function store(StoreCategoryRequest $request): JsonResponse
  {
    $category = $this->categoryService->createCategory($request->validated());

    return response()->json(new CategoryResource($category), 201);
  }

  /**
   * @OA\Put(
   *     path="/api/users/categories/{id}",
   *     tags={"Categories"},
   *     summary="Mettre à jour une catégorie",
   *     security={{"sanctum": {}}},
   *     @OA\Parameter(
   *         name="id",
   *         in="path",
   *         required=true,
   *         @OA\Schema(type="integer")
   *     ),
   *     @OA\RequestBody(
   *         @OA\JsonContent(
   *             @OA\Property(property="name", type="string"),
   *             @OA\Property(property="description", type="string")
   *         )
   *     ),
   *     @OA\Response(response=200, description="Catégorie mise à jour"),
   *     @OA\Response(response=404, description="Catégorie non trouvée")
   * )
   */
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

  /**
   * @OA\Delete(
   *     path="/api/users/categories/{id}",
   *     tags={"Categories"},
   *     summary="Supprimer une catégorie",
   *     security={{"sanctum": {}}},
   *     @OA\Parameter(
   *         name="id",
   *         in="path",
   *         required=true,
   *         @OA\Schema(type="integer")
   *     ),
   *     @OA\Response(response=204, description="Catégorie supprimée"),
   *     @OA\Response(response=404, description="Catégorie non trouvée")
   * )
   */
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

  /**
   * @OA\Post(
   *     path="/api/users/categories/{id}/restore",
   *     tags={"Categories"},
   *     summary="Restaurer une catégorie supprimée",
   *     security={{"sanctum": {}}},
   *     @OA\Parameter(
   *         name="id",
   *         in="path",
   *         required=true,
   *         @OA\Schema(type="integer")
   *     ),
   *     @OA\Response(response=200, description="Catégorie restaurée"),
   *     @OA\Response(response=404, description="Catégorie non trouvée")
   * )
   */
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