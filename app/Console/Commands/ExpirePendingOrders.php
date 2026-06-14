<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Modules\Order\Models\Order;
use App\Modules\Order\Enums\OrderStatus;
use App\Modules\Order\Services\OrderService;
use Illuminate\Support\Facades\Log;

class ExpirePendingOrders extends Command
{
  /**
   * Le nom et la signature de la commande console.
   *
   * @var string
   */
  protected $signature = 'orders:expire-pending {--minutes=30 : Le délai en minutes avant expiration}';

  /**
   * La description de la commande console.
   *
   * @var string
   */
  protected $description = 'Annule automatiquement les commandes en attente dont le délai de paiement a expiré et libère le stock';

  /**
   * Exécute la commande console.
   */
  public function handle(OrderService $orderService): int
  {
    $minutes = (int) $this->option('minutes');
    $expiryTime = now()->subMinutes($minutes);

    // Récupérer les commandes en attente (status = pending) et non payées
    $expiredOrders = Order::where('status', OrderStatus::PENDING)
      ->where('is_paid', false)
      ->where('created_at', '<=', $expiryTime)
      ->get();

    if ($expiredOrders->isEmpty()) {
      $this->info('Aucune commande expirée à annuler.');
      return self::SUCCESS;
    }

    $this->info("Annulation de {$expiredOrders->count()} commande(s) expirée(s)...");

    foreach ($expiredOrders as $order) {
      try {
        $orderService->cancel($order, 'Délai de paiement expiré (annulation automatique)');
        $this->line("Commande {$order->reference} annulée.");
      } catch (\Exception $e) {
        $this->error("Erreur lors de l'annulation de la commande {$order->reference} : {$e->getMessage()}");
        Log::error("Erreur d'annulation auto de commande", [
          'order_id' => $order->id,
          'reference' => $order->reference,
          'error' => $e->getMessage()
        ]);
      }
    }

    $this->info('Toutes les commandes expirées ont été traitées.');

    return self::SUCCESS;
  }
}
