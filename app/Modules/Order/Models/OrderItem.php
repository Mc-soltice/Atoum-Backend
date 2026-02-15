<?php

namespace App\Modules\Order\Models;

use App\Modules\Product\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Modèle représentant un item d'une commande
 * 
 * @property int $id
 * @property string $order_id
 * @property string $product_id
 * @property string $product_name
 * @property int $quantity
 * @property float $unit_price
 * @property float $total_price
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property-read Order $order
 * @property-read Product $product
 * 
 * @OA\Schema(
 *   schema="OrderItem",
 *   type="object",
 *   required={"id","order_id","product_id","quantity","unit_price","total_price"},
 *   @OA\Property(property="id", type="integer", example=1),
 *   @OA\Property(property="order_id", type="string", format="uuid", example="550e8400-e29b-41d4-a716-446655440000"),
 *   @OA\Property(property="product_id", type="string", format="uuid", example="550e8400-e29b-41d4-a716-446655440001"),
 *   @OA\Property(property="product_name", type="string", example="Miel naturel bio"),
 *   @OA\Property(property="quantity", type="integer", example=2),
 *   @OA\Property(property="unit_price", type="number", format="float", example=22999.99),
 *   @OA\Property(property="total_price", type="number", format="float", example=45999.98)
 * )
 */
class OrderItem extends Model
{
    /**
     * Champs assignables en masse
     */
    protected $fillable = [
        'order_id',
        'product_id',
        'product_name',
        'quantity',
        'unit_price',
        'total_price',
    ];

    /**
     * Conversions de type
     */
    protected $casts = [
        'unit_price' => 'decimal:2',
        'total_price' => 'decimal:2',
        'quantity' => 'integer',
    ];

    /**
     * Boot du modèle - Calcule automatiquement le prix total
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            $item->total_price = $item->quantity * $item->unit_price;
        });

        static::updating(function ($item) {
            $item->total_price = $item->quantity * $item->unit_price;
        });
    }

    /**
     * Relation avec la commande
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Relation avec le produit
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}