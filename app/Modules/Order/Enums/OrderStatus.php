<?php

namespace App\Modules\Order\Enums;

/**
 * Énumération des statuts de commande
 * - pending: Commande créée, en attente de paiement
 * - paid: Commande payée, en préparation
 * - shipped: Commande expédiée
 * - delivered: Commande livrée
 * - cancelled: Commande annulée
 */
enum OrderStatus: string
{
    case PENDING = 'pending';
    case PAID = 'paid';
    case SHIPPED = 'shipped';
    case DELIVERED = 'delivered';
    case CANCELLED = 'cancelled';

    /**
     * Retourne la liste des statuts sous forme d'array
     */
    public static function toArray(): array
    {
        return array_column(self::cases(), 'value');
    }

    /**
     * Retourne les statuts valides pour la transition
     */
    public function allowedTransitions(): array
    {
        return match ($this) {
            self::PENDING => [
                self::DELIVERED,
                self::PAID,
                self::CANCELLED
            ],

            self::PAID => [
                self::SHIPPED,
                self::CANCELLED
            ],

            self::SHIPPED => [
                self::DELIVERED
            ],

            self::DELIVERED => [],

            self::CANCELLED => [],
        };
    }

    /**
     * Vérifie si une transition est valide
     */
    public function canTransitionTo(OrderStatus $status): bool
    {
        return in_array($status, $this->allowedTransitions());
    }

    /**
     * Retourne le libellé du statut
     */
    public function label(): string
    {
        return match($this) {
            self::SHIPPED => 'Expédiée',
            self::PENDING => 'En cour',
            self::PAID => 'Payée',
            self::DELIVERED => 'Livrée',
            self::CANCELLED => 'Annulée',
        };
    }
}