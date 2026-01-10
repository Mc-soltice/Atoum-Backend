<?php

namespace App\Modules\Auth\Events;

use App\Modules\Auth\Models\User;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserLocked
{
  use Dispatchable, SerializesModels;

  public User $user;

  public function __construct(User $user)
  {
    $this->user = $user;
  }
}
