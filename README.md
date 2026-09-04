# taskflow-backend

Repo de arranque del backend de TaskFlow para el curso *Desarrollo Ágil y Frameworks para Aplicaciones Web*.

## Cómo se usa este repo

Cada rama `sesion-NN` es el punto de partida de la práctica de esa sesión: contiene el código ya construido en la práctica de la sesión **anterior**, más placeholders (`// TODO(sesion-NN): ...` o valores `{{REEMPLAZAR}}`) exactamente en los archivos que esa sesión debe completar. El flujo esperado es:

1. Haz checkout de la rama de tu sesión actual: `git checkout sesion-NN`.
2. Ubica los placeholders documentados más abajo en este README (o busca `TODO(sesion-NN)` con tu editor).
3. Reemplázalos por el código real, siguiendo la práctica de clase o el instructivo correspondiente.
4. Ejecuta y verifica.

**Importante:** este repo no incluye el esqueleto completo de Laravel (carpetas `bootstrap/`, `config/`, `public/`, etc.) — esas las genera el propio framework. Este repo es una **capa superpuesta** con los archivos específicos de TaskFlow. El flujo es:

```bash
composer create-project laravel/laravel taskflow-backend   # Sesión 2, una sola vez
cd taskflow-backend
# copia dentro de esta carpeta los archivos de la rama de tu sesión actual,
# reemplazando los que correspondan (app/, database/, routes/, tests/)
composer install
```

## Ramas disponibles

| Rama | Punto de partida para | Qué agrega/completa esa sesión |
|---|---|---|
| `sesion-02` | Sesión 2 — Arquitectura | Crear el proyecto Laravel (`composer create-project`) y completar `docs/ARQUITECTURA.md` |
| `sesion-03` | Sesión 3 — Patrones GoF | `TaskFactory` (Factory Pattern) y `TaskObserver` (Observer Pattern) |
| `sesion-04` | Sesión 4 — API REST | `TaskController`, `TaskResource` y los feature tests de `tests/Feature/TaskApiTest.php` |
| `sesion-05` | Sesión 5 — Autenticación | `AuthController`, rutas protegidas con Sanctum, filtrado de tareas por usuario, tests adaptados con `Sanctum::actingAs()` |
| `sesion-07` | Sesión 7 — Despliegue | `README.md` final del proyecto y el workflow de CI en `.github/workflows/tests.yml` |

Cada rama se creó a partir de la anterior (`git checkout -b sesion-04 sesion-03`, etc.), así que `git log --oneline` refleja la progresión real de la práctica del curso.
