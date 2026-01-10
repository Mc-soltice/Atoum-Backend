<?php

namespace App\Modules\Auth\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserLockedNotification extends Notification implements ShouldQueue
{
  use Queueable;

  public function via($notifiable)
  {
    return ['mail'];
  }

  public function toMail($notifiable)
  {
    return (new MailMessage)
      ->subject('Votre compte a été temporairement verrouillé')
      ->greeting('Bonjour ' . $notifiable->first_name)
      ->line('Votre compte a été verrouillé suite à plusieurs tentatives de connexion échouées.')
      ->line('Veuillez réessayer plus tard ou contacter le support.')
      ->line('Motif : trop de tentatives de connexion échouées.')
      ->salutation('Atoum-Râ Mbianga – Thérapie élémentale');
  }
}
