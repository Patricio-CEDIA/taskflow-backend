<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // TODO(sesion-05): valida name, email (required|email|unique:users) y
        // password (required|min:8). Crea el usuario con Hash::make() en el
        // password, genera un token con $user->createToken('taskflow')->plainTextToken
        // y responde con el usuario + el token.
    }

    public function login(Request $request)
    {
        // TODO(sesion-05): valida email y password. Busca el usuario por email
        // y verifica el password con Hash::check(). Si no coincide, responde 401.
        // Si coincide, genera un token igual que en register() y responde con él.
    }

    public function logout(Request $request)
    {
        // TODO(sesion-05): revoca el token actual con
        // $request->user()->currentAccessToken()->delete().
    }
}
