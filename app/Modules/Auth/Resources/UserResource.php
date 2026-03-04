<?php

namespace App\Modules\Auth\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Enums\Ability;
use App\Modules\Auth\Enums\RolesEnum;

class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        // Récupération des abilities selon le rôle
        $all = array_map(fn(Ability $a) => $a->value, Ability::cases());

        $abilities = match ($this->role) {
            RolesEnum::ADMIN->value => $all,
            RolesEnum::GESTIONNAIRE->value => array_filter($all, fn($a) => !str_ends_with($a, '.delete')),
            RolesEnum::CLIENT->value => array_filter($all, fn($a) => str_ends_with($a, '.view') || str_ends_with($a, '.create')),
            default => [],
        };

        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone' => $this->phone,
            'email' => $this->email,
            'is_locked' => $this->is_locked,
            'role' => $this->role,
            'abilities' => array_values($abilities), // pour renvoyer un array indexé
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
