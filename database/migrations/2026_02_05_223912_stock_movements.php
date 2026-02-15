<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Crée la table des mouvements de stock
     * - Historique de tous les mouvements de stock
     * - Permet de suivre l'évolution du stock
     * - Facilite l'annulation des commandes
     */
    public function up(): void
    {
        Schema::create('stock_movements', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('product_id')->constrained()->onDelete('cascade');
            $table->foreignUuid('order_id')->nullable()->constrained()->onDelete('set null');
            $table->enum('movement_type', ['in', 'out']);
            $table->integer('quantity');
            $table->string('reason'); // 'order_creation', 'order_cancellation', 'manual_adjustment'
            $table->text('notes')->nullable();
            $table->decimal('unit_price_at_time', 10, 2)->nullable();
            $table->json('metadata')->nullable();
            $table->timestamps();
            
            // Index pour les analyses et rapports
            $table->index(['product_id', 'created_at']);
            $table->index(['order_id', 'movement_type']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stock_movements');
    }
};