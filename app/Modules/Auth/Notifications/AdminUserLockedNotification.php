<?php

namespace App\Modules\Auth\Notifications;

use App\Modules\Auth\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdminUserLockedNotification extends Notification implements ShouldQueue
{
  use Queueable;

  public function __construct(private User $user)
  {
  }

  public function via($notifiable)
  {
    return ['mail'];
  }

  public function toMail($notifiable)
  {
    return (new MailMessage)
      ->subject('Compte utilisateur verrouillé')
      ->line('Un utilisateur vient d’être verrouillé.')
      ->line('Nom : ' . $this->user->first_name . ' ' . $this->user->last_name)
      ->line('Email : ' . $this->user->email)
      ->line('Motif : trop de tentatives de connexion');
  }
}
