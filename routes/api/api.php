<?php

use App\Http\Middleware\CheckUserLock;
use App\Modules\Auth\Controllers\AuthController;

/***** Route publique de register le login */
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login'])->middleware(CheckUserLock::class);

Route::middleware(['auth:sanctum'])->prefix('users')->group(function () {

  Route::get('/', [AuthController::class, 'index'])
    ->middleware('permission:user.view');

  Route::get('/{user}', [AuthController::class, 'show'])
    ->middleware('permission:user.view');

  Route::put('/{user}', [AuthController::class, 'update'])
    ->middleware('permission:user.update');

  Route::delete('/{user}', [AuthController::class, 'destroy'])
    ->middleware('permission:user.delete');

  Route::post('/logout', [AuthController::class, 'logout']);

  // Correction: utilisation de l'ID dans l'URL 
  Route::patch('/{user}/toggle-lock', [AuthController::class, 'toggleLock'])
    ->middleware('permission:user.toggle-lock');

  Route::get('/{user}/activity', [AuthController::class, 'activity'])
    ->middleware('permission:user.view-activity');

});