<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// TODO(sesion-05): envuelve estas rutas en el middleware 'auth:sanctum' —
// Route::middleware('auth:sanctum')->group(function () { ... }) — para que
// solo un usuario autenticado pueda acceder a /api/tasks y /api/user.
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/user', fn (Request $request) => $request->user());
Route::apiResource('tasks', TaskController::class);
