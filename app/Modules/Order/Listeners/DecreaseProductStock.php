<?php

namespace App\Modules\Order\Listeners;

use App\Modules\Order\Events\OrderCreated;
use App\Modules\Order\Events\OrderStatusUpdated;
use App\Modules\Order\Events\OrderCancelled;
use App\Modules\Order\Services\StockService;
use App\Modules\Order\Services\NotificationService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;


/**
 * Listener pour gérer la déduction du stock lors de la création de commande
 */
class DecreaseProductStock implements ShouldQueue
{
    public function __construct(private StockService $stockService) {}

    public function handle(OrderCreated $event): void
    {
        $this->stockService->decreaseStockForOrder($event->order);
    }
}

/**
 * Listener pour restaurer le stock lors de l'annulation
 */
class RestoreProductStock implements ShouldQueue
{
    public function __construct(private StockService $stockService) {}

    public function handle(OrderCancelled $event): void
    {
        $this->stockService->restoreStockForOrder($event->order);
    }
}

/**
 * Listener pour le logging des événements
 */
class LogOrderActivity implements ShouldQueue
{
    public function handle($event): void
    {
        $className = get_class($event);
        
        switch ($className) {
            case OrderCreated::class:
                Log::info('Commande créée', ['order_id' => $event->order->id]);
                break;
                
            case OrderStatusUpdated::class:
                Log::info('Statut mis à jour', [
                    'order_id' => $event->order->id,
                    'from' => $event->oldStatus->value,
                    'to' => $event->order->status->value
                ]);
                break;
                
            case OrderCancelled::class:
                Log::info('Commande annulée', [
                    'order_id' => $event->order->id,
                    'reason' => $event->reason
                ]);
                break;
        }
    }
}