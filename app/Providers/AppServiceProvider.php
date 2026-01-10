<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Request;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        /**
         * 🔐 LOGIN
         */
        Event::listen(Login::class, function (Login $event) {
            activity()
                ->causedBy($event->user)
                ->withProperties([
                    'ip' => Request::ip(),
                    'user_agent' => Request::userAgent(),
                ])
                ->log('user logged in');
        });

        /**
         * 🔓 LOGOUT
         */
        Event::listen(Logout::class, function (Logout $event) {
            if ($event->user) {
                activity()
                    ->causedBy($event->user)
                    ->withProperties([
                        'ip' => Request::ip(),
                        'user_agent' => Request::userAgent(),
                    ])
                    ->log('user logged out');
            }
        });

    }
}
