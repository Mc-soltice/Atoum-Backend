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

class AuthController extends Controller
{
    protected $service;

    public function __construct(AuthService $service)
    {
        $this->service = $service;
    }


    public function register(RegisterRequest $request)
    {
        $user = $this->service->register($request->validated());
        return response()->json(['user' => new UserResource($user)]);
    }


    public function login(LoginRequest $request)
    {
        $credentials = $this->service->login($request->validated());
        if (!$credentials)
            return response()->json(['message' => 'Invalid credentials'], 401);
        return response()->json(['user' => new UserResource($credentials['user']), 'token' => $credentials['token']]);
    }


    public function logout(Request $request)
    {
        $this->service->logout($request->user());
        return response()->json(['message' => 'Logged out successfully']);
    }


    public function index()
    {
        return UserResource::collection($this->service->getAll());
    }


    public function show($id)
    {
        $user = $this->service->find($id);
        return $user ? new UserResource($user) : response()->json(['message' => 'Not found'], 404);
    }

    public function update(UserRequest $request, User $user)
    {
        $user = $this->service->update($user, $request->validated());
        return new UserResource($user);
    }


    public function destroy(User $user)
    {
        $this->service->delete($user);
        return response()->json(['message' => 'Deleted successfully']);
    }


    public function toggleLock(User $user)
    {
        $user = $this->service->toggleLock($user->id);
        if (!$user)
            return response()->json(['message' => 'Utilisateur introuvable'], 404);
        return response()->json(['message' => "Utilisateur {$user->first_name} est maintenant " . ($user->is_locked ? 'bloqué' : 'activé'), 'user' => new UserResource($user)]);
    }


    public function activity(User $user)
    {
        return response()->json($user->activities);
    }
}
