<?php

namespace App\Modules\Order\Models;

use App\Modules\Product\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Modèle représentant un mouvement de stock
 * 
 * @property int $id
 * @property string $product_id
 * @property string|null $order_id
 * @property string $movement_type
 * @property int $quantity
 * @property string $reason
 * @property string|null $notes
 * @property float|null $unit_price_at_time
 * @property array|null $metadata
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property-read Product $product
 * @property-read Order|null $order
 */
class StockMovement extends Model
{
    /**
     * Champs assignables en masse
     */
    protected $fillable = [
        'product_id',
        'order_id',
        'movement_type',
        'quantity',
        'reason',
        'notes',
        'unit_price_at_time',
        'metadata',
    ];

    /**
     * Conversions de type
     */
    protected $casts = [
        'quantity' => 'integer',
        'unit_price_at_time' => 'decimal:2',
        'metadata' => 'array',
    ];

    /**
     * Relation avec le produit
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Relation avec la commande
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Scope pour les entrées de stock
     */
    public function scopeIncoming($query)
    {
        return $query->where('movement_type', 'in');
    }

    /**
     * Scope pour les sorties de stock
     */
    public function scopeOutgoing($query)
    {
        return $query->where('movement_type', 'out');
    }
}