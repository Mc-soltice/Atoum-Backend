<?php

namespace App\Modules\Product\Listeners;

use App\Modules\Product\Events\PromotionExpiredBatch;
use App\Modules\Product\Notifications\PromotionExpiredNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class NotifyAdminPromotionExpired implements ShouldQueue
{
  public function handle(PromotionExpiredBatch $event): void
  {
    $admins = config('product.admin_notification_emails', []);

    if (empty($admins)) {
      return;
    }

    Notification::route('mail', $admins)
      ->notify(new PromotionExpiredNotification(
        $event->products
      ));
  }
}
