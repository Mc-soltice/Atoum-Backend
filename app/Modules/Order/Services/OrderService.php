<?php

namespace App\Modules\Order\Services;

use App\Modules\Order\Models\Order;
use App\Modules\Order\Models\OrderItem;
use App\Modules\Product\Models\Product;
use App\Modules\Order\Repositories\OrderRepository;
use App\Modules\Order\Events\OrderCreated;
use App\Modules\Order\Events\OrderStatusUpdated;
use App\Modules\Order\Events\OrderCancelled;
use App\Modules\Order\Enums\OrderStatus;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Collection;
use App\Modules\Delivery\Models\DeliveryOption;

/**
 * Service de gestion métier des commandes
 * - Logique métier complexe
 * - Gestion des transactions
 * - Coordination entre les différents composants
 */
class OrderService
{
    public function __construct(
        private OrderRepository $repository,
        private StockService $stockService,
        private NotificationService $notificationService
    ) {}

    /**
     * Crée une nouvelle commande
     * 
     * @throws \Exception Si la création échoue
     */
    public function create(array $data, ?int $userId = null): Order
    {
        return DB::transaction(function () use ($data, $userId) {
            try {
                Log::info('Création de commande', [
                    'user_id' => $userId,
                    'items_count' => count($data['items'])
                ]);

                // Vérifie la disponibilité des produits
                $this->validateStockAvailability($data['items']);

                // Récupère l'option de livraison
                $deliveryOption = DeliveryOption::findOrFail($data['delivery_option_id']);
                if (!$deliveryOption->is_active) {
                    throw new \Exception('L\'option de livraison sélectionnée n\'est pas disponible.');
                }

                // Calcule le total des items
                $itemsDetails = $this->calculateItemsDetails($data['items']);
                
                // Calcule le total final avec livraison
                $totalAmount = $itemsDetails->sum('subtotal') + $deliveryOption->price;

                // Crée la commande
                $order = $this->repository->create([
                    'user_id' => $userId, // nullable
                    'delivery_option_id' => $deliveryOption->id,
                    'payment_method' => $data['payment_method'],
                    'status' => OrderStatus::PENDING,
                    'shipping_address' => $data['shipping_address'],
                    'customer_email' => $data['shipping_address']['email'], // utile guest
                    'customer_phone' => $data['shipping_address']['phone'],
                    'total_amount' => $totalAmount,
                    'currency' => config('app.currency', '€'),
                ]);


                // Ajoute les items
                $this->repository->addItems($order, $itemsDetails->toArray());

                // Déduit le stock
                $this->stockService->decreaseStockForOrder($order);

                // Déclenche l'événement de création
                Event::dispatch(new OrderCreated($order));

                // Envoie les notifications
                $this->notificationService->notifyOrderCreated($order);

                Log::info('Commande créée avec succès', [
                    'order_id' => $order->id,
                    'reference' => $order->reference,
                    'total' => $order->total_amount
                ]);

                return $order->load(['items.product', 'deliveryOption']);

            } catch (\Exception $e) {
                Log::error('Erreur lors de la création de la commande', [
                    'error' => $e->getMessage(),
                    'trace' => $e->getTraceAsString()
                ]);
                throw $e;
            }
        });
    }

    /**
     * Met à jour le statut d'une commande
     */
    public function updateStatus(Order $order, OrderStatus $status, ?string $notes = null): Order
    {
        return DB::transaction(function () use ($order, $status, $notes) {
            // Vérifie si la transition est valide
            if (!$order->status->canTransitionTo($status)) {
                throw new \InvalidArgumentException(
                    "Transition impossible de {$order->status->value} vers {$status->value}"
                );
            }

            // Ancien statut pour le log
            $oldStatus = $order->status;

            // Met à jour le statut
            $order = $this->repository->updateStatus($order, $status, $notes);

            // Gère les actions spécifiques au statut
            $this->handleStatusSpecificActions($order, $status, $oldStatus);

            // Déclenche l'événement
            Event::dispatch(new OrderStatusUpdated($order, $oldStatus));

            // Envoie les notifications
            $this->notificationService->notifyOrderStatusUpdated($order, $oldStatus);

            Log::info('Statut de commande mis à jour', [
                'order_id' => $order->id,
                'reference' => $order->reference,
                'old_status' => $oldStatus->value,
                'new_status' => $status->value
            ]);

            return $order->load(['items.product', 'deliveryOption']);
        });
    }

    /**
     * Annule une commande et réinjecte le stock
     */
    public function cancel(Order $order, string $reason, ?string $notes = null): Order
    {
        return DB::transaction(function () use ($order, $reason, $notes) {
            // Vérifie si la commande peut être annulée
            if (!$order->canBeCancelled()) {
                throw new \InvalidArgumentException(
                    "La commande ne peut pas être annulée dans son état actuel ({$order->status->value})"
                );
            }

            // Annule la commande
            $order = $this->repository->cancel($order, $reason, $notes);

            // Réinjecte le stock
            $this->stockService->restoreStockForOrder($order);

            // Déclenche l'événement d'annulation
            Event::dispatch(new OrderCancelled($order, $reason));

            // Envoie les notifications
            $this->notificationService->notifyOrderCancelled($order, $reason);

            Log::info('Commande annulée', [
                'order_id' => $order->id,
                'reference' => $order->reference,
                'reason' => $reason
            ]);

            return $order->load(['items.product', 'deliveryOption']);
        });
    }

    /**
     * Supprime une commande (soft delete)
     */
    public function delete(string $id): void
    {
        $order = $this->repository->find($id);
        
        if (!$order) {
            throw new \Exception('Commande non trouvée');
        }

        // Vérifie si la commande peut être supprimée
        if (!$order->status->canTransitionTo(OrderStatus::CANCELLED)) {
            throw new \InvalidArgumentException(
                "La commande ne peut pas être supprimée dans son état actuel ({$order->status->value})"
            );
        }

        // Si la commande n'est pas annulée, l'annule d'abord
        if ($order->status !== OrderStatus::CANCELLED) {
            $this->cancel($order, 'Suppression par administrateur');
        }

        // Supprime la commande
        $this->repository->delete($order);

        Log::info('Commande supprimée', [
            'order_id' => $id,
            'reference' => $order->reference
        ]);
    }

    /**
     * Vérifie la disponibilité du stock pour les items
     */
    private function validateStockAvailability(array $items): void
    {
        $errors = [];

        foreach ($items as $item) {
            $product = Product::find($item['product_id']);
            
            if (!$product) {
                $errors[] = "Produit {$item['product_id']} non trouvé";
                continue;
            }

            if ($product->stock < $item['quantity']) {
                $errors[] = "Stock insuffisant pour {$product->name}. Disponible: {$product->stock}, Demandé: {$item['quantity']}";
            }
        }

        if (!empty($errors)) {
            throw new \Exception(implode(' | ', $errors));
        }
    }

    /**
     * Calcule les détails des items avec prix et sous-totaux
     */
    private function calculateItemsDetails(array $items): Collection
    {
        $itemsDetails = collect();

        foreach ($items as $item) {
            $product = Product::findOrFail($item['product_id']);
            
            $itemsDetails->push([
                'product_id' => $product->id,
                'product_name' => $product->name,
                'quantity' => $item['quantity'],
                'unit_price' => $product->price,
                'subtotal' => $product->price * $item['quantity'],
            ]);
        }

        return $itemsDetails;
    }

    /**
     * Gère les actions spécifiques selon le statut
     */
    private function handleStatusSpecificActions(Order $order, OrderStatus $newStatus, OrderStatus $oldStatus): void
    {
        switch ($newStatus) {
            case OrderStatus::CANCELLED:
                // Réinjection du stock déjà gérée dans la méthode cancel
                break;
                
            case OrderStatus::PAID:
                // Peut déclencher la préparation de commande
                break;
                
                
            case OrderStatus::DELIVERED:
                // Peut déclencher la demande d'avis
                break;
        }
    }
}