<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        // TODO(sesion-05): retorna un array con los campos id, title, description,
        // status, user_id, y created_at formateado como 'Y-m-d H:i'
        // (pista: $this->created_at->format('Y-m-d H:i')).
        return [
            //
        ];
    }
}
