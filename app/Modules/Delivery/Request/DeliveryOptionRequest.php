<?php

namespace App\Modules\Delivery\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * @OA\Schema(
 *     schema="DeliveryOptionRequest",
 *     type="object",
 *     required={"name", "price", "delay_days"},
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         maxLength=100,
 *         example="Livraison Express"
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         nullable=true,
 *         maxLength=500,
 *         example="Livraison en 24h"
 *     ),
 *     @OA\Property(
 *         property="price",
 *         type="number",
 *         format="float",
 *         minimum=0,
 *         example=2500.00
 *     ),
 *     @OA\Property(
 *         property="delay_days",
 *         type="integer",
 *         minimum=0,
 *         example=1
 *     ),
 *     @OA\Property(
 *         property="is_active",
 *         type="boolean",
 *         example=true
 *     ),
 *     @OA\Property(
 *         property="order",
 *         type="integer",
 *         minimum=0,
 *         example=1
 *     )
 * )
 */
class DeliveryOptionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $method = $this->method();
        $deliveryOptionId = $this->route('delivery_option')?->id;

        return [
            'name' => [
                'required',
                'string',
                'max:100',
                Rule::unique('delivery_options')->ignore($deliveryOptionId),
            ],
            'description' => [
                'nullable',
                'string',
                'max:500',
            ],
            'price' => [
                'required',
                'numeric',
                'min:0',
            ],
            'delay_days' => [
                'required',
                'integer',
                'min:0',
            ],
            'is_active' => [
                'boolean',
            ],
            'order' => [
                'integer',
                'min:0',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Le nom est obligatoire',
            'name.unique' => 'Ce nom est déjà utilisé',
            'price.required' => 'Le prix est obligatoire',
            'price.min' => 'Le prix ne peut pas être négatif',
            'delay_days.required' => 'Le délai est obligatoire',
            'delay_days.min' => 'Le délai ne peut pas être négatif',
        ];
    }
}