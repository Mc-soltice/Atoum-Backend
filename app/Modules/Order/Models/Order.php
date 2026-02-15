<?php

namespace App\Modules\Order\Models;

use App\Modules\Auth\Models\User;
use App\Modules\Order\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Modules\Delivery\Models\DeliveryOption;

/**
 * Modèle représentant une commande utilisateur
 * 
 * @property string $id
 * @property string $reference
 * @property int $user_id
 * @property string $delivery_option_id
 * @property OrderStatus $status
 * @property string $payment_method
 * @property boolean $is_paid
 * @property float $total_amount
 * @property string $currency
 * @property array $shipping_address
 * @property string|null $notes
 * @property \Carbon\Carbon|null $cancelled_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property-read User $user
 * @property-read DeliveryOption $deliveryOption
 * @property-read \Illuminate\Database\Eloquent\Collection|OrderItem[] $items
 * @property-read \Illuminate\Database\Eloquent\Collection|StockMovement[] $stockMovements
 * 
 * @OA\Schema(
 *   schema="Order",
 *   type="object",
 *   required={"id","reference","user_id","status","total_amount"},
 *   @OA\Property(property="id", type="string", format="uuid", example="550e8400-e29b-41d4-a716-446655440000"),
 *   @OA\Property(property="reference", type="string", example="ORD-2026-00012"),
 *   @OA\Property(property="user_id", type="integer", example=5),
 *   @OA\Property(
 *     property="status",
 *     type="string",
 *     enum={"pending","paid","shipped","delivered","cancelled"},
 *     example="pending"
 *   ),
 *   @OA\Property(property="total_amount", type="number", format="float", example=45999.99),
 *   @OA\Property(property="currency", type="string", example="€"),
 *   @OA\Property(property="shipping_address", type="object"),
 *   @OA\Property(
 *     property="items",
 *     type="array",
 *     @OA\Items(ref="#/components/schemas/OrderItem")
 *   ),
 *   @OA\Property(property="created_at", type="string", format="date-time"),
 *   @OA\Property(property="updated_at", type="string", format="date-time")
 * )
 */
class Order extends Model
{
    use HasUuids;
    

    /**
     * Champs assignables en masse
     */
    protected $fillable = [
        'reference',
        'user_id',
        'delivery_option_id',
        'status',
        'payment_method',
        'is_paid',
        'total_amount',
        'currency',
        'shipping_address',
        'cancelled_at',
    ];

    /**
     * Conversions de type
     */
    protected $casts = [
        'status' => OrderStatus::class,
        'shipping_address' => 'array',
        'total_amount' => 'decimal:2',
        'is_paid' => 'boolean',
        'cancelled_at' => 'datetime',
        'is_active' => 'boolean',
    ];

    /**
     * Valeurs par défaut
     */
    protected $attributes = [
        'status' => 'pending',
        'currency' => '€',
    ];

    /**
     * Boot du modèle - Génération automatique de la référence
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($order) {
            if (empty($order->reference)) {
                $order->reference = static::generateReference();
            }
        });
    }

    /**
     * Génère une référence unique pour la commande
     * Format: ORD-YYYY-XXXXX
     */
    public static function generateReference(): string
    {
        $year = date('Y');
        $lastOrder = static::whereYear('created_at', $year)->latest()->first();
        $nextNumber = $lastOrder ? (int) substr($lastOrder->reference, -5) + 1 : 1;
        
        return sprintf('ORD-%s-%05d', $year, $nextNumber);
    }

    /**
     * Relation avec l'utilisateur
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relation avec l'option de livraison
     */
    public function deliveryOption(): BelongsTo
    {
        return $this->belongsTo(DeliveryOption::class);
    }

    /**
     * Relation avec les items de commande
     */
    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    /**
     * Relation avec les mouvements de stock
     */
    public function stockMovements(): HasMany
    {
        return $this->hasMany(StockMovement::class);
    }

    /**
     * Vérifie si la commande peut être annulée
     */
    public function canBeCancelled(): bool
    {
        return in_array($this->status, ['pending', 'paid']);
    }

    /**
     * Calcule le montant total de la commande
     */
    public function calculateTotal(): float
    {
        $itemsTotal = $this->items->sum('total_price');
        $deliveryPrice = $this->deliveryOption->price ?? 0;
        
        return $itemsTotal + $deliveryPrice;
    }
}