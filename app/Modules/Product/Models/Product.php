<?php

namespace App\Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string $name
 * @property float $price
 * @property int $stock
 * @property bool $is_promotional
 */
class Product extends Model
{
    use HasFactory, SoftDeletes;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'category_id',
        'price',
        'original_price',
        'main_image',
        'description',
        'ingredients',
        'benefits',
        'usage_instructions',
        'stock',
        'is_promotional',
        'promo_end_date',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'original_price' => 'decimal:2',
        'ingredients' => 'array',
        'benefits' => 'array',
        'is_promotional' => 'boolean',
        'promo_end_date' => 'datetime',
    ];

    protected static function booted()
    {
        static::creating(fn ($model) => $model->id ??= Str::uuid());
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function getIdShortAttribute(): string
{
    return substr($this->id, 0, 5);
}
public function isStockLow(): bool
{
    return $this->stock > 0 && $this->stock <= config('product.stock_low_threshold', 10);
}

public function isOutOfStock(): bool
{
    return $this->stock <= 0;
}


}

