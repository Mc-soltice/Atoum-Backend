<?php

namespace App\Modules\Order\Events;

use App\Modules\Order\Models\Order;
use App\Modules\Order\Enums\OrderStatus;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class OrderStatusUpdated
{
  use Dispatchable, SerializesModels;

  public function __construct(
    public Order $order,
    public OrderStatus $oldStatus,
    public OrderStatus $newStatus
  ) {}
}
