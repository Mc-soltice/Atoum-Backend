<?php

namespace App\Modules\Delivery\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Delivery\Models\DeliveryOption;
use App\Modules\Delivery\Requests\DeliveryOptionRequest;
use App\Modules\Delivery\Services\DeliveryOptionService;
use App\Modules\Delivery\Resources\DeliveryOptionResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="DeliveryOptions",
 *     description="Gestion des options de livraison"
 * )
 */
class DeliveryOptionController extends Controller
{
    public function __construct(
        private DeliveryOptionService $service
    ) {}

    /**
     * Liste toutes les options de livraison (Admin)
     * 
     * @OA\Get(
     *     path="/api/admin/delivery-options",
     *     tags={"DeliveryOptions"},
     *     summary="Lister toutes les options de livraison (Admin)",
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="is_active",
     *         in="query",
     *         description="Filtrer par statut actif",
     *         @OA\Schema(type="boolean")
     *     ),
     *     @OA\Parameter(
     *         name="search",
     *         in="query",
     *         description="Rechercher par nom",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Liste des options de livraison",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(ref="#/components/schemas/DeliveryOption")
     *             ),
     *             @OA\Property(
     *                 property="meta",
     *                 type="object",
     *                 @OA\Property(property="total", type="integer", example=10),
     *                 @OA\Property(property="per_page", type="integer", example=15),
     *                 @OA\Property(property="current_page", type="integer", example=1)
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Non authentifié"
     *     ),
     *     @OA\Response(
     *         response=403,
     *         description="Non autorisé"
     *     )
     * )
     */
    public function index(Request $request): JsonResponse
    {
        $filters = $request->only(['is_active', 'search']);
        $options = $this->service->getAllOptions($filters);

        return response()->json([
            'data' => DeliveryOptionResource::collection($options),
            'meta' => [
                'total' => $options->total(),
                'per_page' => $options->perPage(),
                'current_page' => $options->currentPage(),
            ]
        ]);
    }

    /**
     * Liste les options actives (Public)
     * 
     * @OA\Get(
     *     path="/api/delivery-options/available",
     *     tags={"DeliveryOptions"},
     *     summary="Lister les options de livraison disponibles",
     *     @OA\Response(
     *         response=200,
     *         description="Liste des options actives",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/DeliveryOption")
     *         )
     *     )
     * )
     */
    public function available(): JsonResponse
    {
        $options = $this->service->getAvailableOptions();

        return response()->json(
            DeliveryOptionResource::collection($options)
        );
    }

    /**
     * Affiche une option spécifique
     * 
     * @OA\Get(
     *     path="/api/delivery-options/{id}",
     *     tags={"DeliveryOptions"},
     *     summary="Afficher une option de livraison",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="UUID de l'option de livraison",
     *         @OA\Schema(
     *             type="string",
     *             format="uuid",
     *             example="550e8400-e29b-41d4-a716-446655440000"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Détails de l'option",
     *         @OA\JsonContent(ref="#/components/schemas/DeliveryOption")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Option non trouvée"
     *     )
     * )
     */
    public function show(string $id): JsonResponse
    {
        $option = $this->service->getOption($id);

        if (!$option) {
            return response()->json([
                'message' => 'Option de livraison non trouvée'
            ], 404);
        }

        return response()->json(
            new DeliveryOptionResource($option)
        );
    }

    /**
     * Crée une nouvelle option
     * 
     * @OA\Post(
     *     path="/api/admin/delivery-options",
     *     tags={"DeliveryOptions"},
     *     summary="Créer une option de livraison",
     *     security={{"bearerAuth":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"name", "price", "delay_days"},
     *             @OA\Property(property="name", type="string", example="Livraison Express"),
     *             @OA\Property(property="description", type="string", example="Livraison en 24h"),
     *             @OA\Property(property="price", type="number", format="float", example=2500.00),
     *             @OA\Property(property="delay_days", type="integer", example=1),
     *             @OA\Property(property="is_active", type="boolean", example=true),
     *             @OA\Property(property="order", type="integer", example=1)
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Option créée",
     *         @OA\JsonContent(ref="#/components/schemas/DeliveryOption")
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Erreur de validation"
     *     )
     * )
     */
    public function store(DeliveryOptionRequest $request): JsonResponse
    {
        $option = $this->service->createOption($request->validated());

        return response()->json(
            new DeliveryOptionResource($option),
            201
        );
    }

    /**
     * Met à jour une option
     * 
     * @OA\Put(
     *     path="/api/admin/delivery-options/{id}",
     *     tags={"DeliveryOptions"},
     *     summary="Mettre à jour une option de livraison",
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="string", format="uuid")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="name", type="string", example="Livraison Express"),
     *             @OA\Property(property="description", type="string", example="Livraison en 24h"),
     *             @OA\Property(property="price", type="number", format="float", example=2500.00),
     *             @OA\Property(property="delay_days", type="integer", example=1),
     *             @OA\Property(property="is_active", type="boolean", example=true),
     *             @OA\Property(property="order", type="integer", example=1)
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Option mise à jour",
     *         @OA\JsonContent(ref="#/components/schemas/DeliveryOption")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Option non trouvée"
     *     )
     * )
     */
    public function update(DeliveryOptionRequest $request, DeliveryOption $deliveryOption): JsonResponse
    {
        $option = $this->service->updateOption($deliveryOption, $request->validated());

        return response()->json(
            new DeliveryOptionResource($option)
        );
    }

    /**
     * Supprime une option
     * 
     * @OA\Delete(
     *     path="/api/admin/delivery-options/{id}",
     *     tags={"DeliveryOptions"},
     *     summary="Supprimer une option de livraison",
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="string", format="uuid")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Option supprimée"
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Impossible de supprimer (option utilisée)"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Option non trouvée"
     *     )
     * )
     */
    public function destroy(DeliveryOption $deliveryOption): JsonResponse
    {
        try {
            $this->service->deleteOption($deliveryOption);

            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 400);
        }
    }

    /**
     * Active/désactive une option
     * 
     * @OA\Patch(
     *     path="/api/admin/delivery-options/{id}/toggle",
     *     tags={"DeliveryOptions"},
     *     summary="Activer/désactiver une option",
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="string", format="uuid")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Statut modifié",
     *         @OA\JsonContent(ref="#/components/schemas/DeliveryOption")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Option non trouvée"
     *     )
     * )
     */
    public function toggle(DeliveryOption $deliveryOption): JsonResponse
    {
        $option = $this->service->toggleActive($deliveryOption);

        return response()->json(
            new DeliveryOptionResource($option)
        );
    }

    /**
     * Réorganise l'ordre des options
     * 
     * @OA\Patch(
     *     path="/api/admin/delivery-options/reorder",
     *     tags={"DeliveryOptions"},
     *     summary="Réorganiser l'ordre des options",
     *     security={{"bearerAuth":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"order"},
     *             @OA\Property(
     *                 property="order",
     *                 type="array",
     *                 @OA\Items(
     *                     type="object",
     *                     @OA\Property(property="id", type="string", format="uuid"),
     *                     @OA\Property(property="order", type="integer", example=1)
     *                 )
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Ordre mis à jour"
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Erreur de validation"
     *     )
     * )
     */
    public function reorder(Request $request): JsonResponse
    {
        $request->validate([
            'order' => 'required|array',
            'order.*.id' => 'required|uuid|exists:delivery_options,id',
            'order.*.order' => 'required|integer|min:0',
        ]);

        $this->service->reorderOptions($request->order);

        return response()->json([
            'message' => 'Ordre mis à jour avec succès'
        ]);
    }
}