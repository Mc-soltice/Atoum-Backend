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

            // 🔥 CORRECTION CRITIQUE ICI
            'gallery' => $this->whenLoaded('images', function () {
                return $this->images->map(fn ($img) =>
                    asset('storage/' . $img->image_path)
                );
            }, []),


            'description' => $this->description,
            'ingredients' => $this->ingredients ?? [],
            'benefits' => $this->benefits ?? [],
            'usage' => $this->usage,

            'stock' => $this->stock,
            'is_promotional' => $this->is_promotional,
            'promo_end_date' => $this->promo_end_date?->toISOString(),

            ];
          }
}
            
// 'is_stock_low' => $this->isStockLow(),
// 'is_out_of_stock' => $this->isOutOfStock(),

