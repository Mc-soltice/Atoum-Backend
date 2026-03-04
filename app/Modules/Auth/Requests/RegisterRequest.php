<?php

namespace App\Modules\Auth\Requests;


use App\Modules\Auth\Enums\RolesEnum;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Foundation\Http\FormRequest;


class RegisterRequest extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    return [
      'first_name' => 'required|string|max:100',
      'last_name' => 'required|string|max:100',
      'phone' => 'required|string|max:15|unique:users,phone',
      'email' => 'required|email|unique:users,email',
      'password' => 'required|string|min:6|confirmed',
      'role' => ['sometimes', 'string', new Enum(RolesEnum::class)], // validation via Enums
    ];
  }
}
