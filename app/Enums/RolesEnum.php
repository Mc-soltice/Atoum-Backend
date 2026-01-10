<?php

namespace App\Enums;

enum RolesEnum: string
{
    case ADMIN = 'admin';
    case AGENT = 'agent';
    case MANAGER = 'manager';
    case INTENDANT = 'intendant';
    case COMPTABLE = 'comptable';
    // Ajoutez d'autres rôles si besoin
}