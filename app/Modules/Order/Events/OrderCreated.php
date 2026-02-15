<?php

namespace App\Modules\Order\Events;

use App\Modules\Order\Models\Order;
use App\Modules\Order\Enums\OrderStatus;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

/**
 * Événement déclenché lors de la création d'une commande
 */
class OrderCreated
{
    use Dispatchable, SerializesModels;

    public function __construct(public Order $order) {}
}

/**
 * Événement déclenché lors de la mise à jour du statut
 */
class OrderStatusUpdated
{
    use Dispatchable, SerializesModels;

    public function __construct(
        public Order $order,
        public OrderStatus $oldStatus
    ) {}
}

/**
 * Événement déclenché lors de l'annulation d'une commande
 */
class OrderCancelled
{
    use Dispatchable, SerializesModels;

    public function __construct(
        public Order $order,
        public string $reason
    ) {}
}