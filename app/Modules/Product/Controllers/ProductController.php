<?php

namespace App\Modules\Product\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Product\Requests\StoreProductRequest;
use App\Modules\Product\Requests\UpdateStockRequest;
use App\Modules\Product\Services\ProductService;
use App\Modules\Product\Resources\ProductResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function __construct(
    private ProductService $productService
  ) {
  }

  public function index(Request $request): JsonResponse
  {
    $perPage = $request->get('per_page', 15);
    $category = $request->get('category');
    $promotional = $request->get('promotional');
    $search = $request->get('search');

    if ($category) {
      $products = $this->productService->getProductsByCategory($category);
      return response()->json(ProductResource::collection($products));
    }

    if ($promotional) {
      $products = $this->productService->getPromotionalProducts();
      return response()->json(ProductResource::collection($products));
    }

    if ($search) {
      $products = $this->productService->searchProducts($search);
      return response()->json(ProductResource::collection($products));
    }

    $products = $this->productService->getPaginatedProducts($perPage);

    return response()->json([
      'data' => ProductResource::collection($products),
      'meta' => [
        'current_page' => $products->currentPage(),
        'total' => $products->total(),
        'per_page' => $products->perPage(),
        'last_page' => $products->lastPage()
      ]
    ]);
  }

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

  public function store(StoreProductRequest $request): JsonResponse
  {
    $product = $this->productService->createProduct($request->validated());

    return response()->json(new ProductResource($product), 201);
  }

  public function update(StoreProductRequest $request, string $id): JsonResponse
  {
    $product = $this->productService->getProductById($id);

    if (!$product) {
      return response()->json([
        'message' => 'Produit non trouvé'
      ], 404);
    }

    $updated = $this->productService->updateProduct($id, $request->validated());

    if ($updated) {
      return response()->json(new ProductResource($product->fresh()));
    }

    return response()->json([
      'message' => 'Erreur lors de la mise à jour'
    ], 500);
  }

  public function updateStock(UpdateStockRequest $request, string $id): JsonResponse
  {
    $product = $this->productService->getProductById($id);

    if (!$product) {
      return response()->json([
        'message' => 'Produit non trouvé'
      ], 404);
    }

    $updated = $this->productService->updateStock($id, $request->validated()['stock']);

    if ($updated) {
      return response()->json(new ProductResource($product->fresh()));
    }

    return response()->json([
      'message' => 'Erreur lors de la mise à jour du stock'
    ], 500);
  }

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

  public function lowStock(): JsonResponse
  {
    $products = $this->productService->getLowStockProducts();
    return response()->json(ProductResource::collection($products));
  }

  public function outOfStock(): JsonResponse
  {
    $products = $this->productService->getOutOfStockProducts();
    return response()->json(ProductResource::collection($products));
  }

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

  public function restore(string $id): JsonResponse
  {
    $restored = $this->productService->restoreProduct($id);

    if ($restored) {
      $product = $this->productService->getProductById($id);
      return response()->json(new ProductResource($product));
    }

    return response()->json([
      'message' => 'Produit non trouvé'
    ], 404);
  }
}