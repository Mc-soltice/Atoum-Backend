<?php

namespace App\Modules\Auth\Listeners;

use App\Modules\Auth\Events\UserUnlocked;
use App\Modules\Auth\Notifications\UserUnlockedNotification;

class SendUserUnlockedNotification
{
  public function handle(UserUnlocked $event): void
  {
    $event->user->notify(new UserUnlockedNotification());
  }
}
