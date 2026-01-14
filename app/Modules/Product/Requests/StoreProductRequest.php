<?php

namespace App\Modules\Product\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    switch ($this->method()) {
      case 'POST': // Création
        return [
          'name' => 'required|string|max:255',
          'category_id' => 'required|integer|exists:categories,id',
          'price' => 'required|numeric|min:0',
          'original_price' => 'nullable|numeric|min:0',
          'image' => 'nullable|string|url',
          'description' => 'nullable|string',
          'ingredients' => 'nullable|array',
          'ingredients.*' => 'string',
          'benefits' => 'nullable|array',
          'benefits.*' => 'string',
          'usage' => 'nullable|string',
          'stock' => 'required|integer|min:0',
          'is_promotional' => 'boolean',
          'promo_end_date' => 'nullable|date_format:Y-m-d H:i:s|after:now'
        ];

      case 'PATCH': // Modification
        return [
          'name' => 'sometimes|string|max:255',
          'category_id' => 'sometimes|integer|exists:categories,id',
          'price' => 'sometimes|numeric|min:0',
          'original_price' => 'nullable|numeric|min:0',
          'image' => 'nullable|string|url',
          'description' => 'nullable|string',
          'ingredients' => 'nullable|array',
          'ingredients.*' => 'string',
          'benefits' => 'nullable|array',
          'benefits.*' => 'string',
          'usage' => 'nullable|string',
          'stock' => 'sometimes|integer|min:0',
          'is_promotional' => 'boolean',
          'promo_end_date' => 'nullable|date_format:Y-m-d H:i:s|after:now'
        ];

      default:
        return [];
    }
  }

  public function messages(): array
  {
    return [
      'category_id.exists' => 'La catégorie sélectionnée n\'existe pas',
      'price.min' => 'Le prix ne peut pas être négatif',
      'stock.min' => 'Le stock ne peut pas être négatif'
    ];
  }
}
