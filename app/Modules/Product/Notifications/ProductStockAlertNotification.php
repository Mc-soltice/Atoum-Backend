<?php

namespace App\Modules\Product\Notifications;

use App\Modules\Product\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ProductStockAlertNotification extends Notification implements ShouldQueue
{
  use Queueable;

  public function __construct(
    private Product $product,
    private string $alertType // 'low' ou 'out'
  ) {}

  public function via($notifiable): array
  {
    return ['mail', 'database'];
  }

  public function toMail($notifiable): MailMessage
  {
    $subject = $this->alertType === 'low'
      ? 'Alerte Stock Bas - ' . $this->product->name
      : 'Alerte Stock Épuisé - ' . $this->product->name;

    $message = $this->alertType === 'low'
      ? "Le stock du produit **{$this->product->name}** est bas ({$this->product->stock} unités). Veuillez réapprovisionner."
      : "Le stock du produit **{$this->product->name}** est épuisé. Veuillez réapprovisionner d'urgence.";

    return (new MailMessage)
      ->subject($subject)
      ->line($message)
      ->line('Détails du produit:')
      ->line('- ID: ' . $this->product->id)
      ->line('- Nom: ' . $this->product->name)
      ->line('- Catégorie: ' . ($this->product->category?->name ?? 'N/A'))
      ->line('- Stock actuel: ' . $this->product->stock)
      ->action('Voir le produit', url('/admin/products/' . $this->product->id));
  }

  public function toArray($notifiable): array
  {
    return [
      'product_id' => $this->product->id,
      'product_name' => $this->product->name,
      'stock' => $this->product->stock,
      'alert_type' => $this->alertType,
      'message' => $this->alertType === 'low'
        ? "Stock bas pour {$this->product->name}"
        : "Stock épuisé pour {$this->product->name}",
      'timestamp' => now()->toDateTimeString()
    ];
  }
}
