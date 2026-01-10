<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
  protected $listen = [
    \App\Modules\Auth\Events\UserLocked::class => [
      \App\Modules\Auth\Listeners\SendUserLockedNotifications::class,
    ],
  ];

  public function boot(): void
  {
    //
  }
}
