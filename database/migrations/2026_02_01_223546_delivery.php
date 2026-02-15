<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Crée la table des options de livraison
     * - Configure les méthodes de livraison disponibles
     * - Définit les prix et délais
     * - Permet d'activer/désactiver des options
     */
    public function up(): void
    {
        Schema::create('delivery_options', function (Blueprint $table) {
            $table->id('id')->primary();
            $table->string('name');
            $table->string('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->integer('delay_days');
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0); // Pour ordonner l'affichage
            $table->timestamps();
            
            // Index pour les requêtes fréquentes
            $table->index(['is_active', 'order']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('delivery_options');
    }
};
