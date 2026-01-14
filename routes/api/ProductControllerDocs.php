<?php

namespace App\Modules\Product\Doc;


/**
 * Module: Produits
 * Documentation pour la gestion des produits
 */

/**
 * @OA\Schema(
 *     schema="Product",
 *     type="object",
 *     required={"id", "name", "category_id", "price", "stock", "created_at", "updated_at"},
 *     @OA\Property(property="id", type="string", format="uuid", example="550e8400-e29b-41d4-a716-446655440000"),
 *     @OA\Property(property="name", type="string", maxLength=255, example="iPhone 15 Pro"),
 *     @OA\Property(property="category_id", type="integer", example=1),
 *     @OA\Property(property="price", type="number", format="float", example=999.99),
 *     @OA\Property(property="original_price", type="number", format="float", example=1199.99, nullable=true),
 *     @OA\Property(property="image", type="string", format="url", example="https://example.com/image.jpg", nullable=true),
 *     @OA\Property(property="description", type="string", example="Dernier smartphone Apple", nullable=true),
 *     @OA\Property(
 *         property="ingredients",
 *         type="array",
 *         @OA\Items(type="string", example="Écran Super Retina XDR"),
 *         nullable=true
 *     ),
 *     @OA\Property(
 *         property="benefits",
 *         type="array",
 *         @OA\Items(type="string", example="Haute performance"),
 *         nullable=true
 *     ),
 *     @OA\Property(property="usage", type="string", example="Téléphonie, navigation", nullable=true),
 *     @OA\Property(property="stock", type="integer", example=50),
 *     @OA\Property(property="is_promotional", type="boolean", example=true),
 *     @OA\Property(property="promo_end_date", type="string", format="date-time", nullable=true),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time"),
 *     @OA\Property(property="deleted_at", type="string", format="date-time", nullable=true),
 *     @OA\Property(
 *         property="category",
 *         ref="#/components/schemas/Category",
 *         nullable=true
 *     ),
 *     @OA\Property(property="discount_percentage", type="number", format="float", example=16.67, nullable=true),
 *     @OA\Property(property="is_stock_low", type="boolean", example=false),
 *     @OA\Property(property="is_out_of_stock", type="boolean", example=false)
 * )
 */

/**
 * @OA\Schema(
 *     schema="ProductResource",
 *     type="object",
 *     allOf={
 *         @OA\Schema(ref="#/components/schemas/Product")
 *     }
 * )
 */

/**
 * @OA\Schema(
 *     schema="StoreProductRequest",
 *     type="object",
 *     required={"name", "category_id", "price", "stock"},
 *     @OA\Property(property="name", type="string", maxLength=255, example="iPhone 15 Pro"),
 *     @OA\Property(property="category_id", type="integer", example=1),
 *     @OA\Property(property="price", type="number", format="float", example=999.99),
 *     @OA\Property(property="original_price", type="number", format="float", example=1199.99, nullable=true),
 *     @OA\Property(property="image", type="string", format="url", example="https://example.com/image.jpg", nullable=true),
 *     @OA\Property(property="description", type="string", example="Dernier smartphone Apple", nullable=true),
 *     @OA\Property(
 *         property="ingredients",
 *         type="array",
 *         @OA\Items(type="string", example="Écran Super Retina XDR"),
 *         nullable=true
 *     ),
 *     @OA\Property(
 *         property="benefits",
 *         type="array",
 *         @OA\Items(type="string", example="Haute performance"),
 *         nullable=true
 *     ),
 *     @OA\Property(property="usage", type="string", example="Téléphonie, navigation", nullable=true),
 *     @OA\Property(property="stock", type="integer", example=50),
 *     @OA\Property(property="is_promotional", type="boolean", example=false),
 *     @OA\Property(property="promo_end_date", type="string", format="date-time", example="2024-12-31 23:59:59", nullable=true)
 * )
 */

/**
 * @OA\Schema(
 *     schema="UpdateProductRequest",
 *     type="object",
 *     @OA\Property(property="name", type="string", maxLength=255, example="iPhone 15 Pro Max"),
 *     @OA\Property(property="category_id", type="integer", example=2),
 *     @OA\Property(property="price", type="number", format="float", example=1099.99),
 *     @OA\Property(property="original_price", type="number", format="float", example=1299.99, nullable=true),
 *     @OA\Property(property="image", type="string", format="url", example="https://example.com/new-image.jpg", nullable=true),
 *     @OA\Property(property="description", type="string", example="Dernier smartphone Apple avec plus de fonctionnalités", nullable=true),
 *     @OA\Property(
 *         property="ingredients",
 *         type="array",
 *         @OA\Items(type="string", example="Écran Super Retina XDR, Processeur A17 Pro"),
 *         nullable=true
 *     ),
 *     @OA\Property(
 *         property="benefits",
 *         type="array",
 *         @OA\Items(type="string", example="Haute performance, Longue autonomie"),
 *         nullable=true
 *     ),
 *     @OA\Property(property="usage", type="string", example="Téléphonie, navigation, jeux", nullable=true),
 *     @OA\Property(property="stock", type="integer", example=75),
 *     @OA\Property(property="is_promotional", type="boolean", example=true),
 *     @OA\Property(property="promo_end_date", type="string", format="date-time", example="2024-12-25 23:59:59", nullable=true)
 * )
 */

/**
 * @OA\Schema(
 *     schema="UpdateStockRequest",
 *     type="object",
 *     required={"stock"},
 *     @OA\Property(
 *         property="stock",
 *         type="integer",
 *         minimum=0,
 *         example=100,
 *         description="Nouvelle quantité en stock"
 *     )
 * )
 */

/**
 * @OA\Schema(
 *     schema="ApplyPromotionRequest",
 *     type="object",
 *     required={"discount_price"},
 *     @OA\Property(
 *         property="discount_price",
 *         type="number",
 *         format="float",
 *         example=899.99,
 *         description="Prix promotionnel"
 *     ),
 *     @OA\Property(
 *         property="end_date",
 *         type="string",
 *         format="date-time",
 *         example="2024-12-31 23:59:59",
 *         description="Date de fin de la promotion",
 *         nullable=true
 *     )
 * )
 */

/**
 * @OA\Schema(
 *     schema="ProductsPaginatedResponse",
 *     type="object",
 *     @OA\Property(
 *         property="data",
 *         type="array",
 *         @OA\Items(ref="#/components/schemas/ProductResource")
 *     ),
 *     @OA\Property(
 *         property="meta",
 *         type="object",
 *         @OA\Property(property="current_page", type="integer", example=1),
 *         @OA\Property(property="total", type="integer", example=150),
 *         @OA\Property(property="per_page", type="integer", example=15),
 *         @OA\Property(property="last_page", type="integer", example=10)
 *     )
 * )
 */

/**
 * @OA\Get(
 *     path="/api/users/products",
 *     tags={"Products"},
 *     summary="Liste des produits",
 *     description="Récupérer la liste des produits avec filtres optionnels",
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="per_page",
 *         in="query",
 *         description="Nombre d'éléments par page",
 *         required=false,
 *         @OA\Schema(type="integer", default=15, example=15)
 *     ),
 *     @OA\Parameter(
 *         name="category",
 *         in="query",
 *         description="Filtrer par ID de catégorie",
 *         required=false,
 *         @OA\Schema(type="integer", example=1)
 *     ),
 *     @OA\Parameter(
 *         name="promotional",
 *         in="query",
 *         description="Filtrer les produits en promotion",
 *         required=false,
 *         @OA\Schema(type="boolean", example=true)
 *     ),
 *     @OA\Parameter(
 *         name="search",
 *         in="query",
 *         description="Recherche textuelle",
 *         required=false,
 *         @OA\Schema(type="string", example="iPhone")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Liste des produits",
 *         @OA\JsonContent(
 *             oneOf={
 *                 @OA\Schema(ref="#/components/schemas/ProductsPaginatedResponse"),
 *                 @OA\Schema(
 *                     type="array",
 *                     @OA\Items(ref="#/components/schemas/ProductResource")
 *                 )
 *             }
 *         )
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Non authentifié",
 *         @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *     )
 * )
 */
/**
 * @OA\Get(
 *     path="/api/users/products/low-stock",
 *     tags={"Products"},
 *     summary="Produits en stock faible",
 *     description="Récupérer la liste des produits dont le stock est faible",
 *     security={{"bearerAuth": {}}},
 *     @OA\Response(
 *         response=200,
 *         description="Liste des produits en stock faible",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(ref="#/components/schemas/ProductResource")
 *         )
 *     )
 * )
 */
/**
 * @OA\Get(
 *     path="/api/users/products/out-of-stock",
 *     tags={"Products"},
 *     summary="Produits en rupture de stock",
 *     description="Récupérer la liste des produits épuisés",
 *     security={{"bearerAuth": {}}},
 *     @OA\Response(
 *         response=200,
 *         description="Liste des produits en rupture",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(ref="#/components/schemas/ProductResource")
 *         )
 *     )
 * )
 */
/**
 * @OA\Get(
 *     path="/api/users/products/{id}",
 *     tags={"Products"},
 *     summary="Afficher un produit",
 *     description="Récupérer les détails d'un produit spécifique",
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="UUID du produit",
 *         @OA\Schema(type="string", format="uuid", example="550e8400-e29b-41d4-a716-446655440000")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Détails du produit",
 *         @OA\JsonContent(ref="#/components/schemas/ProductResource")
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Produit non trouvé",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Produit non trouvé")
 *         )
 *     )
 * )
 */
/**
 * @OA\Post(
 *     path="/api/users/products",
 *     tags={"Products"},
 *     summary="Créer un produit",
 *     description="Ajouter un nouveau produit au catalogue",
 *     security={{"bearerAuth": {}}},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(ref="#/components/schemas/StoreProductRequest")
 *     ),
 *     @OA\Response(
 *         response=201,
 *         description="Produit créé",
 *         @OA\JsonContent(ref="#/components/schemas/ProductResource")
 *     ),
 *     @OA\Response(
 *         response=422,
 *         description="Erreur de validation",
 *         @OA\JsonContent(ref="#/components/schemas/ValidationErrorResponse")
 *     )
 * )
 */
/**
 * @OA\Put(
 *     path="/api/users/products/{id}",
 *     tags={"Products"},
 *     summary="Mettre à jour un produit",
 *     description="Modifier les informations d'un produit existant",
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="UUID du produit",
 *         @OA\Schema(type="string", format="uuid", example="550e8400-e29b-41d4-a716-446655440000")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(ref="#/components/schemas/UpdateProductRequest")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Produit mis à jour",
 *         @OA\JsonContent(ref="#/components/schemas/ProductResource")
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Produit non trouvé",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Produit non trouvé")
 *         )
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="Erreur serveur",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Erreur lors de la mise à jour")
 *         )
 *     )
 * )
 */
/**
 * @OA\Patch(
 *     path="/api/users/products/{id}/stock",
 *     tags={"Products"},
 *     summary="Mettre à jour le stock",
 *     description="Modifier la quantité en stock d'un produit",
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="UUID du produit",
 *         @OA\Schema(type="string", format="uuid", example="550e8400-e29b-41d4-a716-446655440000")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(ref="#/components/schemas/UpdateStockRequest")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Stock mis à jour",
 *         @OA\JsonContent(ref="#/components/schemas/ProductResource")
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Produit non trouvé",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Produit non trouvé")
 *         )
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="Erreur serveur",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Erreur lors de la mise à jour du stock")
 *         )
 *     )
 * )
 */
/**
 * @OA\Post(
 *     path="/api/users/products/{id}/promotion",
 *     tags={"Products"},
 *     summary="Appliquer une promotion",
 *     description="Appliquer une réduction promotionnelle sur un produit",
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="UUID du produit",
 *         @OA\Schema(type="string", format="uuid", example="550e8400-e29b-41d4-a716-446655440000")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(ref="#/components/schemas/ApplyPromotionRequest")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Promotion appliquée",
 *         @OA\JsonContent(ref="#/components/schemas/ProductResource")
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Produit non trouvé",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Produit non trouvé")
 *         )
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="Erreur serveur",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Erreur lors de l'application de la promotion")
 *         )
 *     )
 * )
 */
/**
 * @OA\Delete(
 *     path="/api/users/products/{id}/promotion",
 *     tags={"Products"},
 *     summary="Retirer une promotion",
 *     description="Retirer la promotion d'un produit",
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="UUID du produit",
 *         @OA\Schema(type="string", format="uuid", example="550e8400-e29b-41d4-a716-446655440000")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Promotion retirée",
 *         @OA\JsonContent(ref="#/components/schemas/ProductResource")
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Produit non trouvé",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Produit non trouvé")
 *         )
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="Erreur serveur",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Erreur lors du retrait de la promotion")
 *         )
 *     )
 * )
 */
/**
 * @OA\Delete(
 *     path="/api/users/products/{id}",
 *     tags={"Products"},
 *     summary="Supprimer un produit",
 *     description="Supprimer un produit (soft delete)",
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="UUID du produit",
 *         @OA\Schema(type="string", format="uuid", example="550e8400-e29b-41d4-a716-446655440000")
 *     ),
 *     @OA\Response(
 *         response=204,
 *         description="Produit supprimé"
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Produit non trouvé",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Produit non trouvé")
 *         )
 *     )
 * )
 */
/**
 * @OA\Post(
 *     path="/api/users/products/{id}/restore",
 *     tags={"Products"},
 *     summary="Restaurer un produit",
 *     description="Restaurer un produit précédemment supprimé",
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="UUID du produit",
 *         @OA\Schema(type="string", format="uuid", example="550e8400-e29b-41d4-a716-446655440000")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Produit restauré",
 *         @OA\JsonContent(ref="#/components/schemas/ProductResource")
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Produit non trouvé",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Produit non trouvé")
 *         )
 *     )
 * )
 */
class ProductControllerDocs
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
}
