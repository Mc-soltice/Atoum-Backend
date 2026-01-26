<?php

namespace App\Modules\Auth\Controllers;

use Illuminate\Http\Request;
use App\Modules\Auth\Services\AuthService;
use App\Http\Controllers\Controller;
use App\Modules\Auth\Requests\LoginRequest;
use App\Modules\Auth\Requests\RegisterRequest;
use App\Modules\Auth\Requests\UserRequest;
use App\Modules\Auth\Models\User;
use App\Modules\Auth\Resources\UserResource;

/**
 * @OA\Tag(
 *     name="Authentication",
 *     description="Endpoints pour l'authentification et la gestion des utilisateurs"
 * )
 */
class AuthController extends Controller
{
    protected $service;

    public function __construct(AuthService $service)
    {
        $this->service = $service;
    }

    /**
     * @OA\Post(
     *     path="/api/register",
     *     tags={"Authentication"},
     *     summary="Enregistrer un nouvel utilisateur",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"first_name", "last_name", "phone", "email", "password", "password_confirmation"},
     *             @OA\Property(property="first_name", type="string", example="Jean"),
     *             @OA\Property(property="last_name", type="string", example="Dupont"),
     *             @OA\Property(property="phone", type="string", example="1234567890"),
     *             @OA\Property(property="email", type="string", format="email", example="test@example.com"),
     *             @OA\Property(property="password", type="string", format="password", example="password123"),
     *             @OA\Property(property="password_confirmation", type="string", format="password")
     *         )
     *     ),
     *     @OA\Response(response=200, description="Utilisateur créé")
     * )
     */
    public function register(RegisterRequest $request)
    {
        $user = $this->service->register($request->validated());
        return response()->json(['user' => new UserResource($user)]);
    }

    /**
     * @OA\Post(
     *     path="/api/login",
     *     tags={"Authentication"},
     *     summary="Connexion utilisateur",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"email", "password"},
     *             @OA\Property(property="email", type="string", format="email", example="test@example.com"),
     *             @OA\Property(property="password", type="string", format="password", example="password123")
     *         )
     *     ),
     *     @OA\Response(response=200, description="Connexion réussie"),
     *     @OA\Response(response=401, description="Identifiants invalides")
     * )
     */
    public function login(LoginRequest $request)
    {
        $credentials = $this->service->login($request->validated());
        if (!$credentials)
            return response()->json(['message' => 'Invalid credentials'], 401);
        return response()->json(['user' => new UserResource($credentials['user']), 'token' => $credentials['token']]);
    }

    /**
     * @OA\Post(
     *     path="/api/users/logout",
     *     tags={"Authentication"},
     *     summary="Déconnexion utilisateur",
     *     security={{"sanctum": {}}},
     *     @OA\Response(response=200, description="Déconnexion réussie")
     * )
     */
    public function logout(Request $request)
    {
        $this->service->logout($request->user());
        return response()->json(['message' => 'Logged out successfully']);
    }

    /**
     * @OA\Get(
     *     path="/api/users",
     *     tags={"Users"},
     *     summary="Lister tous les utilisateurs",
     *     security={{"sanctum": {}}},
     *     @OA\Response(response=200, description="Liste des utilisateurs")
     * )
     */
    public function index()
    {
        return UserResource::collection($this->service->getAll());
    }

    /**
     * @OA\Get(
     *     path="/api/users/{user}",
     *     tags={"Users"},
     *     summary="Afficher les détails d'un utilisateur",
     *     security={{"sanctum": {}}},
     *     @OA\Parameter(
     *         name="user",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Détails de l'utilisateur"),
     *     @OA\Response(response=404, description="Utilisateur non trouvé")
     * )
     */
    public function show($id)
    {
        $user = $this->service->find($id);
        return $user ? new UserResource($user) : response()->json(['message' => 'Not found'], 404);
    }

    /**
     * @OA\Patch(
     *     path="/api/users/{user}",
     *     tags={"Users"},
     *     summary="Mettre à jour un utilisateur",
     *     security={{"sanctum": {}}},
     *     @OA\Parameter(
     *         name="user",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         @OA\JsonContent(
     *             @OA\Property(property="first_name", type="string"),
     *             @OA\Property(property="last_name", type="string"),
     *             @OA\Property(property="phone", type="string"),
     *             @OA\Property(property="email", type="string", format="email")
     *         )
     *     ),
     *     @OA\Response(response=200, description="Utilisateur mis à jour")
     * )
     */
    public function update(UserRequest $request, User $user)
    {
        $user = $this->service->update($user, $request->validated());
        return new UserResource($user);
    }


    /**
     * @OA\Delete(
     *     path="/api/users/{user}",
     *     tags={"Users"},
     *     summary="Supprimer un utilisateur",
     *     security={{"sanctum": {}}},
     *     @OA\Parameter(
     *         name="user",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Utilisateur supprimé")
     * )
     */
    public function destroy(User $user)
    {
        $this->service->delete($user);
        return response()->json(['message' => 'Deleted successfully']);
    }


    /**
     * @OA\Patch(
     *     path="/api/users/{user}/toggle-lock",
     *     tags={"Users"},
     *     summary="Bloquer/Débloquer un utilisateur",
     *     security={{"sanctum": {}}},
     *     @OA\Parameter(
     *         name="user",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Statut de l'utilisateur modifié")
     * )
     */
    public function toggleLock(User $user)
    {
        $user = $this->service->toggleLock($user->id);
        if (!$user)
            return response()->json(['message' => 'Utilisateur introuvable'], 404);
        return response()->json(['message' => "Utilisateur {$user->first_name} est maintenant " . ($user->is_locked ? 'bloqué' : 'activé'), 'user' => new UserResource($user)]);
    }


    /**
     * @OA\Get(
     *     path="/api/users/{user}/activity",
     *     tags={"Users"},
     *     summary="Afficher l'historique d'activité d'un utilisateur",
     *     security={{"sanctum": {}}},
     *     @OA\Parameter(
     *         name="user",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Historique d'activité")
     * )
     */
    public function activity(User $user)
    {
        return response()->json($user->activities);
    }
}
