<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Ajouter les champs pour la gestion des paiements Stripe
   * 
   * - payment_status : état du paiement (pending, succeeded, failed, cancelled)
   * - stripe_payment_intent_id : ID du PaymentIntent Stripe
   * - paid_at : date/heure du paiement confirmé
   */
  public function up(): void
  {
    Schema::table('orders', function (Blueprint $table) {
      $table->string('payment_status')->default('pending')->after('payment_method');
      $table->string('stripe_payment_intent_id')->nullable()->unique()->after('payment_status');
      $table->timestamp('paid_at')->nullable()->after('stripe_payment_intent_id');
    });
  }

  public function down(): void
  {
    Schema::table('orders', function (Blueprint $table) {
      $table->dropColumn(['payment_status', 'stripe_payment_intent_id', 'paid_at']);
    });
  }
};
