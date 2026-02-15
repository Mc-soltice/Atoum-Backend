<?php

namespace App\Modules\Order\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Order\Models\Order;
use App\Modules\Order\Requests\OrderRequest;
use App\Modules\Order\Requests\OrderCancelRequest;
use App\Modules\Order\Services\OrderService;
use App\Modules\Order\Repositories\OrderRepository;
use App\Modules\Order\Resources\OrderResource;
use Illuminate\Support\Facades\Log;
use App\Modules\Order\Enums\OrderStatus;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Contrôleur pour la gestion des commandes
 * 
 * @OA\Tag(
 *     name="Orders",
 *     description="Gestion des commandes utilisateur"
 * )
 */
class OrderController extends Controller
{
    /**
     * Constructeur avec injection de dépendances
     */
    public function __construct(
        private OrderService $service,
        private OrderRepository $repository
    ) {}

    /**
     * Crée une nouvelle commande
     * 
     * @OA\Post(
     *     path="/api/orders",
     *     tags={"Orders"},
     *     summary="Créer une commande",
     *     security={{"bearerAuth":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Order")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Commande créée avec succès",
     *         @OA\JsonContent(ref="#/components/schemas/OrderResource")
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Erreur de validation"
     *     )
     * )
     */
    public function store(OrderRequest $request): JsonResponse
    {
        try {

            $userId = $request->user()?->id; // null si guest

            $order = $this->service->create(
                $request->validated(),
                $userId
            );

            return response()->json(
                new OrderResource($order),
                201
            );

        } catch (\Exception $e) {

            return response()->json([
                'message' => 'Erreur lors de la création de la commande',
                'error' => $e->getMessage()
            ], 400);
        }
    }


    /**
     * Liste toutes les commandes (admin)
     * 
     * @OA\Get(
     *     path="/api/orders",
     *     tags={"Orders"},
     *     summary="Lister toutes les commandes",
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="Filtrer par statut",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="search",
     *         in="query",
     *         description="Rechercher par référence ou email",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Liste des commandes",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(ref="#/components/schemas/OrderResource")
     *             )
     *         )
     *     )
     * )
     */
    public function index(Request $request): JsonResponse
    {
        $filters = $request->only(['status', 'search', 'date_from', 'date_to']);
        
        $orders = $this->repository->all($filters);
        
        return response()->json([
            'data' => OrderResource::collection($orders),
            'meta' => [
                'total' => $orders->total(),
                'per_page' => $orders->perPage(),
                'current_page' => $orders->currentPage(),
                'last_page' => $orders->lastPage(),
            ]
        ]);
    }

    /**
     * Liste les commandes de l'utilisateur connecté
     * 
     * @OA\Get(
     *     path="/api/user/orders",
     *     tags={"Orders"},
     *     summary="Lister mes commandes",
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Liste des commandes de l'utilisateur",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(ref="#/components/schemas/OrderResource")
     *             )
     *         )
     *     )
     * )
     */
    public function myOrders(Request $request): JsonResponse
    {
        $filters = $request->only(['status', 'date_from', 'date_to']);
        
        $orders = $this->repository->forUser(auth()->id(), $filters);
        
        return response()->json([
            'data' => OrderResource::collection($orders),
            'meta' => [
                'total' => $orders->total(),
                'per_page' => $orders->perPage(),
                'current_page' => $orders->currentPage(),
                'last_page' => $orders->lastPage(),
            ]
        ]);
    }

    /**
     * Affiche une commande spécifique
     * 
     * @OA\Get(
     *     path="/api/orders/{id}",
     *     tags={"Orders"},
     *     summary="Afficher une commande",
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="string", format="uuid")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Détails de la commande",
     *         @OA\JsonContent(ref="#/components/schemas/OrderResource")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Commande non trouvée"
     *     )
     * )
     */
    public function show(string $id): JsonResponse
    {
        $order = $this->repository->find($id);
        
        if (!$order) {
            return response()->json([
                'message' => 'Commande non trouvée'
            ], 404);
        }
        Log::info("Affichage de la commande ID: $order");
        
        
        return response()->json(
            new OrderResource($order)
        );
    }

    /**
     * Met à jour le statut d'une commande (admin)
     * 
     * @OA\Patch(
     *     path="/api/orders/{id}/status",
     *     tags={"Orders"},
     *     summary="Mettre à jour le statut",
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
     *             required={"status"},
     *             @OA\Property(property="status", type="string", enum={"pending","paid","shipped","delivered","cancelled"}),
     *             @OA\Property(property="notes", type="string", maxLength=500)
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Statut mis à jour",
     *         @OA\JsonContent(ref="#/components/schemas/OrderResource")
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Transition invalide"
     *     )
     * )
     */
    public function updateStatus(OrderRequest $request, string $id): JsonResponse
    {
        try {
            $order = $this->repository->find($id);
            
            if (!$order) {
                return response()->json([
                    'message' => 'Commande non trouvée'
                ], 404);
            }
            
            
            $validated = $request->validated();
            $status = OrderStatus::from($validated['status']);
            
            $order = $this->service->updateStatus(
                $order,
                $status,
                $validated['notes'] ?? null
            );
            Log::info("Statut de la commande ID: {$order->id} mis à jour à {$status->value}");
            return response()->json(
                new OrderResource($order)
            );
        } catch (\InvalidArgumentException $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 400);
        }
    }

    /**
     * Annule une commande
     * 
     * @OA\Post(
     *     path="/api/orders/{id}/cancel",
     *     tags={"Orders"},
     *     summary="Annuler une commande",
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
     *             required={"reason"},
     *             @OA\Property(property="reason", type="string", maxLength=255),
     *             @OA\Property(property="notes", type="string", maxLength=500)
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Commande annulée",
     *         @OA\JsonContent(ref="#/components/schemas/OrderResource")
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Annulation impossible"
     *     )
     * )
     */
    public function cancel(OrderCancelRequest $request, string $id): JsonResponse
    {
        try {
            $order = $this->repository->find($id);
            
            if (!$order) {
                return response()->json([
                    'message' => 'Commande non trouvée'
                ], 404);
            }
            
            $validated = $request->validated();
            
            $order = $this->service->cancel(
                $order,
                $validated['reason'],
                $validated['notes'] ?? null
            );
            
            return response()->json(
                new OrderResource($order)
            );
        } catch (\InvalidArgumentException $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 400);
        }
    }

    /**
     * Supprime une commande (admin)
     * 
     * @OA\Delete(
     *     path="/api/orders/{id}",
     *     tags={"Orders"},
     *     summary="Supprimer une commande",
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="string", format="uuid")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Commande supprimée"
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Suppression impossible"
     *     )
     * )
     */
    public function destroy(string $id): JsonResponse
    {
        try {
            $this->service->delete($id);
            
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 400);
        }
    }

    /**
     * Statistiques des commandes (admin)
     * 
     * @OA\Get(
     *     path="/api/orders/statistics",
     *     tags={"Orders"},
     *     summary="Statistiques des commandes",
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Statistiques",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="total", type="integer", example=150),
     *             @OA\Property(property="pending", type="integer", example=25),
     *             @OA\Property(property="paid", type="integer", example=40),
     *             @OA\Property(property="shipped", type="integer", example=30),
     *             @OA\Property(property="delivered", type="integer", example=45),
     *             @OA\Property(property="cancelled", type="integer", example=10),
     *             @OA\Property(property="total_revenue", type="number", format="float", example=1500000.50)
     *         )
     *     )
     * )
     */
    public function statistics(): JsonResponse
    {
        $stats = $this->repository->getStatistics();
        
        return response()->json($stats);
    }
}