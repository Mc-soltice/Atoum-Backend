<?php

namespace App\Modules\Order\Listeners;

use App\Modules\Order\Events\OrderCancelled;
use App\Modules\Order\Services\StockService;
use Illuminate\Contracts\Queue\ShouldQueue;

class RestoreProductStock implements ShouldQueue
{
  public function __construct(private StockService $stockService) {}

  public function handle(OrderCancelled $event): void
  {
    $order = $event->order->load('items.product');

    $this->stockService->restoreStockForOrder($order);
  }
}
