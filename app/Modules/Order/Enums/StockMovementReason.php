<?php

namespace App\Modules\Order\Enums;

enum StockMovementReason: string
{
  case ORDER_CREATION     = 'order_creation';
  case ORDER_CANCELLATION = 'order_cancellation';

  /**
   * Label humain (admin / logs)
   */
  public function label(): string
  {
    return match ($this) {
      self::ORDER_CREATION     => 'Création de commande',
      self::ORDER_CANCELLATION => 'Annulation de commande',
    };
  }
}
