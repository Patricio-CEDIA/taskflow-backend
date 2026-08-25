<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        // TODO(sesion-05): devuelve todas las tareas usando TaskResource::collection().
    }

    public function store(Request $request)
    {
        // TODO(sesion-05): valida los datos ($request->validate([...])) con las reglas:
        // title (required|string|max:255), description (nullable|string),
        // status (in:pendiente,en_progreso,completada), user_id (required|exists:users,id).
        // Luego crea la tarea con Task::create() y responde con new TaskResource($task).
    }

    public function show(Task $task)
    {
        // TODO(sesion-05): responde con new TaskResource($task).
    }

    public function update(Request $request, Task $task)
    {
        // TODO(sesion-05): valida los datos igual que en store() pero con "sometimes"
        // en vez de "required", actualiza la tarea con $task->update() y responde
        // con new TaskResource($task).
    }

    public function destroy(Task $task)
    {
        // TODO(sesion-05): elimina la tarea con $task->delete() y responde
        // con response()->json(null, 204).
    }
}
