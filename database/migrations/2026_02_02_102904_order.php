<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use App\Modules\Order\Enums\OrderStatus;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Crée la table des commandes
     * - Gère les commandes utilisateur
     * - Suit le statut et les informations de paiement
     * - Stocke l'adresse de livraison sous forme JSON
     * 
     * Statuts disponibles : pending, paid, shipped, delivered, cancelled
     * - pending: Commande créée, en attente de paiement
     * - paid: Commande payée, en préparation
     * - shipped: Commande expédiée
     * - delivered: Commande livrée (marque automatiquement is_paid = true)
     * - cancelled: Commande annulée
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('reference')->unique();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('delivery_option_id')->constrained('delivery_options')->onDelete('restrict');
            $table->enum('status', OrderStatus::toArray())->default('pending');
            $table->string('payment_method');
            $table->boolean('is_paid')->default(false);
            $table->decimal('total_amount', 12, 2);
            $table->string('currency')->default('€');
            $table->json('shipping_address');
            $table->timestamp('cancelled_at')->nullable();
            $table->timestamps();
            
            // Index pour optimiser les recherches fréquentes
            $table->index(['status', 'created_at']);
            $table->index(['user_id', 'created_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};