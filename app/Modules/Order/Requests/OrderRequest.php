<?php

namespace App\Modules\Order\Requests;

use App\Modules\Order\Enums\OrderStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * Request de validation pour les commandes
 * - Valide la création et la mise à jour des commandes
 * - Gère les règles spécifiques pour chaque méthode HTTP
 */
class OrderRequest extends FormRequest
{
    /**
     * Détermine si l'utilisateur est autorisé à faire cette requête
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Règles de validation
     */
    public function rules(): array
    {
        $method = $this->method();

        return match ($method) {
            'POST' => $this->createRules(),
            'PUT', 'PATCH' => $this->updateRules(),
            default => [],
        };
    }

    /**
     * Règles pour la création d'une commande
     */
    protected function createRules(): array
    {
        return [
            // Option de livraison
            'delivery_option_id' => [
                'required',
                'exists:delivery_options,id',
            ],
            
            // Méthode de paiement
            'payment_method' => [
                'required',
                'string',
                'max:50',
            ],
            
            // Items de commande
            'items' => [
                'required',
                'array',
                'min:1',
            ],
            'items.*.product_id' => [
                'required',
                'uuid',
                'exists:products,id',
            ],
            'items.*.quantity' => [
                'required',
                'integer',
                'min:1',
                'max:100',
            ],
            
            // Adresse de livraison
            'shipping_address.first_name' => [
                'required',
                'string',
                'max:100',
            ],
            'shipping_address.last_name' => [
                'required',
                'string',
                'max:100',
            ],
            'shipping_address.email' => [
                'required',
                'email',
                'max:150',
            ],
            'shipping_address.phone' => [
                'required',
                'string',
                'max:20',
            ],
            'shipping_address.address' => [
                'required',
                'string',
                'max:255',
            ],
            
        ];
    }

    /**
     * Règles pour la mise à jour du statut
     */
    protected function updateRules(): array
    {
        return [
            'status' => [
                'required',
                'string',
                Rule::in(OrderStatus::toArray())

            ],
        ];
    }

    /**
     * Messages de validation personnalisés
     */
    public function messages(): array
    {
        return [
            'items.required' => 'La commande doit contenir au moins un produit.',
            'items.*.quantity.min' => 'La quantité doit être d\'au moins 1.',
            'delivery_option_id.exists' => 'L\'option de livraison sélectionnée n\'existe pas.',
            'shipping_address.*.required' => 'Le champ :attribute est requis pour l\'adresse de livraison.',
        ];
    }

    /**
     * Noms d'attributs personnalisés
     */
    public function attributes(): array
    {
        return [
            'delivery_option_id' => 'option de livraison',
            'items.*.product_id' => 'produit',
            'items.*.quantity' => 'quantité',
            'shipping_address.first_name' => 'prénom',
            'shipping_address.last_name' => 'nom',
            'shipping_address.email' => 'email',
            'shipping_address.phone' => 'téléphone',
            'shipping_address.address' => 'adresse',
        ];
    }
}