<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckUserLock;
use App\Modules\Auth\Controllers\AuthController;
use App\Modules\Product\Controllers\CategoryController;
use App\Modules\Product\Controllers\ProductController;
use App\Http\Controllers\SwaggerTestController;
use Illuminate\Http\Request;

/***** Route publique de register le login */
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login'])->middleware(CheckUserLock::class);
Route::get('/test', [SwaggerTestController::class, 'test']);

// Route::middleware(['auth:sanctum'])->group(function () {

  Route::prefix('users')->group(function () {
    Route::get('/me', function (Request $request) {
    return $request->user();
    });
    Route::get('/', [AuthController::class, 'index']);
      // ->middleware('permission:user.view');
    Route::get('/{user}', [AuthController::class, 'show']);
      // ->middleware('permission:user.view');
    Route::patch('/{user}', [AuthController::class, 'update']);
      // ->middleware('permission:user.update');
    Route::delete('/{user}', [AuthController::class, 'destroy']);
      // ->middleware('permission:user.delete');
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::patch('/{user}/toggle-lock', [AuthController::class, 'toggleLock']);
      // ->middleware('permission:user.toggle-lock');
    Route::get('/{user}/activity', [AuthController::class, 'activity']);
      // ->middleware('permission:user.view-activity');
  });


  Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::get('/{id}', [CategoryController::class, 'show']);
    Route::post('/', [CategoryController::class, 'store']);
    Route::patch('/{id}', [CategoryController::class, 'update']);
    Route::delete('/{id}', [CategoryController::class, 'destroy']);
    Route::post('/{id}/restore', [CategoryController::class, 'restore']);
  });

  Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/low-stock', [ProductController::class, 'lowStock']);
    Route::get('/out-of-stock', [ProductController::class, 'outOfStock']);
    Route::get('/{id}', [ProductController::class, 'show']);
    Route::post('/', [ProductController::class, 'store']);
    Route::patch('/{id}', [ProductController::class, 'update']);
    Route::post('/{id}/promotion', [ProductController::class, 'applyPromotion']);
    Route::delete('/{id}/promotion', [ProductController::class, 'removePromotion']);
    Route::delete('/{id}', [ProductController::class, 'destroy']);
    Route::post('/{id}/restore', [ProductController::class, 'restore']);
  });

// });