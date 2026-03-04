<?php

namespace App\Modules\Product\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Database\Eloquent\Collection;

class PromotionExpiredBatch
{
  use Dispatchable, SerializesModels;

  public function __construct(
    public Collection $products
  ) {}
}
