# Placeholders de esta rama (sesion-07)

Punto de partida: TaskFlow integrado de extremo a extremo (Sesión 6) — Sanctum resuelto, rutas protegidas, tests actualizados para autenticar con `Sanctum::actingAs()`. El trabajo de esta sesión es preparar el proyecto para presentarlo: documentación y CI.

| Archivo | Qué reemplazar |
|---|---|
| `docs/README-PROYECTO.md` | Los 4 bloques `{{REEMPLAZAR}}` (descripción, versión de Laravel, pasos de arranque, patrón GoF aplicado) |
| `.github/workflows/tests.yml` | El workflow completo (setup-php, composer install, correr `php artisan test`) |

## Comando de arranque

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan test
```

Los 3 tests de `TaskApiTest` deben seguir en verde — son exactamente lo que el workflow de CI de este paso automatiza.
