<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Auth\Controllers\AuthController;
use App\Modules\Product\Controllers\CategoryController;
use App\Modules\Product\Controllers\ProductController;
use App\Modules\Order\Controllers\OrderController;
use App\Modules\Order\Controllers\PaymentController;
use App\Modules\Delivery\Controllers\DeliveryOptionController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| ROUTES PUBLIQUES (CLIENT SANS AUTH)
|--------------------------------------------------------------------------
*/

// Auth
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Produits (lecture publique)
Route::prefix('products')->group(function () {
  Route::get('/', [ProductController::class, 'index']);
  Route::get('/{id}', [ProductController::class, 'show']);
});

// Catégories (lecture publique)
Route::prefix('categories')->group(function () {
  Route::get('/', [CategoryController::class, 'index']);
  Route::get('/{id}', [CategoryController::class, 'show']);
});

// Options de livraison disponibles (publique)
Route::get('/delivery-options/available', [DeliveryOptionController::class, 'available']);

// Création commande (client invité possible)
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');

// Webhook Stripe (appelé directement par Stripe)
Route::post('/payments/webhook', [PaymentController::class, 'handleWebhook']);


/*
|--------------------------------------------------------------------------
| ROUTES AUTHENTIFIÉES (CLIENT CONNECTÉ)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth:sanctum'])->group(function () {

  // Profil utilisateur
  Route::get('/users/me', function (Request $request) {
    return $request->user();
  });

  Route::post('/users/logout', [AuthController::class, 'logout']);

  // Commandes de l'utilisateur connecté
  Route::get('/me/orders', [OrderController::class, 'myOrders'])->name('orders.index');
});

Route::post('/social-login', [AuthController::class, 'socialLogin']);
/*
|--------------------------------------------------------------------------
| ROUTES ADMIN / GESTION
|--------------------------------------------------------------------------
*/

Route::middleware(['auth:sanctum'])->group(function () {

  // ------------------ Utilisateurs ------------------
  Route::prefix('users')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->middleware('ability:user.view');
    Route::get('/{user}', [AuthController::class, 'show'])->middleware('ability:user.view');
    Route::patch('/{user}', [AuthController::class, 'update'])->middleware('ability:user.view');
    Route::delete('/{user}', [AuthController::class, 'destroy'])->middleware('ability:user.delete');
    Route::patch('/{user}/toggle-lock', [AuthController::class, 'toggleLock'])->middleware('ability:user.toggle-lock');
    Route::get('/{user}/activity', [AuthController::class, 'activity'])->middleware('ability:user.view-activity');
  });

  // ------------------ Produits ------------------
  Route::prefix('products')->group(function () {
    Route::post('/', [ProductController::class, 'store'])->middleware('ability:product.create');
    Route::patch('/{id}', [ProductController::class, 'update'])->middleware('ability:product.update');
    Route::delete('/{id}', [ProductController::class, 'destroy'])->middleware('ability:product.delete');
    Route::post('/{id}/restore', [ProductController::class, 'restore'])->middleware('ability:product.delete');

    Route::post('/{id}/promotion', [ProductController::class, 'applyPromotion'])->middleware('ability:product.update');
    Route::delete('/{id}/promotion', [ProductController::class, 'removePromotion'])->middleware('ability:product.update');

    Route::get('/reports/low-stock', [ProductController::class, 'lowStock'])->middleware('ability:product.view');
    Route::get('/reports/out-of-stock', [ProductController::class, 'outOfStock'])->middleware('ability:product.view');
  });

  // ------------------ Catégories ------------------
  Route::prefix('categories')->group(function () {
    Route::post('/', [CategoryController::class, 'store'])->middleware('ability:category.create');
    Route::patch('/{id}', [CategoryController::class, 'update'])->middleware('ability:category.update');
    Route::delete('/{id}', [CategoryController::class, 'destroy'])->middleware('ability:category.delete');
    Route::post('/{id}/restore', [CategoryController::class, 'restore'])->middleware('ability:category.delete');
  });

  // ------------------ Commandes ------------------
  Route::prefix('orders')->group(function () {
    Route::get('/my-orders', [OrderController::class, 'myOrders']);
    Route::get('/', [OrderController::class, 'index'])->middleware('ability:order.view');
    Route::get('/{id}', [OrderController::class, 'show'])->middleware('ability:order.view')->name('orders.show');
    Route::delete('/{id}', [OrderController::class, 'destroy'])->middleware('ability:order.delete');
    Route::patch('/{id}/status', [OrderController::class, 'updateStatus'])->middleware('ability:order.update')->name('orders.status.update');
    Route::post('/{id}/cancel', [OrderController::class, 'cancel'])->middleware('ability:order.update')->name('orders.cancel');
    Route::get('/reports/stock-movements', [OrderController::class, 'stock_movements'])->middleware('ability:order.delete');
  });

  // ------------------ Paiements Stripe ------------------
  Route::prefix('payments')->group(function () {
    Route::post('/create-intent', [PaymentController::class, 'createIntent']);
    Route::post('/verify', [PaymentController::class, 'verify']);
    Route::get('/{payment_intent_id}/status', [PaymentController::class, 'getStatus']);
  });

  // ------------------ Options livraison ------------------
  Route::prefix('delivery-options')->group(function () {
    Route::get('/', [DeliveryOptionController::class, 'index'])->middleware('ability:delivery.view');
    Route::get('/{id}', [DeliveryOptionController::class, 'show'])->middleware('ability:delivery.view');
    Route::post('/', [DeliveryOptionController::class, 'store'])->middleware('ability:delivery.create');
    Route::put('/{delivery_option}', [DeliveryOptionController::class, 'update'])->middleware('ability:delivery.update');
    Route::delete('/{delivery_option}', [DeliveryOptionController::class, 'destroy'])->middleware('ability:delivery.delete');
    Route::patch('/{delivery_option}/toggle', [DeliveryOptionController::class, 'toggle'])->middleware('ability:delivery.update');
    Route::patch('/reorder', [DeliveryOptionController::class, 'reorder'])->middleware('ability:delivery.update');
  });
});
