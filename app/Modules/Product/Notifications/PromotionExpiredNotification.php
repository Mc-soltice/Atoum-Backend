<?php

namespace App\Modules\Product\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Database\Eloquent\Collection;

class PromotionExpiredNotification extends Notification implements ShouldQueue
{
  use Queueable;

  public function __construct(
    private Collection $products
  ) {}

  public function via(object $notifiable): array
  {
    return ['mail']; // + slack / database si besoin
  }

  public function toMail(object $notifiable): MailMessage
  {
    return (new MailMessage)
      ->subject('Promotions expirées')
      ->line("{$this->products->count()} promotion(s) sont arrivées à échéance.")
      ->line('Produits concernés :')
      ->line(
        $this->products
          ->pluck('name')
          ->implode(', ')
      )
      ->action('Accéder au back-office', url('/admin/products'))
      ->line('Les produits ont été automatiquement remis à leur prix normal.');
  }
}
