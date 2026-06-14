<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Routing\Exceptions\InvalidSignatureException;
use  \App\Http\Middleware\DisableDebugbar;


// Import correct des middlewares Spatie
use App\Http\Middleware\CheckRole;
use App\Http\Middleware\CheckUser;

// Import des middlewares personnalisés si besoin
use App\Http\Middleware\CheckUserLock;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Alias pour Spatie Permission
        $middleware->alias([
            'role' => CheckRole::class,
            'ability' => CheckUser::class,
            'checkUserLock' => CheckUserLock::class,
            'disableDebugbar' => DisableDebugbar::class,
        ]);
        // Ajoute ici d'autres middlewares si besoin
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->renderable(function (InvalidSignatureException $e, $request) {
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Ce lien a expiré ou est invalide. Veuillez contacter le support.',
                ], 403);
            }

            return response()->view('errors.link-expired', [], 403);
        });
    })
    ->withCommands([
        \App\Console\Commands\ExpireProductPromotions::class,
    ])
    ->create();
