<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Modules\Auth\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Modules\Auth\Enums\RolesEnum;

class UserSeeder extends Seeder
{

  public function run()
  {
    foreach (RolesEnum::cases() as $role) {

      $user = User::firstOrCreate(
        ['email' => $role->value . '@example.com'],
        [
          'first_name' => ucfirst($role->value),
          'last_name' => 'User',
          'password' => Hash::make('password'),
          'role' => $role,
          'is_locked' => false,
        ]
      );
    }
  }
}
