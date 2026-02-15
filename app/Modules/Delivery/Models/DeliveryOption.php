<?php

namespace App\Modules\Delivery\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Modules\Order\Models\Order;

/**
 * @OA\Schema(
 *     schema="DeliveryOption",
 *     type="object",
 *     required={"id", "name", "price", "delay_days"},
 *     @OA\Property(
 *         property="id",
 *         type="string",
 *         format="uuid",
 *         example="550e8400-e29b-41d4-a716-446655440000"
 *     ),
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         example="Livraison standard"
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         nullable=true,
 *         example="Livraison sous 3-5 jours ouvrables"
 *     ),
 *     @OA\Property(
 *         property="price",
 *         type="number",
 *         format="float",
 *         example=1500.00
 *     ),
 *     @OA\Property(
 *         property="delay_days",
 *         type="integer",
 *         example=3
 *     ),
 *     @OA\Property(
 *         property="is_active",
 *         type="boolean",
 *         example=true
 *     ),
 *     @OA\Property(
 *         property="order",
 *         type="integer",
 *         example=1
 *     ),
 *     @OA\Property(
 *         property="created_at",
 *         type="string",
 *         format="date-time",
 *         example="2024-01-15T10:30:00Z"
 *     ),
 *     @OA\Property(
 *         property="updated_at",
 *         type="string",
 *         format="date-time",
 *         example="2024-01-15T10:30:00Z"
 *     )
 * )
 */
class DeliveryOption extends Model
{

    protected $fillable = [
        'name',
        'description',
        'price',
        'delay_days',
        'is_active',
        'order',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'delay_days' => 'integer',
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    protected $attributes = [
        'is_active' => true,
        'order' => 0,
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order')->orderBy('name');
    }
}