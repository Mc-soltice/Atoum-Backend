<?php

namespace App\Modules\Product\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Modules\Product\Models\ProductImage;
use App\Modules\Product\Services\ProductService;
use App\Modules\Product\Resources\ProductResource;
use App\Modules\Product\Requests\StoreProductRequest;
use App\Modules\Product\Requests\DeleteProductImageRequest;

/**
 * @OA\Tag(
 *     name="Products",
 *     description="Endpoints pour la gestion des produits"
 * )
 */
class ProductController extends Controller
{
  public function __construct(
    private ProductService $productService
  ) {
  }

  /**
   * @OA\Get(
   *     path="/api/users/products",
   *     tags={"Products"},
   *     summary="Lister tous les produits",
   *     security={{"sanctum": {}}},
   *     @OA\Parameter(
   *         name="per_page",
   *         in="query",
   *         description="Nombre d'éléments par page",
   *         @OA\Schema(type="integer", default=15)
   *     ),
   *     @OA\Response(response=200, description="Liste paginée des produits")
   * )
   */
  public function index(Request $request): JsonResponse
  {
    $category = $request->get('category');
    $promotional = $request->get('promotional');

    if ($category) {
      $products = $this->productService->getProductsByCategory($category);
      return response()->json(ProductResource::collection($products));
    }

    if ($promotional) {
      $products = $this->productService->getPromotionalProducts();
      return response()->json(ProductResource::collection($products));
    }

    $products = $this->productService->getAllProducts();

    return response()->json([
      'data' => ProductResource::collection($products),
    ]);
  }

  /**
   * @OA\Get(
   *     path="/api/users/products/{id}",
   *     tags={"Products"},
   *     summary="Afficher un produit",
   *     security={{"sanctum": {}}},
   *     @OA\Parameter(
   *         name="id",
   *         in="path",
   *         required=true,
   *         @OA\Schema(type="string")
   *     ),
   *     @OA\Response(response=200, description="Détails du produit"),
   *     @OA\Response(response=404, description="Produit non trouvé")
   * )
   */
  public function show(string $id): JsonResponse
  {
    $product = $this->productService->getProductById($id);

    if (!$product) {
      return response()->json([
        'message' => 'Produit non trouvé'
      ], 404);
    }

    return response()->json(new ProductResource($product));
  }

  /**
   * @OA\Post(
   *     path="/api/users/products",
   *     tags={"Products"},
   *     summary="Créer un produit",
   *     security={{"sanctum": {}}},
   *     @OA\RequestBody(
   *         required=true,
   *         @OA\MediaType(
   *             mediaType="multipart/form-data",
   *             @OA\Schema(
   *                 required={"name","category_id","main_image","price","stock"},
   *                 @OA\Property(property="name", type="string"),
   *                 @OA\Property(property="category_id", type="integer"),
   *                 @OA\Property(property="main_image", type="string", format="binary"),
   *                 @OA\Property(property="images[]", type="string", format="binary"),
   *                 @OA\Property(property="price", type="number"),
   *                 @OA\Property(property="stock", type="integer")
   *             )
   *         )
   *     ),
   *     @OA\Response(response=201, description="Produit créé")
   * )
   */
  public function store(StoreProductRequest $request): JsonResponse
  {
      $product = $this->productService->store($request);

      return response()->json(new ProductResource($product), 201);
  }


  /**
   * @OA\Put(
   *     path="/api/users/products/{id}",
   *     tags={"Products"},
   *     summary="Mettre à jour un produit",
   *     security={{"sanctum": {}}},
   *     @OA\Parameter(
   *         name="id",
   *         in="path",
   *         required=true,
   *         @OA\Schema(type="string")
   *     ),
   *     @OA\Response(response=200, description="Produit mis à jour")
   * )
   */
public function update(StoreProductRequest $request, string $id): JsonResponse
{
  if ($request->all() === [] && $request->files->all() === []) {
    return response()->json([
        'message' => 'Aucune donnée fournie pour la mise à jour'
    ], 422);
}

    $product = $this->productService->getProductById($id);

    if (!$product) {
        return response()->json([
            'message' => 'Produit non trouvé'
        ], 404);
    }

    // Ajouter un log pour déboguer
    log::info('Update product request data:', [
        'product_id' => $id,
        'data' => $request->all(),
        'files' => $request->file() ? array_keys($request->file()) : []
    ]);

    $updated = $this->productService->updateProduct($id, $request->validated());

    if ($updated) {
        // Récupérer le produit fraîchement mis à jour avec ses relations
        $updatedProduct = $this->productService->getProductById($id);
        return response()->json(new ProductResource($updatedProduct));
    }

    return response()->json([
        'message' => 'Erreur lors de la mise à jour'
    ], 500);
}


  /**
   * @OA\Post(
   *     path="/api/users/products/{id}/promotion",
   *     tags={"Products"},
   *     summary="Appliquer une promotion",
   *     security={{"sanctum": {}}},
   *     @OA\Parameter(
   *         name="id",
   *         in="path",
   *         required=true,
   *         @OA\Schema(type="string")
   *     ),
   *     @OA\Response(response=200, description="Promotion appliquée")
   * )
   */
  public function applyPromotion(Request $request, string $id): JsonResponse
  {
    $request->validate([
      'discount_price' => 'required|numeric|min:0',
      'end_date' => 'nullable|date_format:Y-m-d H:i:s|after:now'
    ]);

    $product = $this->productService->getProductById($id);

    if (!$product) {
      return response()->json([
        'message' => 'Produit non trouvé'
      ], 404);
    }

    $endDate = $request->has('end_date') ? new \DateTime($request->end_date) : null;
    $updated = $this->productService->applyPromotion($id, $request->discount_price, $endDate);

    if ($updated) {
      return response()->json(new ProductResource($product->fresh()));
    }

    return response()->json([
      'message' => 'Erreur lors de l\'application de la promotion'
    ], 500);
  }

  /**
   * @OA\Delete(
   *     path="/api/users/products/{id}/promotion",
   *     tags={"Products"},
   *     summary="Retirer la promotion d'un produit",
   *     security={{"sanctum": {}}},
   *     @OA\Parameter(
   *         name="id",
   *         in="path",
   *         required=true,
   *         @OA\Schema(type="string")
   *     ),
   *     @OA\Response(response=200, description="Promotion retirée")
   * )
   */
  public function removePromotion(string $id): JsonResponse
  {
    $product = $this->productService->getProductById($id);

    if (!$product) {
      return response()->json([
        'message' => 'Produit non trouvé'
      ], 404);
    }

    $updated = $this->productService->removePromotion($id);

    if ($updated) {
      return response()->json(new ProductResource($product->fresh()));
    }

    return response()->json([
      'message' => 'Erreur lors du retrait de la promotion'
    ], 500);
  }

  /**
   * @OA\Get(
   *     path="/api/users/products/low-stock",
   *     tags={"Products"},
   *     summary="Produits en faible stock",
   *     security={{"sanctum": {}}},
   *     @OA\Response(response=200, description="Produits en faible stock")
   * )
   */
  public function lowStock(): JsonResponse
  {
    $products = $this->productService->getLowStockProducts();
    return response()->json(ProductResource::collection($products));
  }

  /**
   * @OA\Get(
   *     path="/api/users/products/out-of-stock",
   *     tags={"Products"},
   *     summary="Produits en rupture de stock",
   *     security={{"sanctum": {}}},
   *     @OA\Response(response=200, description="Produits en rupture de stock")
   * )
   */
  public function outOfStock(): JsonResponse
  {
    $products = $this->productService->getOutOfStockProducts();
    return response()->json(ProductResource::collection($products));
  }

  /**
   * @OA\Delete(
   *     path="/api/users/products/{id}",
   *     tags={"Products"},
   *     summary="Supprimer un produit",
   *     security={{"sanctum": {}}},
   *     @OA\Parameter(
   *         name="id",
   *         in="path",
   *         required=true,
   *         @OA\Schema(type="string")
   *     ),
   *     @OA\Response(response=204, description="Produit supprimé")
   * )
   */
  public function destroy(string $id): JsonResponse
  {
    $deleted = $this->productService->deleteProduct($id);

    if ($deleted) {
      return response()->json(null, 204);
    }

    return response()->json([
      'message' => 'Produit non trouvé'
    ], 404);
  }


   /**
     * @OA\Delete(
     *   path="/products/images",
     *   summary="Supprimer une image du produit",
     *   tags={"Products"}
     * )
     */
     public function deleteImage(DeleteProductImageRequest $request)
    {
        $image = ProductImage::findOrFail($request->image_id);
        app(ProductService::class)->deleteImage($image);

        return response()->json(['message' => 'Image supprimée']);
    }
}