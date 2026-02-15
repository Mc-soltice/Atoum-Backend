<?php

namespace App\Modules\Order\Services;

use Illuminate\Bus\Queueable;
use App\Modules\Auth\Models\User;
use App\Modules\Order\Models\Order;
use Illuminate\Support\Facades\Log;
use App\Modules\Order\Enums\OrderStatus;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use App\Modules\Order\Notifications\OrderNotification;
use App\Modules\Order\Notifications\OrderCancelledNotification;
use App\Modules\Order\Notifications\OrderStatusUpdatedNotification;

/**
 * Service de gestion des notifications
 * - Support user connecté + guest checkout
 * - Fallback email via shipping_address
 * - Notifications admin
 * - Aucun crash si user null
 */
class NotificationService extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Notifie la création d'une commande
     */
    public function notifyOrderCreated(Order $order): void
    {
        try {

            // ✅ CLIENT CONNECTÉ
            if ($order->user) {
                $order->user->notify(
                    new OrderNotification($order, 'customer')
                );
                $customerNotified = 'user';
            }

            // ✅ GUEST CHECKOUT
            else {
                $email = $order->shipping_address['email'] ?? null;

                if ($email) {
                    Notification::route('mail', $email)
                        ->notify(new OrderNotification($order, 'customer'));
                    $customerNotified = 'guest_mail';
                } else {
                    $customerNotified = 'none';
                }
            }

            // ✅ ADMINS
            $admins = User::where('role', 'admin')->get();
            Notification::send($admins, new OrderNotification($order, 'admin'));

            Log::info('Notifications création envoyées', [
                'order_id' => $order->id,
                'customer_channel' => $customerNotified,
                'admins_notified' => $admins->count()
            ]);

        } catch (\Throwable $e) {
            Log::error('Erreur notifyOrderCreated', [
                'order_id' => $order->id,
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Notifie la mise à jour du statut
     */
    public function notifyOrderStatusUpdated(Order $order, OrderStatus $oldStatus): void
    {
        try {

            // ✅ CLIENT
            if ($order->user) {
                $order->user->notify(
                    new OrderStatusUpdatedNotification($order, $oldStatus, 'customer')
                );
            } else {
                $email = $order->shipping_address['email'] ?? null;

                if ($email) {
                    Notification::route('mail', $email)
                        ->notify(
                            new OrderStatusUpdatedNotification($order, $oldStatus, 'customer')
                        );
                }
            }

            // ✅ ADMIN si statut critique
            if (in_array($order->status, [
                OrderStatus::CANCELLED,
                OrderStatus::SHIPPED
            ])) {
                $admins = User::where('role', 'admin')->get();

                Notification::send(
                    $admins,
                    new OrderStatusUpdatedNotification($order, $oldStatus, 'admin')
                );
            }

            Log::info('Notifications statut envoyées', [
                'order_id' => $order->id,
                'old_status' => $oldStatus->value,
                'new_status' => $order->status->value
            ]);

        } catch (\Throwable $e) {
            Log::error('Erreur notifyOrderStatusUpdated', [
                'order_id' => $order->id,
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Notifie l'annulation
     */
    public function notifyOrderCancelled(Order $order, string $reason): void
    {
        try {

            // ✅ CLIENT
            if ($order->user) {
                $order->user->notify(
                    new OrderCancelledNotification($order, $reason, 'customer')
                );
            } else {
                $email = $order->shipping_address['email'] ?? null;

                if ($email) {
                    Notification::route('mail', $email)
                        ->notify(
                            new OrderCancelledNotification($order, $reason, 'customer')
                        );
                }
            }

            // ✅ ADMIN
            $admins = User::where('role', 'admin')->get();
            Notification::send(
                $admins,
                new OrderCancelledNotification($order, $reason, 'admin')
            );

            Log::info('Notifications annulation envoyées', [
                'order_id' => $order->id,
                'reason' => $reason,
                'admins_notified' => $admins->count()
            ]);

        } catch (\Throwable $e) {
            Log::error('Erreur notifyOrderCancelled', [
                'order_id' => $order->id,
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Notification personnalisée (extension future)
     */
    public function sendCustomNotification(Order $order, string $type, array $data = []): void
    {
        Log::info('Custom notification stub', [
            'order_id' => $order->id,
            'type' => $type
        ]);
    }
}
