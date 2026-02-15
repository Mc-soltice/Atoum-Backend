<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Request;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Modules\Order\Models\Order;
use App\Modules\Order\Observers\OrderObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Register bindings here if needed
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        /**
         * �️ MODEL OBSERVERS
         */
        Order::observe(OrderObserver::class);

        /**
         * �🔐 LOGIN ACTIVITY LOG
         */
        Event::listen(Login::class, function (Login $event) {

            $user = $this->resolveModelUser($event->user);

            if (!$user) {
                return;
            }

            activity()
                ->causedBy($user)
                ->withProperties([
                    'ip' => Request::ip(),
                    'user_agent' => Request::userAgent(),
                ])
                ->log('user logged in');
        });

        /**
         * 🔓 LOGOUT ACTIVITY LOG
         */
        Event::listen(Logout::class, function (Logout $event) {

            $user = $this->resolveModelUser($event->user);

            if (!$user) {
                return;
            }

            activity()
                ->causedBy($user)
                ->withProperties([
                    'ip' => Request::ip(),
                    'user_agent' => Request::userAgent(),
                ])
                ->log('user logged out');
        });
    }

    /**
     * Convertit Authenticatable → Model pour Spatie activity log
     * Corrige les erreurs Intelephense + sécurise le runtime.
     */
    private function resolveModelUser(?Authenticatable $user): ?Model
    {
        if ($user instanceof Model) {
            return $user;
        }

        return null;
    }
}
