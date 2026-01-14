<?php
namespace App\Modules\Auth\Services;


use App\Modules\Auth\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Modules\Auth\Events\UserUnlocked;
use App\Modules\Auth\Repositories\AuthRepository;

class AuthService
{
    protected $repository;

    public function __construct(AuthRepository $repository)
    {
        $this->repository = $repository;
    }

    public function register(array $data): User
    {
        $data['password'] = Hash::make($data['password']);

        $user = $this->repository->create($data);

        if (isset($data['role'])) {
            $user->assignRole($data['role']);
        }

        return $user->load('roles', 'permissions');
    }

    public function login(array $data): ?array
    {
        // Recherche par l'email
        $user = $this->repository->findByEmail($data['email']);

        if (!$user || !Hash::check($data['password'], $user->password)) {
            if ($user) {
                $attempt = $user->loginAttempt()->firstOrCreate([]);
                $attempt->increment('attempts');
            }
            return null;
        }

        /***** reset les tentatives en cas de succès */
        $user->loginAttempt()->updateOrCreate([], [
            'attempts' => 0,
            'locked_until' => null,
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return [
            'user' => $user,
            'token' => $token,
        ];
    }

    public function logout(User $user): void
    {
        $user->tokens()->delete();
    }

    public function getAll()
    {
        return $this->repository->getAll()->load('roles', 'permissions');
    }

    public function find($id)
    {
        return $this->repository->find($id)->load('roles', 'permissions');
    }

    public function create(array $data): User
    {
        return $this->repository->create($data);
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
            ->causedBy(auth()->user())
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