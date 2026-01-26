<?php

namespace App\Modules\Auth\Repositories;

use App\Modules\Auth\Models\User;

class AuthRepository
{
  /**
   * Trouve un utilisateur par son ID.
   *
   * @param int $id
   * @return User|null
   */
  public function findById(int $id): ?User
  {
    return User::find($id);
  }

  /**
   * Trouve un utilisateur par son email.
   *
   * @param string $email
   * @return User|null
   */
public function findByEmail(string $email): ?User
{
    return User::with('roles', 'permissions')->where('email', $email)->first();
}

  /**
   * Met à jour un utilisateur avec de nouvelles données.
   *
   * @param User $user
   * @param array $data
   * @return User
   */
  public function update(User $user, array $data): User
  {
    $user->update($data);
    return $user;
  }

  public function getAll()
  {
    return User::with('roles', 'permissions')->get();
  }

  public function find($id): ?User
  {
    return User::with('roles', 'permissions')->find($id);
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