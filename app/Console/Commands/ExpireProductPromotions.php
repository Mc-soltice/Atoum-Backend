<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Modules\Product\Services\ProductPromotionService;

class ExpireProductPromotions extends Command
{
  protected $signature = 'products:expire-promotions';

  protected $description = 'Expire automatiquement les promotions arrivées à terme';

  public function handle(ProductPromotionService $service): int
  {
    $service->expireEndedPromotions();

    $this->info('Promotions expirées avec succès.');

    return self::SUCCESS;
  }
}
