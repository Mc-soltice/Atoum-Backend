<?php

namespace App\Modules\Order\Listeners;

use App\Modules\Order\Events\OrderCreated;
use App\Modules\Order\Services\StockService;
use Illuminate\Contracts\Queue\ShouldQueue;

class DecreaseProductStock implements ShouldQueue
{
    public function __construct(private StockService $stockService) {}

    public function handle(OrderCreated $event): void
    {
        $order = $event->order->load('items.product');

        $this->stockService->decreaseStockForOrder($order);
    }
}
