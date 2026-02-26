<?php

namespace App\Modules\Order\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StockMouvementResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request)
  {
    return [
      'id' => $this->id,
      'product_id' => $this->product_id,
      'product' => $this->whenLoaded('product', function () {
        return [
          'id' => $this->product->id ?? null,
          'name' => $this->product->name ?? null,
        ];
      }),
      'order_id' => $this->order_id,
      'movement_type' => $this->movement_type,
      'quantity' => (int) $this->quantity,
      'reason' => $this->reason,
      'notes' => $this->notes,
      // old_stock is sometimes stored inside metadata in existing logs
      'old_stock' => isset($this->metadata['old_stock']) ? (int) $this->metadata['old_stock'] : null,
      'new_stock' => isset($this->new_stock) ? (int) $this->new_stock : null,
      'unit_price_at_time' => $this->unit_price_at_time !== null ? (float) $this->unit_price_at_time : null,
      'metadata' => $this->metadata->order_reference ?? null,
      'created_at' => optional($this->created_at)->toDateTimeString(),
      'updated_at' => optional($this->updated_at)->toDateTimeString(),
    ];
  }
}
