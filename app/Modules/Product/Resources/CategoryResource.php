<?php

namespace App\Modules\Product\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *     schema="Category",
 *     title="Category",
 *     description="Modèle Category",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="name", type="string", example="Électronique"),
 *     @OA\Property(property="description", type="string", example="Produits électroniques"),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time")
 * )
 */
class CategoryResource extends JsonResource
{
  public function toArray(Request $request): array
  {
    return [
      'id' => $this->id,
      'name' => $this->name,
      'description' => $this->description,
      'created_at' => $this->created_at->toDateTimeString(),
      'updated_at' => $this->updated_at->toDateTimeString()
    ];
  }
}