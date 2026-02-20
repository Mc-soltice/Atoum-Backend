<?php

namespace App\Enums;

enum Role: string
{
    case CLIENT = 'client';
    case GESTIONNAIRE = 'gestionnaire';
    case ADMIN = 'admin';
}
