<?php

namespace App\Modules\Order\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Order\Repositories\OrderRepository;
use Illuminate\View\View;

class SignedOrderController extends Controller
{
  public function __construct(
    private OrderRepository $repository
  ) {}

  /**
   * Affiche la page de commande pour une route signée
   */
  public function show(string $id): View
  {
    $order = $this->repository->find($id);

    if (!$order) {
      abort(404, 'Commande non trouvée');
    }

    return view('orders.show', compact('order'));
  }
}
