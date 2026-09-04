# Placeholders de esta rama (sesion-05)

Punto de partida: API REST de tareas completa y probada (Sesión 4) — `TaskController`, `TaskResource` y los 3 feature tests ya resueltos en esta rama. El trabajo de esta sesión es proteger la API con Laravel Sanctum y filtrar las tareas por el usuario autenticado — todavía sin frontend, el backend queda completo por su cuenta.

| Archivo | Qué reemplazar |
|---|---|
| `app/Http/Controllers/Api/AuthController.php` | Los 3 métodos (`register`, `login`, `logout`) |
| `routes/api.php` | Envolver las rutas de `tasks` y `/user` en `Route::middleware('auth:sanctum')->group(...)` |
| `app/Http/Controllers/Api/TaskController.php` | `index()`: usar `$request->user()->tasks` en vez de `Task::all()`. `store()`: asignar `user_id` desde `$request->user()->id` en vez de confiar en el body |

**Nota:** los tests de `tests/Feature/TaskApiTest.php` de la Sesión 4 dejarán de pasar tal cual una vez apliques el middleware `auth:sanctum` (las peticiones de los tests ya no estarán autenticadas). Adaptarlos para autenticar al usuario de prueba con `Sanctum::actingAs($user)` es un paso propio de esta sesión (Paso 4 del instructivo) — no lo dejes para después.

## Comando de arranque

```bash
composer require laravel/sanctum   # si tu proyecto local aún no lo tiene
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan route:list --path=api   # revisa qué rutas quedan detrás de auth:sanctum
```
