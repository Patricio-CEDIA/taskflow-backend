# Placeholders de esta rama (sesion-03)

Punto de partida: proyecto Laravel ya creado en la Sesión 2, con `docs/ARQUITECTURA.md` completado. Los modelos `User` y `Task` y su migración ya están completos (Active Record, patrón visto en la teoría) — el trabajo de esta sesión son los otros dos patrones GoF.

| Archivo | Qué reemplazar | Patrón GoF |
|---|---|---|
| `database/factories/TaskFactory.php` | El método `definition()` completo (4 valores `{{REEMPLAZAR}}`) | Factory |
| `app/Observers/TaskObserver.php` | El cuerpo del método `updated()` | Observer |
| `app/Providers/AppServiceProvider.php` | El cuerpo de `boot()` (registrar el observer) | — |

## Comando de arranque

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan tinker --execute="Task::factory()->count(10)->create();"
```

Si el `tinker` del último paso falla, es señal de que `TaskFactory::definition()` todavía tiene placeholders sin reemplazar.
