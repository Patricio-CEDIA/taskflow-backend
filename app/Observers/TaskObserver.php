<?php

namespace App\Observers;

use App\Models\Task;
use Illuminate\Support\Facades\Log;

class TaskObserver
{
    public function updated(Task $task): void
    {
        // TODO(sesion-03): si el campo "status" cambió, registra un log simple
        // con Log::info() indicando el id de la tarea, el estado anterior y el
        // nuevo estado. Pista: $task->wasChanged('status') y $task->getOriginal('status').
    }
}
