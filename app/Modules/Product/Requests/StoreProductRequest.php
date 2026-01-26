<?php

namespace App\Modules\Product\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class StoreProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        Log::info('StoreProductRequest method:', ['method' => $this->method()]);
        Log::info('StoreProductRequest data:', $this->all());
        Log::info('StoreProductRequest files:', array_keys($this->file()));

        switch ($this->method()) {
            case 'POST': // Création
                return [
                    'name' => 'required|string|max:255',
                    'category_id' => 'required|exists:categories,id',
                    'price' => 'required|numeric|min:0',
                    'original_price' => 'nullable|numeric|min:0',
                    'main_image' => 'required|image|max:5120',
                    'images' => 'nullable|array',
                    'images.*' => 'image|max:5120',
                    'ingredients' => 'nullable|array',
                    'ingredients.*' => 'string',
                    'benefits' => 'nullable|array',
                    'benefits.*' => 'string',
                    'usage' => 'nullable|string',
                    'stock' => 'required|integer|min:0',
                    'is_promotional' => 'boolean',
                    'promo_end_date' => 'nullable|date|after:now',
                ];

            case 'PATCH': // Modification
                return [
                    'name' => 'sometimes|string|max:255',
                    'category_id' => 'sometimes|exists:categories,id',
                    'price' => 'sometimes|numeric|min:0',
                    'original_price' => 'nullable|numeric|min:0',
                    'main_image' => 'nullable|image|max:5120',
                    'images' => 'nullable|array',
                    'images.*' => 'image|max:5120',
                    'description' => 'nullable|string',
                    'ingredients' => 'nullable|array',
                    'ingredients.*' => 'string',
                    'benefits' => 'nullable|array',
                    'benefits.*' => 'string',
                    'usage' => 'nullable|string',
                    'stock' => 'sometimes|integer|min:0',
                    'is_promotional' => 'boolean',
                    'promo_end_date' => 'nullable|date|after:now',
                    'existing_gallery' => 'nullable|array',
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
            'stock.min' => 'Le stock ne peut pas être négatif',
            'main_image.max' => 'L\'image ne doit pas dépasser 5MB',
            'images.*.max' => 'Chaque image ne doit pas dépasser 5MB',
        ];
    }

    // Surcharger la méthode validated() pour debug
    public function validated($key = null, $default = null)
    {
        $validated = parent::validated($key, $default);
        
        Log::info('StoreProductRequest validated data:', $validated);
        
        //Log des erreurs de validation si elles existent
        if ($this->validator && $this->validator->fails()) {
            Log::error('Validation errors:', $this->validator->errors()->toArray());
        }
        
        return $validated;
    }

    public function prepareForValidation()
    {
        Log::info('prepareForValidation called with data:', $this->all());
        
        // Convertir les chaînes JSON en tableaux
        $convertFields = ['ingredients', 'benefits', 'existing_gallery'];
        
        foreach ($convertFields as $field) {
            if ($this->has($field) && is_string($this->input($field))) {
                $decoded = json_decode($this->input($field), true);
                if (json_last_error() === JSON_ERROR_NONE) {
                    $this->merge([$field => $decoded]);
                    Log::info("Converted {$field} from JSON to array:", [$field => $decoded]);
                } else {
                    // Si ce n'est pas du JSON, essayer de split par virgule
                    $items = array_map('trim', explode(',', $this->input($field)));
                    $this->merge([$field => array_filter($items)]);
                    Log::info("Converted {$field} from string to array:", [$field => $items]);
                }
            }
        }

        // Convertir les booléens
        if ($this->has('is_promotional')) {
            $value = $this->input('is_promotional');
            $boolValue = filter_var($value, FILTER_VALIDATE_BOOLEAN);
            $this->merge(['is_promotional' => $boolValue]);
            Log::info("Converted is_promotional:", ['value' => $value, 'bool' => $boolValue]);
        }
    }
}