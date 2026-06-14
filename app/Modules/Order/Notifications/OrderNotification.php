<?php

namespace App\Modules\Order\Notifications;

use App\Modules\Order\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Support\Facades\URL;

/**
 * Notification pour la création de commande
 */
class OrderNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Constructeur
     */
    public function __construct(
        private Order $order,
        private string $recipientType // 'customer' ou 'admin'
    ) {}

    /**
     * Canaux de notification
     */
    public function via($notifiable): array
    {
        return ['mail', 'database'];
    }

    /**
     * Format email pour le client
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
        $statusLabel = $this->order->is_paid || $this->order->payment_status === 'succeeded'
            ? 'Payé comptant'
            : 'En attente de paiement';

        $pickupMethod = $this->order->deliveryOption?->name ?? 'Non spécifiée';

        $url = URL::temporarySignedRoute(
            'orders.show.signed',
            now()->addHours(24),
            ['id' => $this->order->id]
        );

        return (new MailMessage)
            ->subject('Confirmation de votre commande ' . $this->order->reference)
            ->greeting('Bonjour ' . $this->order->shipping_address['first_name'] . ',')
            ->line('Nous avons bien reçu votre commande n° **' . $this->order->reference . '**.')
            ->line('**Montant total :** ' . number_format($this->order->total_amount, 0, ',', ' ') . ' €')
            ->line('**Méthode de paiement :** ' . $this->order->payment_method)
            ->line('**Statut :** ' . $statusLabel)
            ->line('**Mode de retrait :** ' . $pickupMethod)
            ->action('Voir ma commande', $url)
            ->line('Ce lien expire dans 24 heures.')
            ->line('Vous recevrez un email lorsque votre commande sera expédiée.')
            ->salutation('Cordialement,<br>L\'équipe ' . config('app.name'));
    }

    /**
     * Email pour l'administrateur
     */
    private function adminMail(): MailMessage
    {
        return (new MailMessage)
            ->subject('🛒 Nouvelle commande : ' . $this->order->reference)
            ->line('**Nouvelle commande reçue !**')
            ->line('**Référence :** ' . $this->order->reference)
            ->line('**Client :** ' . $this->order->shipping_address['first_name'] . ' ' . $this->order->shipping_address['last_name'])
            ->line('**Email :** ' . $this->order->shipping_address['email'])
            ->line('**Montant :** ' . number_format($this->order->total_amount, 0, ',', ' ') . ' €')
            ->line('**Articles :** ' . $this->order->items->count() . ' produit(s)')
            ->action('Voir la commande', route('orders.show', $this->order->id))
            ->line('Merci de traiter cette commande dans les plus brefs délais.');
    }

    /**
     * Format pour la base de données
     */
    public function toDatabase($notifiable): array
    {
        return [
            'order_id' => $this->order->id,
            'reference' => $this->order->reference,
            'type' => 'order_created',
            'recipient_type' => $this->recipientType,
            'title' => $this->recipientType === 'customer'
                ? 'Commande confirmée'
                : 'Nouvelle commande',
            'message' => $this->recipientType === 'customer'
                ? 'Votre commande ' . $this->order->reference . ' a été créée avec succès.'
                : 'Nouvelle commande ' . $this->order->reference . ' de ' . $this->order->shipping_address['first_name'],
            'amount' => $this->order->total_amount,
            'created_at' => now()->toDateTimeString(),
        ];
    }

    /**
     * Format pour la diffusion en temps réel
     */
    public function toBroadcast($notifiable): BroadcastMessage
    {
        return new BroadcastMessage([
            'order_id' => $this->order->id,
            'reference' => $this->order->reference,
            'type' => 'order_created',
        ]);
    }
}
