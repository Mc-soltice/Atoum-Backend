<?php

namespace App\Modules\Order\Repositories;

use App\Modules\Order\Models\Order;
use App\Modules\Order\Enums\OrderStatus;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

/**
 * Repository pour la gestion des opérations de base de données des commandes
 * - Abstraction de l'accès aux données
 * - Logique de requête centralisée
 * - Facilite les tests unitaires
 */
class OrderRepository
{
    /**
     * Crée une nouvelle commande
     */
    public function create(array $data): Order
    {
        return Order::create($data);
    }

    /**
     * Ajoute des items à une commande
     */
    public function addItems(Order $order, array $items): void
    {
        $order->items()->createMany($items);
    }

    /**
     * Trouve une commande par son ID avec ses relations
     */
    public function find(string $id, array $with = []): ?Order
    {
        $query = Order::query();
        
        if (!empty($with)) {
            $query->with($with);
        } else {
            // Relations par défaut
            $query->with(['items.product', 'deliveryOption', 'user']);
        }
        
        return $query->find($id);
    }

    /**
     * Trouve une commande par sa référence
     */
    public function findByReference(string $reference): ?Order
    {
        return Order::where('reference', $reference)
            ->with(['items.product', 'deliveryOption', 'user'])
            ->first();
    }

    /**
     * Liste toutes les commandes avec pagination
     */
    public function all(array $filters = []): LengthAwarePaginator
    {
        $query = Order::with(['items.product', 'deliveryOption', 'user'])
            ->latest();

        // Application des filtres
        $this->applyFilters($query, $filters);

        return $query->paginate(15);
    }

    /**
     * Liste les commandes d'un utilisateur
     */
    public function forUser(int $userId, array $filters = []): LengthAwarePaginator
    {
        $query = Order::with(['items.product', 'deliveryOption'])
            ->where('user_id', $userId)
            ->latest();

        // Application des filtres
        $this->applyFilters($query, $filters);

        return $query->paginate(10);
    }

    /**
     * Met à jour le statut d'une commande
     */
    public function updateStatus(Order $order, OrderStatus $status, ?string $notes = null): Order
    {
        $data = ['status' => $status];
        
        if ($status === OrderStatus::CANCELLED) {
            $data['cancelled_at'] = now();
        }
    
        
        $order->update($data);
        
        return $order->fresh();
    }

    /**
     * Annule une commande
     */
    public function cancel(Order $order, string $reason, ?string $notes = null): Order
    {
        return $this->updateStatus(
            $order, 
            OrderStatus::CANCELLED,
            $notes ?: "Annulé: $reason"
        );
    }

    /**
     * Supprime une commande
     */
    public function delete(Order $order): bool
    {
        return $order->delete();
    }

    /**
     * Statistiques des commandes
     */
    public function getStatistics(): array
    {
        return [
            'total' => Order::count(),
            'pending' => Order::where('status', OrderStatus::PENDING)->count(),
            'paid' => Order::where('status', OrderStatus::PAID)->count(),
            'delivered' => Order::where('status', OrderStatus::DELIVERED)->count(),
            'cancelled' => Order::where('status', OrderStatus::CANCELLED)->count(),
            'total_revenue' => Order::where('status', '!=', OrderStatus::CANCELLED)
                ->sum('total_amount'),
        ];
    }

    /**
     * Application des filtres sur la requête
     */
    private function applyFilters($query, array $filters): void
    {
        if (!empty($filters['status'])) {
            $query->where('status', $filters['status']);
        }
        
        if (!empty($filters['date_from'])) {
            $query->whereDate('created_at', '>=', $filters['date_from']);
        }
        
        if (!empty($filters['date_to'])) {
            $query->whereDate('created_at', '<=', $filters['date_to']);
        }
        
        if (!empty($filters['search'])) {
            $search = $filters['search'];
            $query->where(function ($q) use ($search) {
                $q->where('reference', 'like', "%{$search}%")
                  ->orWhereHas('user', function ($q) use ($search) {
                      $q->where('name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%");
                  });
            });
        }
    }
}