<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Auth\Models\User;
use App\Modules\Auth\Events\UserLocked;

Route::get('/test-enum', function () {
    $all = array_map(fn($a) => $a->value, App\Enums\Ability::cases());
    dd($all);
});
Route::get('/test-lock', function () {
    $user = User::first();
    event(new UserLocked($user));
    return "Event déclenché pour " . $user->email;
});
