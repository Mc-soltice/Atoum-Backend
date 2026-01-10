<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use App\Modules\Auth\Models\User;
use Illuminate\Http\Request;
use App\Modules\Auth\Events\UserLocked;


class CheckUserLock
{
    public function handle(Request $request, Closure $next)
    {
        $user = User::where('email', $request['email'])->first(); // Changé de id à email

        if ($user && $user->loginAttempt) {
            $attempts = $user->loginAttempt->attempts;
            $lockedUntil = $user->loginAttempt->locked_until;

            if ($lockedUntil && Carbon::now()->lessThan($lockedUntil)) {
                return response()->json(['message' => 'Account is locked.'], 423);
            }

            if ($attempts >= 3) {
                $user->loginAttempt->update([
                    'locked_until' => Carbon::now()->addMinutes(60),
                    'attempts' => 0,
                ]);

                $user->update(['is_locked' => true]);

                event(new UserLocked($user));


                return response()->json(['message' => 'Account is locked.'], 423);
            }

            // 🔓 Si plus de verrouillage
            if ($user->is_locked && (!$lockedUntil || Carbon::now()->greaterThan($lockedUntil))) {
                $user->update(['is_locked' => false]);
            }
        }

        return $next($request);
    }
}