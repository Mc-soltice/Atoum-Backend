<?php
/**
 * @OA\Info(
 *     title="API Authentification",
 *     version="1.0.0",
 *     description="API de gestion des utilisateurs et authentification",
 *     @OA\Contact(
 *         email="support@example.com"
 *     )
 * )
 * 
 * @OA\Server(
 *     url="http://localhost:8000/api",
 *     description="Serveur local"
 * )
 * 
 * @OA\Server(
 *     url="https://api.votre-domaine.com",
 *     description="Serveur de production"
 * )
 * 
 * @OA\SecurityScheme(
 *     securityScheme="bearerAuth",
 *     in="header",
 *     name="Authorization",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="JWT"
 * )
 * 
 * @OA\Schema(
 *     schema="User",
 *     type="object",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="first_name", type="string", example="John"),
 *     @OA\Property(property="last_name", type="string", example="Doe"),
 *     @OA\Property(property="phone", type="string", example="+1234567890"),
 *     @OA\Property(property="email", type="string", example="john.doe@example.com"),
 *     @OA\Property(property="is_locked", type="boolean", example=false),
 *     @OA\Property(property="roles", type="array", @OA\Items(type="string", example="admin")),
 *     @OA\Property(property="permissions", type="array", @OA\Items(type="string", example="user.view"))
 * )
 * 
 * @OA\Schema(
 *     schema="LoginRequest",
 *     type="object",
 *     required={"id", "password"},
 *     @OA\Property(property="id", type="string", example="UIS1234"),
 *     @OA\Property(property="password", type="string", example="password123")
 * )
 * 
 * @OA\Schema(
 *     schema="RegisterRequest",
 *     type="object",
 *     required={"first_name", "last_name", "phone", "email", "password"},
 *     @OA\Property(property="first_name", type="string", maxLength=100, example="John"),
 *     @OA\Property(property="last_name", type="string", maxLength=100, example="Doe"),
 *     @OA\Property(property="phone", type="string", maxLength=15, example="+1234567890"),
 *     @OA\Property(property="email", type="string", format="email", example="john.doe@example.com"),
 *     @OA\Property(property="password", type="string", minLength=6, example="password123"),
 *     @OA\Property(property="password_confirmation", type="string", example="password123"),
 *     @OA\Property(property="role", type="string", example="admin", enum={"admin", "agent", "manager", "intendant", "comptable"})
 * )
 * 
 * @OA\Schema(
 *     schema="ToggleLockRequest",
 *     type="object",
 *     required={"id"},
 *     @OA\Property(property="id", type="string", example="1")
 * )
 * 
 * @OA\Tag(
 *     name="Authentification",
 *     description="Gestion des utilisateurs et authentification"
 * )
 * 
 * @OA\Tag(
 *     name="Gestion Utilisateurs",
 *     description="Opérations CRUD sur les utilisateurs"
 * )
 */