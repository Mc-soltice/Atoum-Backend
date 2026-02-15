<?php

namespace App\Modules\Order\Services;

use App\Modules\Order\Models\Order;
use App\Modules\Order\Models\StockMovement;
use App\Modules\Product\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

/**
 * Service de gestion du stock
 * - Gère les entrées/sorties de stock
 * - Historique des mouvements
 * - Synchronisation avec les commandes
 */
class StockService
{
    /**
     * Diminue le stock pour une commande
     */
    public function decreaseStockForOrder(Order $order): void
    {
        DB::transaction(function () use ($order) {
            foreach ($order->items as $item) {
                $product = $item->product;
                
                // Vérifie le stock disponible
                if ($product->stock < $item->quantity) {
                    throw new \Exception(
                        "Stock insuffisant pour {$product->name}. " .
                        "Disponible: {$product->stock}, Demandé: {$item->quantity}"
                    );
                }
                
                // Diminue le stock
                $product->decrement('stock', $item->quantity);
                
                // Enregistre le mouvement
                StockMovement::create([
                    'product_id' => $product->id,
                    'order_id' => $order->id,
                    'movement_type' => 'out',
                    'quantity' => $item->quantity,
                    'reason' => 'order_creation',
                    'unit_price_at_time' => $item->unit_price,
                    'metadata' => [
                        'order_reference' => $order->reference,
                        'product_name' => $product->name,
                    ],
                ]);
                
                Log::debug('Stock diminué', [
                    'product_id' => $product->id,
                    'quantity' => $item->quantity,
                    'new_stock' => $product->stock
                ]);
            }
        });
    }

    /**
     * Restaure le stock après annulation d'une commande
     */
    public function restoreStockForOrder(Order $order): void
    {
        DB::transaction(function () use ($order) {
            foreach ($order->items as $item) {
                $product = $item->product;
                
                // Augmente le stock
                $product->increment('stock', $item->quantity);
                
                // Enregistre le mouvement inverse
                StockMovement::create([
                    'product_id' => $product->id,
                    'order_id' => $order->id,
                    'movement_type' => 'in',
                    'quantity' => $item->quantity,
                    'reason' => 'order_cancellation',
                    'unit_price_at_time' => $item->unit_price,
                    'metadata' => [
                        'order_reference' => $order->reference,
                        'cancelled_at' => $order->cancelled_at,
                        'product_name' => $product->name,
                    ],
                ]);
                
                Log::debug('Stock restauré', [
                    'product_id' => $product->id,
                    'quantity' => $item->quantity,
                    'new_stock' => $product->stock
                ]);
            }
        });
    }

    /**
     * Vérifie la disponibilité du stock pour un produit
     */
    public function checkStockAvailability(string $productId, int $quantity): bool
    {
        $product = Product::find($productId);
        
        if (!$product) {
            return false;
        }
        
        return $product->stock >= $quantity;
    }

    /**
     * Récupère l'historique des mouvements de stock
     */
    public function getStockHistory(string $productId, array $filters = []): \Illuminate\Pagination\LengthAwarePaginator
    {
        $query = StockMovement::where('product_id', $productId)
            ->with('order')
            ->orderBy('created_at', 'desc');

        // Filtres
        if (!empty($filters['type'])) {
            $query->where('movement_type', $filters['type']);
        }
        
        if (!empty($filters['date_from'])) {
            $query->whereDate('created_at', '>=', $filters['date_from']);
        }
        
        if (!empty($filters['date_to'])) {
            $query->whereDate('created_at', '<=', $filters['date_to']);
        }

        return $query->paginate(20);
    }
}