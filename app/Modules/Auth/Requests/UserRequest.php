<?php

namespace App\Modules\Auth\Requests;

use App\Modules\Auth\Enums\RolesEnum;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Validation\Rule;



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
                    'role'       => ['sometimes', 'string', new Enum(RolesEnum::class)],
                    'password'   => 'required|confirmed|min:6',
                ];

            case 'PUT':
            case 'PATCH': // Mise à jour d'un utilisateur
                return [
                    'first_name' => 'sometimes|required|string|max:100',
                    'last_name'  => 'sometimes|required|string|max:100',

                    'phone' => [
                        'sometimes',
                        'required',
                        'string',
                        'max:15',
                        Rule::unique('users')->ignore($this->route('user')->id ?? $this->route('user'))
                    ],
                    'email' => [
                        'sometimes',
                        'required',
                        'email',
                        Rule::unique('users')->ignore($this->route('user')->id ?? $this->route('user'))
                    ],
                    'password'   => 'nullable|min:6',
                    'is_locked'  => 'boolean',
                ];

            default:
                return [];
        }
    }
}
