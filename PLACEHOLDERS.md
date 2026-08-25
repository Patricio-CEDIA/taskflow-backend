# Placeholders de esta rama (sesion-06)

Punto de partida: API REST de tareas completa y probada (Sesión 5) — `TaskController`, `TaskResource` y los 3 feature tests ya resueltos en esta rama. El trabajo de esta sesión es proteger la API con Laravel Sanctum y filtrar las tareas por el usuario autenticado.

| Archivo | Qué reemplazar |
|---|---|
| `app/Http/Controllers/Api/AuthController.php` | Los 3 métodos (`register`, `login`, `logout`) |
| `routes/api.php` | Envolver las rutas de `tasks` y `/user` en `Route::middleware('auth:sanctum')->group(...)` |
| `app/Http/Controllers/Api/TaskController.php` | `index()`: usar `$request->user()->tasks` en vez de `Task::all()`. `store()`: asignar `user_id` desde `$request->user()->id` en vez de confiar en el body |

**Nota:** los tests de `tests/Feature/TaskApiTest.php` de la Sesión 5 dejarán de pasar tal cual una vez apliques el middleware `auth:sanctum` (las peticiones de los tests ya no estarán autenticadas). Adaptarlos para autenticar al usuario de prueba (`Sanctum::actingAs($user)`) es parte del trabajo de esta sesión, aunque no está marcado como placeholder explícito — coméntalo con tu instructor si no llegas a este punto en el tiempo de clase.

## Comando de arranque

```bash
composer require laravel/sanctum   # si tu proyecto local aún no lo tiene
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan route:list --path=api   # revisa qué rutas quedan detrás de auth:sanctum
```
