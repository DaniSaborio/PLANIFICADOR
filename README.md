<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


# Sistema de Gestión de Proyectos en Línea

Este proyecto es una aplicación web para la gestión de proyectos, desarrollada como parte del curso de **Computación en la Nube** de la Universidad Técnica Nacional (UTN). [cite_start]La aplicación permite a los usuarios crear proyectos, asignar tareas, y monitorear el progreso en tiempo real.

El sistema está construido con **Laravel 11** para el backend y **Filament 3** para el panel de administración, y está desplegado en **Microsoft Azure**.

**URL de la aplicación en producción:** [https://planificador.azurewebsites.net/](https://planificador.azurewebsites.net/) *(Ejemplo, reemplaza con tu URL)*

---

## Características Implementadas

* [cite_start]**Gestión de Proyectos (CRUD):** Creación, lectura, actualización y eliminación de proyectos[cite: 41].
* [cite_start]**Gestión de Tareas (CRUD):** Creación, lectura, actualización y eliminación de tareas asociadas a un proyecto[cite: 42].
* [cite_start]**Asignación de Recursos:** Posibilidad de asignar tareas a diferentes usuarios registrados en el sistema[cite: 43].
* [cite_start]**Seguimiento de Progreso:** Sistema de estados (`Pendiente`, `En Progreso`, `Completada`) para tareas y proyectos[cite: 44].
* [cite_start]**Visualización de Avance:** Una barra de progreso en la lista de proyectos que calcula el porcentaje de tareas completadas en tiempo real[cite: 52].
* [cite_start]**Búsqueda y Filtros:** Funcionalidad para buscar y filtrar proyectos y tareas por nombre o estado[cite: 51].

---

## Tecnologías Utilizadas

* **Backend:** PHP 8.2, Laravel 11
* **Frontend / UI:** Filament 3 (Livewire, Blade, Tailwind CSS)
* **Base de Datos:** PostgreSQL
* **Control de Versiones:** Git, GitHub
* **Plataforma de Despliegue:** Microsoft Azure (App Service + Azure DB for PostgreSQL)

---

## Instalación y Ejecución en Local

Sigue estos pasos para ejecutar el proyecto en tu entorno de desarrollo local.

1.  **Clonar el repositorio:**
    ```bash
    git clone [https://github.com/](https://github.com/)<tu-usuario>/<tu-repositorio>.git
    cd <nombre-del-repositorio>
    ```

2.  **Instalar dependencias de Composer:**
    ```bash
    composer install
    ```

3.  **Crear y configurar el archivo de entorno:**
    ```bash
    cp .env.example .env
    ```
    Abre el archivo `.env` y configura tus variables, especialmente la conexión a tu base de datos local.

4.  **Generar la llave de la aplicación:**
    ```bash
    php artisan key:generate
    ```

5.  **Ejecutar las migraciones de la base de datos:**
    ```bash
    php artisan migrate
    ```

6.  **Crear un usuario administrador:**
    ```bash
    php artisan make:filament-user
    ```
    Sigue las instrucciones en la consola para crear tu primer usuario.

7.  **Iniciar el servidor de desarrollo:**
    ```bash
    php artisan serve
    ```

8.  Abre tu navegador y ve a `http://127.0.0.1:8000/admin` para iniciar sesión.
