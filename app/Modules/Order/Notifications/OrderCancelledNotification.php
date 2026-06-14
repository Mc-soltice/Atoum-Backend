<?php

namespace App\Modules\Order\Notifications;

use App\Modules\Order\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\URL;

/**
 * Notification pour l'annulation de commande
 */
class OrderCancelledNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Constructeur
     */
    public function __construct(
        private Order $order,
        private string $reason,
        private string $recipientType
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
        $url = URL::temporarySignedRoute(
            'orders.show.signed',
            now()->addHours(24),
            ['id' => $this->order->id]
        );

        return (new MailMessage)
            ->subject('Annulation de votre commande ' . $this->order->reference)
            ->greeting('Bonjour ' . $this->order->shipping_address['first_name'] . ',')
            ->line('Votre commande **' . $this->order->reference . '** a été annulée.')
            ->line('**Raison :** ' . $this->reason)
            ->line('**Montant remboursé :** ' . number_format($this->order->total_amount, 0, ',', ' ') . ' €')
            ->line('Le remboursement sera effectué dans les 5 à 10 jours ouvrables sur votre moyen de paiement initial.')
            ->line('Si vous avez des questions, n\'hésitez pas à nous contacter.')
            ->action('Voir ma commande', $url)
            ->line('Ce lien est valable 24 heures.')
            ->salutation('Cordialement,<br>L\'équipe ' . config('app.name'));
    }

    /**
     * Email pour l'administrateur
     */
    private function adminMail(): MailMessage
    {
        return (new MailMessage)
            ->subject('❌ Commande annulée : ' . $this->order->reference)
            ->line('**Commande annulée**')
            ->line('**Référence :** ' . $this->order->reference)
            ->line('**Client :** ' . $this->order->shipping_address['first_name'] . ' ' . $this->order->shipping_address['last_name'])
            ->line('**Email :** ' . $this->order->shipping_address['email'])
            ->line('**Montant :** ' . number_format($this->order->total_amount, 0, ',', ' ') . ' €')
            ->line('**Raison :** ' . $this->reason)
            ->line('**Date d\'annulation :** ' . $this->order->cancelled_at->format('d/m/Y H:i'))
            ->line('**Stock restauré :** Oui')
            ->action('Voir la commande', route('orders.show', $this->order->id))
            ->line('Le stock a été automatiquement réintégré.');
    }

    /**
     * Format pour la base de données
     */
    public function toDatabase($notifiable): array
    {
        return [
            'order_id' => $this->order->id,
            'reference' => $this->order->reference,
            'type' => 'order_cancelled',
            'reason' => $this->reason,
            'recipient_type' => $this->recipientType,
            'title' => 'Commande annulée',
            'message' => 'Commande ' . $this->order->reference . ' annulée : ' . $this->reason,
            'amount' => $this->order->total_amount,
            'cancelled_at' => $this->order->cancelled_at,
        ];
    }
}
