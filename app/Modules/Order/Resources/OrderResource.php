<?php

namespace App\Modules\Order\Resources;

use App\Modules\Order\Models\Order;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *     schema="OrderResource",
 *     type="object",
 *     title="Order Resource",
 *
 *     @OA\Property(property="id", type="string", format="uuid"),
 *     @OA\Property(property="reference", type="string"),
 *     @OA\Property(property="user_id", type="string", nullable=true),
 *
 *     @OA\Property(
 *         property="status",
 *         type="object",
 *         @OA\Property(property="value", type="string"),
 *         @OA\Property(property="label", type="string")
 *     ),
 *
 *     @OA\Property(property="payment_method", type="string"),
 *     @OA\Property(property="total_amount", type="number", format="float"),
 *     @OA\Property(property="currency", type="string"),
 *
 *     @OA\Property(
 *         property="shipping_address",
 *         type="object",
 *         @OA\Property(property="first_name", type="string"),
 *         @OA\Property(property="last_name", type="string"),
 *         @OA\Property(property="email", type="string"),
 *         @OA\Property(property="phone", type="string"),
 *         @OA\Property(property="address", type="string")
 *     ),
 *
 *     @OA\Property(property="items_total", type="number", format="float"),
 *     @OA\Property(property="delivery_cost", type="number", format="float"),
 *
 *     @OA\Property(
 *         property="delivery",
 *         type="object",
 *         @OA\Property(property="id", type="integer"),
 *         @OA\Property(property="name", type="string"),
 *         @OA\Property(property="price", type="number", format="float"),
 *         @OA\Property(property="delay_days", type="integer"),
 *         @OA\Property(property="estimated_delivery", type="string", format="date")
 *     ),
 *
 *     @OA\Property(
 *         property="items",
 *         type="array",
 *         @OA\Items(ref="#/components/schemas/OrderItemResource")
 *     ),
 *
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time"),
 *     @OA\Property(property="cancelled_at", type="string", format="date-time", nullable=true),
 *
 *     @OA\Property(property="notes", type="string", nullable=true),
 *     @OA\Property(property="can_be_cancelled", type="boolean"),
 *
 *     @OA\Property(
 *         property="_links",
 *         type="object",
 *         @OA\Property(property="self", type="string"),
 *         @OA\Property(property="status", type="string"),
 *         @OA\Property(property="cancel", type="string", nullable=true)
 *     )
 * )
 */
class OrderResource extends JsonResource
{
    /**
     * Transforme la ressource en tableau
     */
    public function toArray($request): array
    {
        /** @var Order $this */

        // Calculer le total des items
        $itemsTotal = (float) $this->items->sum('total_price');
        $deliveryCost = (float) $this->deliveryOption->price;
        $totalAmount = $itemsTotal + $deliveryCost;

        // Vérifier si la commande peut être annulée
        $canBeCancelled = $this->status === 'pending' || $this->status === 'confirmed';

        // Récupérer la valeur du statut (string) depuis l'Enum
        $statusValue = $this->status->value ?? (string) $this->status;

        // Si c'est toujours un Enum, le convertir en string
        if ($this->status instanceof \App\Modules\Order\Enums\OrderStatus) {
            $statusValue = $this->status->value;
        }

        return [
            // Identifiants
            'id' => $this->id,
            'reference' => $this->reference,
            'user_id' => $this->user_id,

            // Informations générales
            'status' => [
                'value' => $statusValue,
                'label' => $this->getStatusLabel($statusValue),
            ],
            'payment_method' => $this->payment_method,

            // Montants
            'items_total' => $itemsTotal,
            'delivery_cost' => $deliveryCost,
            'total_amount' => $totalAmount,
            'currency' => $this->currency,

            // Adresse de livraison (telle quelle)
            'shipping_address' => $this->shipping_address,

            // Livraison formatée
            'delivery' => [
                'id' => $this->delivery_option_id,
                'name' => $this->deliveryOption->name,
                'price' => $deliveryCost,
                'delay_days' => $this->deliveryOption->delay_days,
                'estimated_delivery' => $this->created_at->addDays($this->deliveryOption->delay_days)->toDateString(),
            ],

            // Items
            'items' => OrderItemResource::collection($this->whenLoaded('items')),

            // Dates
            'created_at' => $this->created_at->toIso8601String(),
            'updated_at' => $this->updated_at->toIso8601String(),
            'cancelled_at' => $this->cancelled_at?->toIso8601String(),

            // Métadonnées
            'notes' => $this->notes,
            'can_be_cancelled' => $canBeCancelled,

            // Liens
            '_links' => [
                'self' => route('orders.show', $this->id),
                'status' => route('orders.status.update', $this->id),
                'cancel' => $canBeCancelled
                    ? route('orders.cancel', $this->id)
                    : null,
            ],
        ];
    }

    /**
     * Obtenir le libellé du statut
     * Accepte soit une string, soit un Enum
     */
    private function getStatusLabel($status): string
    {
        // Si c'est un Enum, récupérer sa valeur
        if ($status instanceof \App\Modules\Order\Enums\OrderStatus) {
            $status = $status->value;
        }

        $labels = [
            'pending' => 'En attente',
            'confirmed' => 'Confirmée',
            'processing' => 'En traitement',
            'shipped' => 'Expédiée',
            'delivered' => 'Livrée',
            'cancelled' => 'Annulée',
        ];

        return $labels[$status] ?? (string) $status;
    }

    /**
     * Personnalise la réponse
     */
    public function with($request): array
    {
        return [
            'meta' => [
                'version' => '1.0',
                'copyright' => '© ' . date('Y') . ' ' . config('app.name'),
            ],
        ];
    }
}
