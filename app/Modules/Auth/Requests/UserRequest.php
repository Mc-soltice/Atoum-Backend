<?php

namespace App\Modules\Auth\Requests;


use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

public function rules(): array
{
    switch ($this->method()) {
        case 'POST': // Création d'un utilisateur
            return [
                'first_name' => 'required|string|max:100',
                'last_name'  => 'required|string|max:100',
                'phone'      => 'required|string|max:15|unique:users,phone',
                'email'      => 'required|email|unique:users,email',
                'role'       => 'required|string|max:15',
                'password'   => 'required|confirmed|min:6',
            ];

        case 'PUT':
        case 'PATCH': // Mise à jour d'un utilisateur
            return [
                'first_name' => 'sometimes|required|string|max:100',
                'last_name'  => 'sometimes|required|string|max:100',
                'phone'      => 'sometimes|required|string|max:15|unique:users,phone,' . $this->route('user'),
                'email'      => 'sometimes|required|email|unique:users,email,' . $this->route('user'),
                'password'   => 'nullable|min:6',
                'is_locked'  => 'boolean',
            ];

        default:
            return [];
    }
}

}
