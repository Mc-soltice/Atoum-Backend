<?php

namespace App\Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Product extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'products';
  protected $primaryKey = 'id';
  protected $keyType = 'string';
  public $incrementing = false;

  protected $fillable = [
    'name',
    'category_id',
    'price',
    'original_price',
    'image',
    'description',
    'ingredients',
    'benefits',
    'usage',
    'stock',
    'is_promotional',
    'promo_end_date',
  ];

  protected $casts = [
    'price' => 'decimal:2',
    'original_price' => 'decimal:2',
    'ingredients' => 'array',
    'benefits' => 'array',
    'stock' => 'integer',
    'is_promotional' => 'boolean',
    'promo_end_date' => 'datetime',
  ];

  protected $hidden = [
    'deleted_at',
  ];

  protected static function boot()
  {
    parent::boot();

    static::creating(function ($model) {
      if (empty($model->id)) {
        $model->id = (string) Str::uuid();
      }
    });
  }

  /**
   * Relation avec la catégorie
   */
  public function category(): BelongsTo
  {
    return $this->belongsTo(Category::class);
  }

  /**
   * Vérifie si le produit est en promotion
   */
  public function isOnPromotion(): bool
  {
    return $this->is_promotional &&
      (!$this->promo_end_date || $this->promo_end_date->isFuture());
  }

  /**
   * Calcule le pourcentage de réduction
   */
  public function getDiscountPercentageAttribute(): ?float
  {
    if ($this->original_price && $this->original_price > $this->price) {
      return round((($this->original_price - $this->price) / $this->original_price) * 100, 2);
    }
    return null;
  }

  /**
   * Détermine si le stock est bas
   */
  public function isStockLow(): bool
  {
    return $this->stock > 0 && $this->stock <= config('product.stock_low_threshold', 10);
  }

  /**
   * Détermine si le stock est épuisé
   */
  public function isOutOfStock(): bool
  {
    return $this->stock <= 0;
  }
}
