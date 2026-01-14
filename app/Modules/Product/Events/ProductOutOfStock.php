<?php

namespace App\Modules\Product\Events;

use App\Modules\Product\Models\Product;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class ProductOutOfStock
{
  use Dispatchable, SerializesModels;

  public function __construct(
    public Product $product
  ) {
  }
}