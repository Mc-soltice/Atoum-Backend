<?php

namespace App\Modules\Product\Doc;


/**
 * Documentation Swagger pour le module Categories
 * 
 * Les schémas suivants sont déjà définis dans les fichiers de Request correspondants :
 * - StoreCategoryRequest (défini dans App\Modules\Product\Requests\StoreCategoryRequest)
 * 
 * Ce fichier ne définit QUE les endpoints et les schémas supplémentaires nécessaires
 */


/**
 * Module: Catégories
 * Documentation pour la gestion des catégories de produits
 */

/**
 * @OA\Schema(
 *     schema="Category",
 *     type="object",
 *     required={"id", "name", "description", "created_at", "updated_at"},
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="name", type="string", maxLength=255, example="Électronique"),
 *     @OA\Property(property="description", type="string", example="Appareils électroniques et gadgets"),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time"),
 *     @OA\Property(property="deleted_at", type="string", format="date-time", nullable=true)
 * )
 */

/**
 * @OA\Schema(
 *     schema="CategoryWithProducts",
 *     type="object",
 *     allOf={
 *         @OA\Schema(ref="#/components/schemas/Category")
 *     },
 *     @OA\Property(
 *         property="products",
 *         type="array",
 *         @OA\Items(ref="#/components/schemas/Product")
 *     )
 * )
 */

/**
 * @OA\Schema(
 *     schema="CategoryResource",
 *     type="object",
 *     allOf={
 *         @OA\Schema(ref="#/components/schemas/Category")
 *     }
 * )
 */

/**
 * @OA\Schema(
 *     schema="StoreCategoryRequest",
 *     type="object",
 *     required={"name", "description"},
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         maxLength=255,
 *         example="Électronique",
 *         description="Nom unique de la catégorie"
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         example="Appareils électroniques et gadgets",
 *         description="Description de la catégorie"
 *     )
 * )
 */

/**
 * @OA\Schema(
 *     schema="UpdateCategoryRequest",
 *     type="object",
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         maxLength=255,
 *         example="Électronique Modifié",
 *         description="Nom unique de la catégorie"
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         example="Nouvelle description",
 *         description="Description mise à jour"
 *     )
 * )
 */

/**
 * @OA\Schema(
 *     schema="CategoriesPaginatedResponse",
 *     type="object",
 *     @OA\Property(
 *         property="data",
 *         type="array",
 *         @OA\Items(ref="#/components/schemas/CategoryResource")
 *     ),
 *     @OA\Property(
 *         property="meta",
 *         type="object",
 *         @OA\Property(property="current_page", type="integer", example=1),
 *         @OA\Property(property="total", type="integer", example=50),
 *         @OA\Property(property="per_page", type="integer", example=15),
 *         @OA\Property(property="last_page", type="integer", example=4)
 *     )
 * )
 */

/**
 * @OA\Schema(
 *     schema="NotFoundResponse",
 *     type="object",
 *     @OA\Property(property="message", type="string", example="Catégorie non trouvée")
 * )
 */

/**
 * @OA\Schema(
 *     schema="ValidationErrorResponse",
 *     type="object",
 *     @OA\Property(
 *         property="message",
 *         type="string",
 *         example="The given data was invalid."
 *     ),
 *     @OA\Property(
 *         property="errors",
 *         type="object",
 *         additionalProperties={
 *             "type": "array",
 *             @OA\Items(type="string", example="Le nom de la catégorie est obligatoire")
 *         }
 *     )
 * )
 */

/**
 * @OA\Get(
 *     path="/api/users/categories",
 *     tags={"Categories"},
 *     summary="Liste des catégories",
 *     description="Récupérer la liste paginée des catégories avec leurs produits",
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="per_page",
 *         in="query",
 *         description="Nombre d'éléments par page",
 *         required=false,
 *         @OA\Schema(type="integer", default=15, example=15)
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Liste des catégories",
 *         @OA\JsonContent(ref="#/components/schemas/CategoriesPaginatedResponse")
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
 *     path="/api/users/categories/{id}",
 *     tags={"Categories"},
 *     summary="Afficher une catégorie",
 *     description="Récupérer les détails d'une catégorie spécifique avec ses produits",
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID de la catégorie",
 *         @OA\Schema(type="integer", example=1)
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Détails de la catégorie",
 *         @OA\JsonContent(ref="#/components/schemas/CategoryResource")
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Catégorie non trouvée",
 *         @OA\JsonContent(ref="#/components/schemas/NotFoundResponse")
 *     )
 * )
 */
/**
 * @OA\Post(
 *     path="/api/users/categories",
 *     tags={"Categories"},
 *     summary="Créer une catégorie",
 *     description="Créer une nouvelle catégorie de produits",
 *     security={{"bearerAuth": {}}},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Données de la catégorie",
 *         @OA\JsonContent(ref="#/components/schemas/StoreCategoryRequest")
 *     ),
 *     @OA\Response(
 *         response=201,
 *         description="Catégorie créée avec succès",
 *         @OA\JsonContent(ref="#/components/schemas/CategoryResource")
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
 *     path="/api/users/categories/{id}",
 *     tags={"Categories"},
 *     summary="Mettre à jour une catégorie",
 *     description="Modifier les informations d'une catégorie existante",
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID de la catégorie",
 *         @OA\Schema(type="integer", example=1)
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         description="Données à mettre à jour",
 *         @OA\JsonContent(ref="#/components/schemas/UpdateCategoryRequest")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Catégorie mise à jour",
 *         @OA\JsonContent(ref="#/components/schemas/CategoryResource")
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Catégorie non trouvée",
 *         @OA\JsonContent(ref="#/components/schemas/NotFoundResponse")
 *     ),
 *     @OA\Response(
 *         response=422,
 *         description="Erreur de validation",
 *         @OA\JsonContent(ref="#/components/schemas/ValidationErrorResponse")
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
 * @OA\Delete(
 *     path="/api/users/categories/{id}",
 *     tags={"Categories"},
 *     summary="Supprimer une catégorie",
 *     description="Supprimer une catégorie (soft delete)",
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID de la catégorie",
 *         @OA\Schema(type="integer", example=1)
 *     ),
 *     @OA\Response(
 *         response=204,
 *         description="Catégorie supprimée avec succès"
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Catégorie non trouvée",
 *         @OA\JsonContent(ref="#/components/schemas/NotFoundResponse")
 *     )
 * )
 */
/**
 * @OA\Post(
 *     path="/api/users/categories/{id}/restore",
 *     tags={"Categories"},
 *     summary="Restaurer une catégorie",
 *     description="Restaurer une catégorie précédemment supprimée (soft delete)",
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID de la catégorie à restaurer",
 *         @OA\Schema(type="integer", example=1)
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Catégorie restaurée",
 *         @OA\JsonContent(ref="#/components/schemas/CategoryResource")
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Catégorie non trouvée",
 *         @OA\JsonContent(ref="#/components/schemas/NotFoundResponse")
 *     )
 * )
 */
class CategoryControllerDocs
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
}
