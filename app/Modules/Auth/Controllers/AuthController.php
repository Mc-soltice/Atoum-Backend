<?php

namespace App\Modules\Auth\Controllers;

use Illuminate\Http\Request;
use App\Modules\Auth\Services\AuthService;
use App\Http\Controllers\Controller;
use App\Modules\Auth\Requests\LoginRequest;
use App\Modules\Auth\Resources\UserResource;
use App\Modules\Auth\Requests\RegisterRequest;
use App\Modules\Auth\Requests\UserToggleLockRequest;
use App\Modules\Auth\Requests\UserRequest;
use App\Modules\Auth\Models\User;
use Illuminate\Support\Facades\Log;

/**
 * @OA\Tag(
 *     name="Authentification",
 *     description="Gestion des utilisateurs et authentification"
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
     *     tags={"Authentification"},
     *     summary="Inscription d'un nouvel utilisateur",
     *     description="Créer un nouveau compte utilisateur",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/RegisterRequest")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Utilisateur créé avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="user", ref="#/components/schemas/User")
     *         )
     *     ),
     *     @OA\Response(response=422, description="Erreur de validation")
     * )
     */
    public function register(RegisterRequest $request)
    {
        $user = $this->service->register($request->validated());

        Log::info("✅ Utilisateur {$user->id} créé avec succès");

        return response()->json([
            'user' => new UserResource($user),
        ]);
    }

    /**
     * @OA\Post(
     *     path="/api/login",
     *     tags={"Authentification"},
     *     summary="Connexion d'un utilisateur",
     *     description="Authentifie un utilisateur et retourne un token d'accès",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"email", "password"},
     *             @OA\Property(property="email", type="string", format="email", example="admin@example.com"),
     *             @OA\Property(property="password", type="string", example="password123")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Connexion réussie",
     *         @OA\JsonContent(
     *             @OA\Property(property="user", ref="#/components/schemas/User"),
     *             @OA\Property(property="token", type="string", example="1|abcdefg...")
     *         )
     *     ),
     *     @OA\Response(response=401, description="Identifiants invalides"),
     *     @OA\Response(response=423, description="Compte verrouillé")
     * )
     */
    public function login(LoginRequest $request)
    {
        $credentials = $this->service->login($request->validated());

        if (!$credentials) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        Log::info("✅ Utilisateur {$credentials['user']->id} connecté avec succès");

        return response()->json([
            'user' => new UserResource($credentials['user']),
            'token' => $credentials['token'],
        ]);
    }

    /**
     * @OA\Post(
     *     path="/api/users/logout",
     *     tags={"Authentification"},
     *     summary="Déconnexion de l'utilisateur",
     *     description="Invalide le token de l'utilisateur actuel",
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Déconnexion réussie",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Logged out successfully")
     *         )
     *     ),
     *     @OA\Response(response=401, description="Non authentifié")
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
     *     tags={"Gestion Utilisateurs"},
     *     summary="Lister tous les utilisateurs",
     *     description="Retourne la liste de tous les utilisateurs (nécessite la permission user.view)",
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Liste des utilisateurs",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/User")
     *         )
     *     ),
     *     @OA\Response(response=401, description="Non authentifié"),
     *     @OA\Response(response=403, description="Permission refusée")
     * )
     */
    public function index()
    {
        return UserResource::collection($this->service->getAll());
    }

    /**
     * @OA\Get(
     *     path="/api/users/{id}",
     *     tags={"Gestion Utilisateurs"},
     *     summary="Récupérer un utilisateur spécifique",
     *     description="Retourne les informations d'un utilisateur par son ID",
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID de l'utilisateur",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Utilisateur trouvé",
     *         @OA\JsonContent(ref="#/components/schemas/User")
     *     ),
     *     @OA\Response(response=404, description="Utilisateur non trouvé"),
     *     @OA\Response(response=401, description="Non authentifié"),
     *     @OA\Response(response=403, description="Permission refusée")
     * )
     */
    public function show($id)
    {
        $user = $this->service->find($id);
        return $user ? new UserResource($user) : response()->json(['message' => 'Not found'], 404);
    }

    /**
     * @OA\Put(
     *     path="/api/users/{id}",
     *     tags={"Gestion Utilisateurs"},
     *     summary="Mettre à jour un utilisateur",
     *     description="Met à jour les informations d'un utilisateur (nécessite la permission user.update)",
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID de l'utilisateur",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="first_name", type="string", maxLength=100, example="John"),
     *             @OA\Property(property="last_name", type="string", maxLength=100, example="Doe"),
     *             @OA\Property(property="phone", type="string", maxLength=15, example="+1234567890"),
     *             @OA\Property(property="email", type="string", format="email", example="john.doe@example.com"),
     *             @OA\Property(property="password", type="string", minLength=6, nullable=true, example="newpassword123")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Utilisateur mis à jour",
     *         @OA\JsonContent(ref="#/components/schemas/User")
     *     ),
     *     @OA\Response(response=422, description="Erreur de validation"),
     *     @OA\Response(response=401, description="Non authentifié"),
     *     @OA\Response(response=403, description="Permission refusée")
     * )
     */
    public function update(UserRequest $request, User $user)
    {
        $user = $this->service->update($user, $request->validated());
        return new UserResource($user);
    }

    /**
     * @OA\Delete(
     *     path="/api/users/{id}",
     *     tags={"Gestion Utilisateurs"},
     *     summary="Supprimer un utilisateur",
     *     description="Supprime un utilisateur (nécessite la permission user.delete)",
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID de l'utilisateur",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Utilisateur supprimé",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Deleted successfully")
     *         )
     *     ),
     *     @OA\Response(response=401, description="Non authentifié"),
     *     @OA\Response(response=403, description="Permission refusée")
     * )
     */
    public function destroy(User $user)
    {
        $this->service->delete($user);
        return response()->json(['message' => 'Deleted successfully']);
    }

    /**
     * @OA\Patch(
     *     path="/api/users/{id}/toggle-lock",
     *     tags={"Gestion Utilisateurs"},
     *     summary="Bloquer/Débloquer un utilisateur",
     *     description="Bascule l'état de verrouillage d'un utilisateur (nécessite la permission user.toggle-lock)",
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID de l'utilisateur",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="État modifié avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Utilisateur John Doe est maintenant bloqué"),
     *             @OA\Property(property="user", ref="#/components/schemas/User")
     *         )
     *     ),
     *     @OA\Response(response=404, description="Utilisateur non trouvé"),
     *     @OA\Response(response=401, description="Non authentifié"),
     *     @OA\Response(response=403, description="Permission refusée")
     * )
     */
    public function toggleLock(User $user) // Suppression du UserToggleLockRequest
    {
        // Appel au service pour switcher l'état en utilisant l'ID de l'utilisateur
        $user = $this->service->toggleLock($user->id);

        // Si utilisateur introuvable
        if (!$user) {
            return response()->json(['message' => 'Utilisateur introuvable'], 404);
        }

        // Détermination du statut actuel
        $status = $user->is_locked ? 'bloqué' : 'activé';

        // Réponse finale
        return response()->json([
            'message' => "Utilisateur {$user->first_name} {$user->last_name} est maintenant {$status}",
            'user' => new UserResource($user),
        ]);
    }

    /**
     * @OA\Get(
     *     path="/api/users/{id}/activity",
     *     tags={"Gestion Utilisateurs"},
     *     summary="Récupérer l'historique d'activité",
     *     description="Retourne l'historique d'activité d'un utilisateur (nécessite la permission user.view-activity)",
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID de l'utilisateur",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Historique d'activité",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(
     *                 @OA\Property(property="id", type="integer"),
     *                 @OA\Property(property="log_name", type="string"),
     *                 @OA\Property(property="description", type="string"),
     *                 @OA\Property(property="subject_type", type="string"),
     *                 @OA\Property(property="subject_id", type="integer"),
     *                 @OA\Property(property="causer_type", type="string"),
     *                 @OA\Property(property="causer_id", type="integer"),
     *                 @OA\Property(property="properties", type="object"),
     *                 @OA\Property(property="created_at", type="string", format="date-time")
     *             )
     *         )
     *     ),
     *     @OA\Response(response=401, description="Non authentifié"),
     *     @OA\Response(response=403, description="Permission refusée")
     * )
     */
    public function activity(User $user)
    {
        return response()->json($user->activities);
    }
}