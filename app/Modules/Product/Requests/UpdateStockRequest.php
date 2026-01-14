<?php

namespace App\Modules\Product\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStockRequest extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    return [
      'stock' => 'required|integer|min:0'
    ];
  }

  public function messages(): array
  {
    return [
      'stock.min' => 'Le stock ne peut pas être négatif'
    ];
  }
}