<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Modules\Product\Services\ProductPromotionService;

class ExpireProductPromotions extends Command implements ShouldQueue
{
  protected $signature = 'products:expire-promotions';
  protected $description = 'Expire les promotions produits arrivées à échéance';

  public function __construct(
    private ProductPromotionService $promotionService
  ) {
    parent::__construct();
  }

  public function handle(): void
  {
    $this->promotionService->expireEndedPromotions();
  }
}
