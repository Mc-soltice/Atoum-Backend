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
            $table->foreignId('category_id')->constrained()->restrictOnDelete();
            $table->decimal('price', 10, 2);
            $table->decimal('original_price', 10, 2)->nullable();
            $table->string('main_image')->nullable();
            $table->text('description')->nullable();
            $table->json('ingredients')->nullable();
            $table->string('usage_instructions')->nullable();
            $table->json('benefits')->nullable();
            $table->integer('stock')->default(0);
            $table->boolean('is_promotional')->default(false);
            $table->timestamp('promo_end_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

            
        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->uuid('product_id');
            $table->string('path');
            $table->timestamps();

            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->cascadeOnDelete();
        });
}

    public function down(): void
    {
        Schema::dropIfExists('product_images');
        Schema::dropIfExists('products');
    }
};
