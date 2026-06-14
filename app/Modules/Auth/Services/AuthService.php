<?php

namespace App\Modules\Auth\Services;


use App\Modules\Auth\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Modules\Auth\Events\UserUnlocked;
use App\Modules\Auth\Repositories\AuthRepository;
use App\Enums\Ability;
use App\Modules\Auth\Enums\RolesEnum;

class AuthService
{
    protected $repository;

    public function __construct(AuthRepository $repository)
    {
        $this->repository = $repository;
    }

    private function getAbilitiesForRole(RolesEnum|string $role): array
    {
        // Si c'est un enum, on prend sa valeur string
        if ($role instanceof RolesEnum) {
            $role = $role->value;
        }

        $all = array_map(fn(Ability $a) => $a->value, Ability::cases());

        return match ($role) {
            RolesEnum::ADMIN->value => $all,
            RolesEnum::GESTIONNAIRE->value => array_filter($all, fn($a) => !str_ends_with($a, '.delete')),
            RolesEnum::CLIENT->value => array_filter($all, fn($a) => str_ends_with($a, '.view') || str_ends_with($a, '.create')),
            default => [],
        };
    }
    public function register(array $data): User
    {
        $data['password'] = Hash::make($data['password']);
        $data['role'] = $data['role'] ?? RolesEnum::CLIENT->value;

        $user = $this->repository->create($data);

        // Créer un token avec abilities selon le rôle
        $token = $user->createToken('auth_token', $this->getAbilitiesForRole($user->role))->plainTextToken;

        return $user;
    }

    public function login(array $data): ?array
    {
        $user = $this->repository->findByEmail($data['email']);

        if (!$user || !Hash::check($data['password'], $user->password)) {
            return null;
        }

        if ($user->is_locked) {
            return null;
        }

        $abilities = $this->getAbilitiesForRole($user->role);

        $token = $user
            ->createToken('auth_token', $abilities)
            ->plainTextToken;

        return [
            'user'  => $user,
            'token' => $token,
        ];
    }

    public function handleSocialLogin(array $data)
    {
        // 1. Vérifier si user existe
        $user = $this->repository->findByGoogleId($data);

        // 2. Si NON → passer par register (logique existante)
        if (!$user) {
                    // Décomposer le name Google en first_name / last_name
        $nameParts = explode(' ', $data['name'] ?? '', 2);
        $firstName = $nameParts[0] ?? 'Utilisateur';
        $lastName  = $nameParts[1] ?? '';


            $user = $this->register([
            'first_name' => $firstName,
            'last_name'  => $lastName,
            'email'      => $data['email'],
                'password' => uniqid(), // password dummy
                'role' => RolesEnum::CLIENT->value,
            ]);

            //  mettre à jour google_id après création
            $user = $this->repository->update($user, [
                'google_id' => $data['google_id']
            ]);
        }

        // 3. Si OUI → update google_id si absent
        if (!$user->google_id) {
            $user = $this->repository->update($user, [
                'google_id' => $data['google_id']
            ]);
        }

        // 4. Générer token avec logique EXISTANTE (abilities incluses)
        $abilities = $this->getAbilitiesForRole($user->role);

        $token = $user
            ->createToken('auth_token', $abilities)
            ->plainTextToken;

        return [
            'user' => $user,
            'token' => $token
        ];
    }

    public function logout(User $user): void
    {
        $user->tokens()->delete();
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function update(User $user, array $data): User
    {
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }
        return $this->repository->update($user, $data);
    }

    public function delete(User $user): bool
    {
        return $this->repository->delete($user);
    }

    /**
     * Bascule l'état de verrouillage (is_locked) d'un utilisateur.
     *
     * @param int $id ID de l'utilisateur
     * @return User|null
     */
    public function toggleLock(int $id): ?User
    {
        $user = $this->repository->find($id);

        if (!$user) {
            return null;
        }

        $wasLocked = $user->is_locked;
        $newStatus = !$user->is_locked;

        $updatedUser = $this->repository->update($user, [
            'is_locked' => $newStatus
        ]);

        // 🔥 Activity log
        activity('user_management')
            ->causedBy(Auth::user())
            ->performedOn($user)
            ->withProperties([
                'user_id' => $user->id,
                'email' => $user->email,
                'locked' => $newStatus,
            ])
            ->log($newStatus ? 'Utilisateur bloqué' : 'Utilisateur débloqué');

        // ✅ EVENT UNIQUEMENT SI DÉBLOCAGE
        if ($wasLocked && !$newStatus) {
            event(new UserUnlocked($updatedUser));
        }

        return $updatedUser;
    }
}
