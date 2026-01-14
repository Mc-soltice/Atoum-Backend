<?php

namespace App\Modules\Product\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modules\Product\Repositories\CategoryRepository;
use App\Modules\Product\Repositories\ProductRepository;
use App\Modules\Product\Services\CategoryService;
use App\Modules\Product\Services\ProductService;

class ProductServiceProvider extends ServiceProvider
{
  public function register(): void
  {
    // Repositories
    $this->app->singleton(CategoryRepository::class, function ($app) {
      return new CategoryRepository($app->make(\App\Modules\Product\Models\Category::class));
    });

    $this->app->singleton(ProductRepository::class, function ($app) {
      return new ProductRepository($app->make(\App\Modules\Product\Models\Product::class));
    });

    // Services
    $this->app->singleton(CategoryService::class, function ($app) {
      return new CategoryService($app->make(CategoryRepository::class));
    });

    $this->app->singleton(ProductService::class, function ($app) {
      return new ProductService($app->make(ProductRepository::class));
    });
  }

  public function boot(): void
  {
    $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

    $this->publishes([
      __DIR__ . '/../config/product.php' => config_path('product.php'),
    ], 'product-config');

    // Register events
    $this->registerEvents();
  }

  private function registerEvents(): void
  {
    $this->app['events']->listen(
      \App\Modules\Product\Events\ProductStockLow::class,
      \App\Modules\Product\Listeners\SendStockAlertNotification::class
    );

    $this->app['events']->listen(
      \App\Modules\Product\Events\ProductOutOfStock::class,
      \App\Modules\Product\Listeners\SendStockAlertNotification::class
    );
  }
}