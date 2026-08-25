<?php

namespace Tests\Feature;

use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_devuelve_200_con_la_coleccion_de_tareas(): void
    {
        // TODO(sesion-05): crea un usuario con User::factory()->create(), crea 3
        // tareas suyas con Task::factory()->count(3)->for($user)->create(),
        // haz GET a /api/tasks y verifica ->assertStatus(200) y que la
        // respuesta JSON tenga 3 elementos en 'data' (->assertJsonCount(3, 'data')).
        $this->markTestIncomplete('Reemplaza este placeholder en la Sesión 5.');
    }

    public function test_store_con_datos_invalidos_devuelve_422(): void
    {
        // TODO(sesion-05): haz POST a /api/tasks sin el campo 'title' (obligatorio)
        // y verifica ->assertStatus(422).
        $this->markTestIncomplete('Reemplaza este placeholder en la Sesión 5.');
    }

    public function test_store_con_datos_validos_crea_la_tarea_y_devuelve_201(): void
    {
        // TODO(sesion-05): crea un usuario, haz POST a /api/tasks con title y
        // user_id válidos, verifica ->assertStatus(201) y que la tarea exista
        // en la base de datos con $this->assertDatabaseHas('tasks', [...]).
        $this->markTestIncomplete('Reemplaza este placeholder en la Sesión 5.');
    }
}
