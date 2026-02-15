<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use App\Modules\Order\Enums\OrderStatus;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Met à jour l'enum de statut de la table orders
     * Assure que les valeurs : pending, paid, shipped, delivered, cancelled sont acceptées
     */
    public function up(): void
    {
        // Pour PostgreSQL
        if (DB::connection()->getDriverName() === 'pgsql') {
            DB::statement("ALTER TYPE order_status RENAME TO order_status_old");
            DB::statement("CREATE TYPE order_status AS ENUM ('pending', 'paid', 'shipped', 'delivered', 'cancelled')");
            DB::statement("ALTER TABLE orders ALTER COLUMN status TYPE order_status USING status::text::order_status");
            DB::statement("DROP TYPE order_status_old");
        }
        // Pour MySQL 8.0.30+, on peut modifier directement
        else if (DB::connection()->getDriverName() === 'mysql') {
            // MySQL gère les modifications d'ENUM directement
            Schema::table('orders', function (Blueprint $table) {
                $table->enum('status', OrderStatus::toArray())->default('pending')->change();
            });
        }
    }

    public function down(): void
    {
        // La migration précédente peut être restaurée si nécessaire
        // Pour MySQL
        if (DB::connection()->getDriverName() === 'mysql') {
            Schema::table('orders', function (Blueprint $table) {
                $table->enum('status', ['pending', 'paid', 'shipped', 'delivered', 'cancelled'])->default('pending')->change();
            });
        }
    }
};
