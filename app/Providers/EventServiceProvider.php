<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
  protected $listen = [
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
  ];

  public function boot(): void
  {
    //
  }
}
