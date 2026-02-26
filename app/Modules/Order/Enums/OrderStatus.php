<?php

namespace App\Modules\Order\Enums;

/**
 * Enumération des statuts de commande
 *
 * Cycle de vie :
 * pending → confirmed → processing → shipped → delivered
 * pending → cancelled
 *
 * États finaux : delivered, cancelled
 * États comptables : shipped, delivered
 */
enum OrderStatus: string
{
    case PENDING    = 'pending';
    case CONFIRMED  = 'confirmed';
    case PROCESSING = 'processing';
    case SHIPPED    = 'shipped';
    case DELIVERED  = 'delivered';
    case CANCELLED  = 'cancelled';

    /**
     * Retourne tous les statuts sous forme de tableau
     */
    public static function toArray(): array
    {
        return array_column(self::cases(), 'value');
    }

    /**
     * Définition stricte des transitions autorisées
     */
    public function allowedTransitions(): array
    {
        return match ($this) {
            self::PENDING => [
                self::CONFIRMED,
                self::CANCELLED,
            ],

            self::CONFIRMED => [
                self::PROCESSING,
            ],

            self::PROCESSING => [
                self::SHIPPED,
                self::DELIVERED,
            ],

            self::SHIPPED => [
                self::DELIVERED,
            ],

            self::DELIVERED,
            self::CANCELLED => [],
        };
    }

    /**
     * Vérifie si une transition est autorisée
     */
    public function canTransitionTo(self $nextStatus): bool
    {
        return in_array($nextStatus, $this->allowedTransitions(), true);
    }

    /**
     * Indique si le statut est final (verrouillé)
     */
    public function isFinal(): bool
    {
        return in_array($this, [
            self::DELIVERED,
            self::CANCELLED,
        ], true);
    }

    /**
     * Indique si le montant doit être comptabilisé
     */
    public function shouldCountAmount(): bool
    {
        return in_array($this, [
            self::SHIPPED,
            self::DELIVERED,
        ], true);
    }

    /**
     * Libellé lisible du statut
     */
    public function label(): string
    {
        return match ($this) {
            self::PENDING    => 'En attente',
            self::CONFIRMED  => 'Confirmée',
            self::PROCESSING => 'En cours',
            self::SHIPPED    => 'Expédiée',
            self::DELIVERED  => 'Livrée',
            self::CANCELLED  => 'Annulée',
        };
    }
}
