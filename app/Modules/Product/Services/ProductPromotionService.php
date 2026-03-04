<?php

namespace App\Modules\Product\Services;

use App\Modules\Product\Models\Product;
use App\Modules\Product\Events\PromotionExpiredBatch;
use Illuminate\Support\Facades\DB;

class ProductPromotionService
{
  public function expireEndedPromotions(): void
  {
    DB::transaction(function () {

      $products = Product::query()
        ->where('is_promotional', true)
        ->whereNotNull('promo_end_date')
        ->where('promo_end_date', '<=', now())
        ->lockForUpdate()
        ->get();

      if ($products->isEmpty()) {
        return;
      }

      foreach ($products as $product) {
        /** @var Product $product */
        $product->price = $product->original_price;
        $product->original_price = null;
        $product->is_promotional = false;
        $product->promo_end_date = null;
        $product->save(); // ✅ sûr à 100 %
      }

      event(new PromotionExpiredBatch($products));
    });
  }
}
