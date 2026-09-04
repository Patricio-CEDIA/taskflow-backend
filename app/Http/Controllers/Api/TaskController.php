<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        // TODO(sesion-05): en vez de Task::all(), devuelve solo las tareas del
        // usuario autenticado: $request->user()->tasks.
        return TaskResource::collection(Task::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'in:pendiente,en_progreso,completada',
        ]);

        // TODO(sesion-05): asigna la tarea al usuario autenticado en vez de
        // confiar en un user_id enviado por el cliente:
        // $validated['user_id'] = $request->user()->id;
        $task = Task::create($validated);
        return new TaskResource($task);
    }

    public function show(Task $task)
    {
        return new TaskResource($task);
    }

    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => 'sometimes|string|max:255',
            'description' => 'nullable|string',
            'status' => 'in:pendiente,en_progreso,completada',
        ]);

        $task->update($validated);
        return new TaskResource($task);
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json(null, 204);
    }
}
