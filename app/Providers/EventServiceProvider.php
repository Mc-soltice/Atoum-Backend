<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Modules\Order\Events\OrderCreated;
use App\Modules\Order\Events\OrderStatusUpdated;
use App\Modules\Order\Events\OrderCancelled;
use App\Modules\Order\Listeners\DecreaseProductStock;
use App\Modules\Order\Listeners\RestoreProductStock;
use App\Modules\Order\Listeners\LogOrderActivity;

class EventServiceProvider extends ServiceProvider
{
  protected $listen = [
    \App\Modules\Product\Events\PromotionExpiredBatch::class => [
      \App\Modules\Product\Listeners\NotifyAdminPromotionExpired::class,
    ],
    \App\Modules\Auth\Events\UserLocked::class => [
      \App\Modules\Auth\Listeners\SendUserLockedNotifications::class,
    ],
    \App\Modules\Auth\Events\UserUnlocked::class => [
      \App\Modules\Auth\Listeners\SendUserUnlockedNotification::class,
    ],
    \App\Modules\Product\Events\ProductStockLow::class => [
      \App\Modules\Product\Listeners\SendStockAlertNotification::class,
    ],
    \App\Modules\Product\Events\ProductOutOfStock::class => [
      \App\Modules\Product\Listeners\SendStockAlertNotification::class,
    ],
    OrderCreated::class => [
      DecreaseProductStock::class,
      LogOrderActivity::class,
    ],
    OrderStatusUpdated::class => [
      LogOrderActivity::class,
    ],
    OrderCancelled::class => [
      RestoreProductStock::class,
      LogOrderActivity::class,
    ],
  ];

  public function boot(): void
  {
    //
  }
}
