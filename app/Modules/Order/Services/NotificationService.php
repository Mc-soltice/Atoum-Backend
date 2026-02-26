<?PHP

namespace App\Modules\Order\Services;

use App\Modules\Auth\Models\User;
use App\Modules\Order\Models\Order;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use App\Modules\Order\Enums\OrderStatus;
use App\Modules\Order\Notifications\OrderNotification;
use App\Modules\Order\Notifications\OrderCancelledNotification;
use App\Modules\Order\Notifications\OrderStatusUpdatedNotification;

class NotificationService
{
    public function notifyOrderCreated(Order $order): void
    {
        try {
            // CLIENT
            if ($order->user) {
                $order->user->notify(new OrderNotification($order, 'customer'));
                $channel = 'user';
            } else {
                $email = $order->shipping_address['email'] ?? null;
                if ($email) {
                    Notification::route('mail', $email)
                        ->notify(new OrderNotification($order, 'customer'));
                    $channel = 'guest_mail';
                } else {
                    $channel = 'none';
                }
            }

            // ADMINS
            $admins = User::where('role', 'admin')->get();
            Notification::send($admins, new OrderNotification($order, 'admin'));

            Log::info('Order created notification sent', [
                'order_id' => $order->id,
                'channel' => $channel,
                'admins' => $admins->count(),
            ]);
        } catch (\Throwable $e) {
            Log::error('notifyOrderCreated failed', [
                'order_id' => $order->id,
                'error' => $e->getMessage(),
            ]);
        }
    }

    public function notifyOrderStatusUpdated(
        Order $order,
        OrderStatus $oldStatus,
        OrderStatus $newStatus
    ): void {
        try {
            // CLIENT
            if ($order->user) {
                $order->user->notify(
                    new OrderStatusUpdatedNotification(
                        $order,
                        $oldStatus,
                        $newStatus,
                        'customer'
                    )
                );
            } else {
                $email = $order->shipping_address['email'] ?? null;
                if ($email) {
                    Notification::route('mail', $email)->notify(
                        new OrderStatusUpdatedNotification(
                            $order,
                            $oldStatus,
                            $newStatus,
                            'customer'
                        )
                    );
                }
            }

            // ADMINS (statuts critiques)
            if (in_array($newStatus, [
                OrderStatus::CANCELLED,
                OrderStatus::SHIPPED,
            ], true)) {
                $admins = User::where('role', 'admin')->get();
                Notification::send(
                    $admins,
                    new OrderStatusUpdatedNotification(
                        $order,
                        $oldStatus,
                        $newStatus,
                        'admin'
                    )
                );
            }

            Log::info('Order status updated notification sent', [
                'order_id' => $order->id,
                'from' => $oldStatus->value,
                'to' => $newStatus->value,
            ]);
        } catch (\Throwable $e) {
            Log::error('notifyOrderStatusUpdated failed', [
                'order_id' => $order->id,
                'error' => $e->getMessage(),
            ]);
        }
    }

    public function notifyOrderCancelled(Order $order, string $reason): void
    {
        try {
            // CLIENT
            if ($order->user) {
                $order->user->notify(
                    new OrderCancelledNotification($order, $reason, 'customer')
                );
            } else {
                $email = $order->shipping_address['email'] ?? null;
                if ($email) {
                    Notification::route('mail', $email)
                        ->notify(new OrderCancelledNotification($order, $reason, 'customer'));
                }
            }

            // ADMINS
            $admins = User::where('role', 'admin')->get();
            Notification::send(
                $admins,
                new OrderCancelledNotification($order, $reason, 'admin')
            );

            Log::info('Order cancelled notification sent', [
                'order_id' => $order->id,
                'reason' => $reason,
            ]);
        } catch (\Throwable $e) {
            Log::error('notifyOrderCancelled failed', [
                'order_id' => $order->id,
                'error' => $e->getMessage(),
            ]);
        }
    }
}
