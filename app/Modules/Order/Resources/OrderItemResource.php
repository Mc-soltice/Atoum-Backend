<?php

namespace App\Modules\Order\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *     schema="OrderItemResource",
 *     type="object",
 *     @OA\Property(property="id", type="integer"),
 *     @OA\Property(property="product_id", type="string", format="uuid"),
 *     @OA\Property(property="product_name", type="string"),
 *     @OA\Property(property="product_image", type="string", nullable=true),
 *     @OA\Property(property="quantity", type="integer"),
 *     @OA\Property(property="unit_price", type="number", format="float"),
 *     @OA\Property(property="subtotal", type="number", format="float"),
 *     @OA\Property(
 *         property="variant",
 *         type="object",
 *         nullable=true
 *     )
 * )
 */
class OrderItemResource extends JsonResource
{
    public function toArray($request)
    {
        // Récupérer l'image du produit si disponible
        $productImage = null;
        if (isset($this->product->main_image)) {
            // Si vous utilisez un système de storage Laravel
            $productImage = asset('storage/' . $this->product->main_image);
        }
        
        return [
            'id' => $this->id,
            'product_id' => $this->product_id,
            'product_name' => $this->product_name,
            'product_image' => $productImage,
            'quantity' => $this->quantity,
            'unit_price' => (float) $this->unit_price,
            'subtotal' => (float) $this->total_price, // Utilise total_price comme subtotal
            'variant' => null, // À adapter si vous avez des variantes
        ];
    }
}