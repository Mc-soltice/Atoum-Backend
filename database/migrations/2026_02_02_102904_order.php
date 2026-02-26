<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Modules\Order\Enums\OrderStatus;

return new class extends Migration
{
    /**
     * Table des commandes
     *
     * - Gestion complète du cycle de vie d’une commande
     * - Support paiement, livraison et annulation
     * - Adresse de livraison stockée en JSON
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {

            /** Identité */
            $table->uuid('id')->primary();
            $table->string('reference')->unique();

            /** Relations */
            $table->foreignId('user_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('delivery_option_id')
                ->constrained('delivery_options')
                ->restrictOnDelete();

            /** Statut & paiement */
            $table->enum('status', OrderStatus::toArray())
                ->default(OrderStatus::PENDING->value);

            $table->string('payment_method')->nullable();
            $table->boolean('is_paid')->default(false);

            /** Montants */
            $table->decimal('total_amount', 12, 2)->unsigned();
            $table->char('currency', 3)->default('EUR');

            /** Livraison */
            $table->json('shipping_address');

            /** Annulation */
            $table->timestamp('cancelled_at')->nullable();

            /** Timestamps */
            $table->timestamps();

            /** Index */
            $table->index(['status', 'created_at']);
            $table->index(['user_id', 'created_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
