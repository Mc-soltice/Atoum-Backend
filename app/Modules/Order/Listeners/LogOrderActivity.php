<?php

namespace App\Modules\Order\Listeners;

use App\Modules\Order\Events\OrderCreated;
use App\Modules\Order\Events\OrderStatusUpdated;
use App\Modules\Order\Events\OrderCancelled;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class LogOrderActivity implements ShouldQueue
{
  public function handle(object $event): void
  {
    match (true) {
      $event instanceof OrderCreated =>
      Log::info('Commande créée', [
        'order_id' => $event->order->id
      ]),

      $event instanceof OrderStatusUpdated =>
      Log::info('Statut mis à jour', [
        'order_id' => $event->order->id,
        'from' => $event->oldStatus->value,
        'to' => $event->newStatus->value,
      ]),

      $event instanceof OrderCancelled =>
      Log::info('Commande annulée', [
        'order_id' => $event->order->id,
        'reason' => $event->reason,
      ]),

      default => null,
    };
  }
}
