<?php

namespace App\Modules\Auth\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class UserUnlockedNotification extends Notification implements ShouldQueue
{
  use Queueable;

  public function via($notifiable): array
  {
    return ['mail'];
  }

  public function toMail($notifiable): MailMessage
  {
    return (new MailMessage)
      ->subject('Votre compte a été débloqué')
      ->greeting('Bonjour ' . $notifiable->first_name)
      ->line('Bonne nouvelle 🎉')
      ->line('Votre compte a été débloqué par un administrateur.')
      ->line('Vous pouvez à nouveau vous connecter à la plateforme.')
      ->salutation('Atoum-Râ Mbianga – Thérapie élémentale');
  }
}
