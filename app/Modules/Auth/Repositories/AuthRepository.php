<?php

namespace App\Modules\Auth\Repositories;

use App\Modules\Auth\Models\User;

class AuthRepository
{
  public function findById(int $id): ?User
  {
    return User::find($id);
  }

  public function findByEmail(string $email): ?User
  {
    return User::where('email', $email)->first();
  }

  public function update(User $user, array $data): User
  {
    $user->update($data);
    return $user;
  }

  public function getAll()
  {
    return User::all();
  }

  public function find($id): ?User
  {
    return User::find($id);
  }

  public function create(array $data): User
  {
    return User::create($data);
  }

  public function delete(User $user): bool
  {
    return $user->delete();
  }
}
