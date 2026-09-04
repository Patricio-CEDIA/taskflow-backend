# Placeholders de esta rama (sesion-04)

Punto de partida: modelos, migración, `TaskFactory` y `TaskObserver` de la Sesión 3 ya completos (puedes verlos resueltos en esta rama). El trabajo de esta sesión es construir la API REST de tareas y probarla — con pruebas automatizadas, no solo con Postman.

| Archivo | Qué reemplazar |
|---|---|
| `app/Http/Controllers/Api/TaskController.php` | El cuerpo de los 5 métodos (`index, store, show, update, destroy`) |
| `app/Http/Resources/TaskResource.php` | El array de retorno de `toArray()` |
| `tests/Feature/TaskApiTest.php` | Los 3 métodos de test (quita `markTestIncomplete` al completarlos) |

`routes/api.php` ya está listo — no requiere cambios, solo verificación.

## Comando de arranque

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan route:list --path=tasks   # deben verse las 5 rutas del recurso
php artisan test tests/Feature/TaskApiTest.php
```

Los 3 tests deben pasar en verde una vez reemplazados los placeholders del controlador, el resource y el propio archivo de test.
