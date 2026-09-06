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
        return TaskResource::collection($request->user()->tasks);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'in:pendiente,en_progreso,completada',
        ]);

        $validated['user_id'] = $request->user()->id;
        $task = Task::create($validated);
        return new TaskResource($task);
    }

    public function show(Request $request, $id)
    {
        $task = $request->user()->tasks()->findOrFail($id);
        return new TaskResource($task);
    }

    public function update(Request $request, $id)
    {
        $task = $request->user()->tasks()->findOrFail($id);

        $validated = $request->validate([
            'title' => 'sometimes|string|max:255',
            'description' => 'nullable|string',
            'status' => 'in:pendiente,en_progreso,completada',
        ]);

        $task->update($validated);
        return new TaskResource($task);
    }

    public function destroy(Request $request, $id)
    {
        $task = $request->user()->tasks()->findOrFail($id);
        $task->delete();
        return response()->json(null, 204);
    }
}
