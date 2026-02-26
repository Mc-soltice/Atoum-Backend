<?php

namespace App\Modules\Order\Notifications;

use App\Modules\Order\Models\Order;
use App\Modules\Order\Enums\OrderStatus;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

/**
 * Notification pour la mise à jour du statut
 */
class OrderStatusUpdatedNotification extends Notification
{
    use Queueable;

    /**
     * Constructeur
     */
    public function __construct(
        public Order $order,
        public OrderStatus $oldStatus,
        public OrderStatus $newStatus,
        public string $recipientType
    ) {}

    /**
     * Canaux de notification
     */
    public function via($notifiable): array
    {
        return ['mail', 'database'];
    }

    /**
     * Format email
     */
    public function toMail($notifiable): MailMessage
    {
        if ($this->recipientType === 'customer') {
            return $this->customerMail();
        }

        return $this->adminMail();
    }

    /**
     * Email pour le client
     */
    private function customerMail(): MailMessage
    {
        $subject = match ($this->order->status) {
            // OrderStatus::PAID => 'Paiement confirmé - Commande ' . $this->order->reference,
            OrderStatus::SHIPPED => 'Votre commande a été expédiée',
            OrderStatus::DELIVERED => 'Votre commande a été livrée',
            OrderStatus::CANCELLED => 'Annulation de votre commande',
            default => 'Mise à jour de votre commande',
        };

        $mail = (new MailMessage)
            ->subject($subject)
            ->greeting('Bonjour ' . $this->order->shipping_address['first_name'] . ',');

        switch ($this->order->status) {
            // case OrderStatus::PAID:
            //     $mail->line('Votre paiement pour la commande **' . $this->order->reference . '** a été confirmé.')
            //         ->line('Nous préparons maintenant votre commande.');
            //     break;

            case OrderStatus::SHIPPED:
                $mail->line('Votre commande **' . $this->order->reference . '** a été expédiée.')
                    ->line('**Numéro de suivi :** ' . ($this->order->tracking_number ?? 'À venir'))
                    ->line('Vous recevrez un email lorsque votre colis sera livré.');
                break;

            case OrderStatus::DELIVERED:
                $mail->line('Votre commande **' . $this->order->reference . '** a été livrée.')
                    ->line('Nous espérons que vous êtes satisfait de votre achat !')
                    ->action('Laisser un avis', route('products.review', $this->order->id));
                break;

            case OrderStatus::CANCELLED:
                $mail->line('Votre commande **' . $this->order->reference . '** a été annulée.')
                    ->line('**Raison :** ' . ($this->order->notes ?? 'Non spécifiée'))
                    ->line('Un remboursement sera effectué si nécessaire.');
                break;
        }

        return $mail->action('Voir ma commande', route('orders.show', $this->order->id))
            ->salutation('Cordialement,<br>L\'équipe ' . config('app.name'));
    }

    /**
     * Email pour l'administrateur
     */
    private function adminMail(): MailMessage
    {
        return (new MailMessage)
            ->subject('📦 Statut mis à jour : ' . $this->order->reference)
            ->line('**Statut de commande mis à jour**')
            ->line('**Référence :** ' . $this->order->reference)
            ->line('**Ancien statut :** ' . $this->oldStatus->label())
            ->line('**Nouveau statut :** ' . $this->order->status->label())
            ->line('**Client :** ' . $this->order->shipping_address['first_name'] . ' ' . $this->order->shipping_address['last_name'])
            ->action('Voir la commande', route('admin.orders.show', $this->order->id));
    }

    /**
     * Format pour la base de données
     */
    public function toDatabase($notifiable): array
    {
        return [
            'order_id' => $this->order->id,
            'reference' => $this->order->reference,
            'type' => 'order_status_updated',
            'old_status' => $this->oldStatus->value,
            'new_status' => $this->order->status->value,
            'recipient_type' => $this->recipientType,
            'title' => 'Statut mis à jour',
            'message' => 'Commande ' . $this->order->reference . ' : ' .
                $this->oldStatus->label() . ' → ' . $this->order->status->label(),
            'created_at' => now()->toDateTimeString(),
        ];
    }
}
