<?php

namespace App\Modules\Order\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Request de validation pour l'annulation d'une commande
 */
class OrderCancelRequest extends FormRequest
{
    /**
     * Détermine si l'utilisateur est autorisé à faire cette requête
     */
    public function authorize(): bool
    {
        return $this->user()->can('cancel', $this->route('order'));
    }

    /**
     * Règles de validation
     */
    public function rules(): array
    {
        return [
            'reason' => [
                'required',
                'string',
                'max:255',
            ],
        ];
    }

    /**
     * Messages de validation personnalisés
     */
    public function messages(): array
    {
        return [
            'reason.required' => 'Veuillez indiquer la raison de l\'annulation.',
            'reason.max' => 'La raison ne doit pas dépasser 255 caractères.',
        ];
    }
}