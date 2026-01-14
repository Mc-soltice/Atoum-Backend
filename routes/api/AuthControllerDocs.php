<?php

namespace App\Modules\Auth\Doc;



/**
 * @OA\Schema(
 *     schema="User",
 *     type="object",
 *     required={"id", "first_name", "last_name", "email", "phone"},
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="first_name", type="string", example="John"),
 *     @OA\Property(property="last_name", type="string", example="Doe"),
 *     @OA\Property(property="email", type="string", format="email", example="john@example.com"),
 *     @OA\Property(property="phone", type="string", example="+1234567890"),
 *     @OA\Property(property="is_locked", type="boolean", example=false),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time"),
 *     @OA\Property(
 *         property="roles",
 *         type="array",
 *         @OA\Items(type="string", example="user")
 *     ),
 *     @OA\Property(
 *         property="permissions",
 *         type="array",
 *         @OA\Items(type="string", example="user.view")
 *     )
 * )
 */

/**
 * @OA\Schema(
 *     schema="UserResource",
 *     type="object",
 *     allOf={
 *         @OA\Schema(ref="#/components/schemas/User")
 *     }
 * )
 */

/**
 * @OA\Schema(
 *     schema="RegisterRequest",
 *     type="object",
 *     required={"first_name", "last_name", "phone", "email", "password", "password_confirmation"},
 *     @OA\Property(property="first_name", type="string", maxLength=100, example="John"),
 *     @OA\Property(property="last_name", type="string", maxLength=100, example="Doe"),
 *     @OA\Property(property="phone", type="string", maxLength=15, example="+1234567890"),
 *     @OA\Property(property="email", type="string", format="email", example="john@example.com"),
 *     @OA\Property(property="password", type="string", format="password", minLength=6, example="password123"),
 *     @OA\Property(property="password_confirmation", type="string", format="password", example="password123"),
 *     @OA\Property(property="role", type="string", enum={"admin", "user", "manager"}, example="user")
 * )
 */

/**
 * @OA\Schema(
 *     schema="LoginRequest",
 *     type="object",
 *     required={"email", "password"},
 *     @OA\Property(property="email", type="string", format="email", example="john@example.com"),
 *     @OA\Property(property="password", type="string", format="password", example="password123")
 * )
 */

/**
 * @OA\Schema(
 *     schema="UpdateUserRequest",
 *     type="object",
 *     @OA\Property(property="first_name", type="string", maxLength=100, example="John"),
 *     @OA\Property(property="last_name", type="string", maxLength=100, example="Doe"),
 *     @OA\Property(property="phone", type="string", maxLength=15, example="+1234567890"),
 *     @OA\Property(property="email", type="string", format="email", example="john@example.com"),
 *     @OA\Property(property="password", type="string", format="password", minLength=6, example="newpassword123"),
 *     @OA\Property(property="password_confirmation", type="string", format="password", example="newpassword123"),
 *     @OA\Property(property="is_locked", type="boolean", example=false)
 * )
 */

/**
 * @OA\Schema(
 *     schema="LoginResponse",
 *     type="object",
 *     @OA\Property(property="user", ref="#/components/schemas/UserResource"),
 *     @OA\Property(property="token", type="string", example="1|randomtoken123...")
 * )
 */

/**
 * @OA\Schema(
 *     schema="ErrorResponse",
 *     type="object",
 *     @OA\Property(property="message", type="string", example="Invalid credentials")
 * )
 */

/**
 * @OA\Schema(
 *     schema="SuccessResponse",
 *     type="object",
 *     @OA\Property(property="message", type="string", example="Operation successful")
 * )
 */

/**
 * @OA\Schema(
 *     schema="ActivitiesResponse",
 *     type="object",
 *     @OA\Property(
 *         property="data",
 *         type="array",
 *         @OA\Items(
 *             type="object",
 *             @OA\Property(property="id", type="integer"),
 *             @OA\Property(property="log_name", type="string"),
 *             @OA\Property(property="description", type="string"),
 *             @OA\Property(property="subject_type", type="string"),
 *             @OA\Property(property="subject_id", type="integer"),
 *             @OA\Property(property="causer_type", type="string"),
 *             @OA\Property(property="causer_id", type="integer"),
 *             @OA\Property(property="properties", type="object"),
 *             @OA\Property(property="created_at", type="string", format="date-time"),
 *             @OA\Property(property="updated_at", type="string", format="date-time")
 *         )
 *     )
 * )
 */

/**
 * @OA\Post(
 *     path="/api/register",
 *     tags={"Authentication"},
 *     summary="Inscription d'un nouvel utilisateur",
 *     description="Créer un nouveau compte utilisateur",
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(ref="#/components/schemas/RegisterRequest")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Inscription réussie",
 *         @OA\JsonContent(
 *             @OA\Property(property="user", ref="#/components/schemas/UserResource")
 *         )
 *     ),
 *     @OA\Response(
 *         response=422,
 *         description="Validation error",
 *         @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *     )
 * )
 */
/**
 * @OA\Post(
 *     path="/api/login",
 *     tags={"Authentication"},
 *     summary="Connexion utilisateur",
 *     description="Authentifier un utilisateur et obtenir un token",
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(ref="#/components/schemas/LoginRequest")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Connexion réussie",
 *         @OA\JsonContent(ref="#/components/schemas/LoginResponse")
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Identifiants invalides",
 *         @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *     )
 * )
 */
/**
 * @OA\Post(
 *     path="/api/users/logout",
 *     tags={"Users"},
 *     summary="Déconnexion",
 *     description="Invalider le token de l'utilisateur actuel",
 *     security={{"bearerAuth": {}}},
 *     @OA\Response(
 *         response=200,
 *         description="Déconnexion réussie",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Logged out successfully")
 *         )
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Non authentifié",
 *         @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *     )
 * )
 */
/**
 * @OA\Get(
 *     path="/api/users",
 *     tags={"Users"},
 *     summary="Liste des utilisateurs",
 *     description="Récupérer la liste de tous les utilisateurs (nécessite la permission 'user.view')",
 *     security={{"bearerAuth": {}}},
 *     @OA\Response(
 *         response=200,
 *         description="Liste des utilisateurs",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(ref="#/components/schemas/UserResource")
 *         )
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Non authentifié",
 *         @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *     ),
 *     @OA\Response(
 *         response=403,
 *         description="Permission refusée",
 *         @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *     )
 * )
 */
/**
 * @OA\Get(
 *     path="/api/users/{id}",
 *     tags={"Users"},
 *     summary="Afficher un utilisateur",
 *     description="Récupérer les détails d'un utilisateur spécifique (nécessite la permission 'user.view')",
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID de l'utilisateur",
 *         @OA\Schema(type="integer", example=1)
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Détails de l'utilisateur",
 *         @OA\JsonContent(ref="#/components/schemas/UserResource")
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Utilisateur non trouvé",
 *         @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *     )
 * )
 */
/**
 * @OA\Put(
 *     path="/api/users/{id}",
 *     tags={"Users"},
 *     summary="Mettre à jour un utilisateur",
 *     description="Modifier les informations d'un utilisateur (nécessite la permission 'user.update')",
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID de l'utilisateur",
 *         @OA\Schema(type="integer", example=1)
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(ref="#/components/schemas/UpdateUserRequest")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Utilisateur mis à jour",
 *         @OA\JsonContent(ref="#/components/schemas/UserResource")
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Utilisateur non trouvé",
 *         @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *     )
 * )
 */
/**
 * @OA\Delete(
 *     path="/api/users/{id}",
 *     tags={"Users"},
 *     summary="Supprimer un utilisateur",
 *     description="Supprimer définitivement un utilisateur (nécessite la permission 'user.delete')",
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID de l'utilisateur",
 *         @OA\Schema(type="integer", example=1)
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Utilisateur supprimé",
 *         @OA\JsonContent(ref="#/components/schemas/SuccessResponse")
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Utilisateur non trouvé",
 *         @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *     )
 * )
 */
/**
 * @OA\Patch(
 *     path="/api/users/{id}/toggle-lock",
 *     tags={"Users"},
 *     summary="Bloquer/Débloquer un utilisateur",
 *     description="Basculer l'état de verrouillage d'un utilisateur (nécessite la permission 'user.toggle-lock')",
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID de l'utilisateur",
 *         @OA\Schema(type="integer", example=1)
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="État modifié",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Utilisateur John est maintenant bloqué"),
 *             @OA\Property(property="user", ref="#/components/schemas/UserResource")
 *         )
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Utilisateur non trouvé",
 *         @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *     )
 * )
 */
/**
 * @OA\Get(
 *     path="/api/users/{id}/activity",
 *     tags={"Users"},
 *     summary="Historique des activités",
 *     description="Récupérer l'historique des activités d'un utilisateur (nécessite la permission 'user.view-activity')",
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID de l'utilisateur",
 *         @OA\Schema(type="integer", example=1)
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Liste des activités",
 *         @OA\JsonContent(ref="#/components/schemas/ActivitiesResponse")
 *     )
 * )
 */
class AuthControllerDocs
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
}
