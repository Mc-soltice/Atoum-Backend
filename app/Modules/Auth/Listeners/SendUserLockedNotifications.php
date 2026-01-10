<?php

namespace App\Modules\Auth\Listeners;

use App\Modules\Auth\Events\UserLocked;
use App\Modules\Auth\Notifications\UserLockedNotification;
use App\Modules\Auth\Notifications\AdminUserLockedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class SendUserLockedNotifications implements ShouldQueue
{
  public function handle(UserLocked $event): void
  {
    // 📩 User concerné
    $event->user->notify(new UserLockedNotification());


    // 📩 Admin (AnonymousNotifiable)
    Notification::route('mail', config('app.admin_email'))
      ->notify(new AdminUserLockedNotification($event->user));
  }
}
