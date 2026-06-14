<?php

namespace App\Http\Middleware;

use Barryvdh\Debugbar\Facades\Debugbar;
use Closure;


class DisableDebugbar
{
  public function handle($request, Closure $next)
  {
    if ($request->is('api/*')) {
      Debugbar::disable();
    }

    return $next($request);
  }
}
