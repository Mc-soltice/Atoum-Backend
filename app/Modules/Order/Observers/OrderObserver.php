<?php

namespace App\Modules\Order\Observers;

use App\Modules\Order\Models\Order;
use App\Modules\Order\Enums\OrderStatus;

/**
 * Observer pour le modèle Order
 * Gère les événements du cycle de vie de la commande
 */
class OrderObserver
{
    /**
     * Appelé quand un modèle a été mis à jour
     * 
     * Marque is_paid = true lorsque le statut passe à delivered
     */
    public function updated(Order $order): void
    {
        // Vérifie si le statut a changé et est maintenant "delivered"
        if ($order->isDirty('status') && $order->status === OrderStatus::DELIVERED) {
            $order->is_paid = true;
            $order->saveQuietly(); // saveQuietly() évite de déclencher l'observateur à nouveau
        }
    }
}
