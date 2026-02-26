<?php

namespace App\Modules\Product\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *     schema="Product",
 *     title="Product",
 *     description="Modèle Product",
 *     @OA\Property(property="id", type="string"),
 *     @OA\Property(property="name", type="string"),
 *     @OA\Property(property="price", type="number"),
 *     @OA\Property(property="stock", type="integer"),
 *     @OA\Property(property="is_promotional", type="boolean"),
 *     @OA\Property(property="is_on_promotion", type="boolean")
 * )
 */
class ProductResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,

            'category' => new CategoryResource(
                $this->whenLoaded('category')
            ),

            'price' => (float) $this->price,
            'original_price' => $this->original_price
                ? (float) $this->original_price
                : null,

            // 🔥 Logique métier réelle
            // 'discount_percentage' => $this->discount_percentage,

            // ✅ Nullable safe
            'main_image' => $this->main_image
                ? asset('storage/' . $this->main_image)
                : null,

            // Version simplifiée : seulement les URLs
            'gallery' => $this->whenLoaded('images', function () {
                return $this->images->map(fn($image) => asset('storage/' . $image->path));
            }, []),



            'description' => $this->description,
            'ingredients' => $this->ingredients ?? [],
            'benefits' => $this->benefits ?? [],
            'usage_instructions' => $this->usage_instructions,

            'stock' => $this->stock,
            'is_promotional' => $this->is_promotional,
            'promo_end_date' => $this->promo_end_date?->toISOString(),
            'created_at' => $this->created_at?->toISOString(),
            'updated_at' => $this->updated_at?->toISOString(),

        ];
    }
}
