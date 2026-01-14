<?php

namespace App\Modules\Product\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreCategoryRequest extends FormRequest
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
          'name' => 'required|string|max:255|unique:categories,name',
          'description' => 'required|string',
        ];

      case 'PATCH': // Modification
        return [
          'name' => 'sometimes|string|max:255|unique:categories,name,' . $this->route('category'),
          'description' => 'sometimes|string',
        ];

      default:
        return [];
    }
  }

  public function messages(): array
  {
    return [
      'name.required' => 'Le nom de la catégorie est obligatoire',
      'name.unique' => 'Cette catégorie existe déjà',
      'description.required' => 'La description est obligatoire',
    ];
  }
}
