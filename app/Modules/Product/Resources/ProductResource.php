<?php

namespace App\Modules\Product\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
  public function toArray(Request $request): array
  {
    return [
      'id' => $this->id,
      'name' => $this->name,
      'category' => new CategoryResource($this->whenLoaded('category')),
      'price' => (float) $this->price,
      'original_price' => $this->original_price ? (float) $this->original_price : null,
      'discount_percentage' => $this->when($this->is_promotional, $this->discount_percentage),
      'image' => $this->image,
      'description' => $this->description,
      'ingredients' => $this->ingredients ?? [],
      'benefits' => $this->benefits ?? [],
      'usage' => $this->usage,
      'stock' => $this->stock,
      'is_promotional' => $this->is_promotional,
      'is_on_promotion' => $this->isOnPromotion(),
      'promo_end_date' => $this->promo_end_date?->toDateTimeString(),
      'is_stock_low' => $this->isStockLow(),
      'is_out_of_stock' => $this->isOutOfStock(),
    ];
  }
}