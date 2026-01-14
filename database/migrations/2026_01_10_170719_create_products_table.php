<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->foreignId('category_id')->constrained()->onDelete('restrict');
            $table->decimal('price', 10, 2);
            $table->decimal('original_price', 10, 2)->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->json('ingredients')->nullable();
            $table->json('benefits')->nullable();
            $table->text('usage')->nullable();
            $table->integer('stock')->default(0);
            $table->boolean('is_promotional')->default(false);
            $table->timestamp('promo_end_date')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->index('category_id');
            $table->index('is_promotional');
            $table->index('promo_end_date');
            $table->index('stock');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};