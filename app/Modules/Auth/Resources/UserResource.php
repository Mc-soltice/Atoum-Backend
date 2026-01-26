<?php

namespace App\Modules\Auth\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Crée une nouvelle instance de ressource.
     *
     * @param mixed $resource
     * @return void
     */
    public function __construct($resource = null)
    {
        parent::__construct($resource);
    }

    /**
     * Transforme la ressource en tableau pour la réponse API.
     *
     * @param Request $request
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone' => $this->phone,
            'email' => $this->email,
            'is_locked' => $this->is_locked,
            'roles' => $this->getRoleNames(),
            'permissions' => $this->getAllPermissions()->pluck('name'),

        ];
    }
}
