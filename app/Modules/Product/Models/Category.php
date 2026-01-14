<?php

namespace App\Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Category extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'name',
    'description'
  ];

  protected $hidden = [
    'deleted_at'
  ];

  /**
   * Relation avec les produits
   */
  public function products(): HasMany
  {
    return $this->hasMany(Product::class);
  }
}