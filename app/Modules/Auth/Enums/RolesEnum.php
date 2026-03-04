<?php

namespace App\Modules\Auth\Enums;

enum RolesEnum: string
{
  case ADMIN = 'admin';
  case GESTIONNAIRE = 'gestionnaire';
  case CLIENT = 'client';
}
