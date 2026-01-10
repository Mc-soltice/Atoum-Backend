<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Auth\Models\User;
use App\Modules\Auth\Events\UserLocked;

Route::get('/test-lock', function () {
    $user = User::first();
    event(new UserLocked($user));
    return "Event déclenché pour " . $user->email;
});
