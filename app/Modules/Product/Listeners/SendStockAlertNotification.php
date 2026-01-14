<?php

namespace App\Modules\Product\Listeners;

use App\Modules\Product\Events\ProductStockLow;
use App\Modules\Product\Events\ProductOutOfStock;
use App\Modules\Product\Notifications\ProductStockAlertNotification;
use App\Modules\Auth\Models\User;
use Illuminate\Support\Facades\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendStockAlertNotification implements ShouldQueue
{
  public function handle(ProductStockLow|ProductOutOfStock $event): void
  {
    // Récupérer les administrateurs
    $admins = User::where('role', 'admin')->get();

    if ($admins->isEmpty()) {
      // Fallback: envoyer à l'email configuré
      $adminEmail = config('mail.admin_email');
      if ($adminEmail) {
        Notification::route('mail', $adminEmail)
          ->notify(new ProductStockAlertNotification(
            $event->product,
            $event instanceof ProductStockLow ? 'low' : 'out'
          ));
      }
      return;
    }

    $alertType = $event instanceof ProductStockLow ? 'low' : 'out';

    Notification::send($admins, new ProductStockAlertNotification(
      $event->product,
      $alertType
    ));
  }
}