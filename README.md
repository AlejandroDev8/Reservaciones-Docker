# Reservaciones Tec-NM

## Tabla de Contenidos

- [Reservaciones Tec-NM](#reservaciones-tec-nm)
  - [Tabla de Contenidos](#tabla-de-contenidos)
  - [Descripción](#descripción)
    - [Pre-requisitos 📋](#pre-requisitos-)
    - [Instalación 🔧](#instalación-)
  - [Uso 🚀](#uso-)
  - [Construido con 🛠️](#construido-con-️)
  - [Autores ✒️](#autores-️)

## Descripción

Este es un proyecto hecho para el Tecnológico Nacional de México, campus Ciudad Valles. El proyecto consiste en un sistema de reservaciones para salas, que en este caso son, "El auditorio", "Sala de Ex-Directores" y "Sala Rafael Piña".

El sistema permite a los usuarios registrarse, iniciar sesión, reservar una sala, ver las reservaciones que ha hecho y cancelarlas.

### Pre-requisitos 📋

Para poder correr el proyecto, necesitas tener instalado lo siguiente:

```php
PHP ^8.2
Composer ^2.6.5
Laravel Installer ^5.1.3
```

```js
Node.js ^20.0.0
npm ^10.4.0
```

### Instalación 🔧

Para instalar el proyecto, primero debes clonar el repositorio:

```bash
git clone https://github.com/AlejandroDev8/Reservaciones-Docker.git
```

Después, debes instalar las dependencias de PHP:

```bash
composer install
```

Después, debes instalar las dependencias de Node.js:

```bash
npm install
```

Después, debes copiar el archivo `.env.example` y renombrarlo a `.env`:

```bash
cp .env.example .env
```

Después, debes generar la llave de la aplicación:

```bash
php artisan key:generate
```

Después, debes crear la base de datos, que en este caso se está usando `PostgreSQL` y configurar las credenciales en el archivo `.env`.

Después, debes correr las migraciones:

```bash
php artisan migrate
```

Después, debes correr el servidor:

```bash
php artisan serve
```

Después, debes compilar los assets:

```bash
npm run dev
```

En este caso el proyecto cuenta con envio de correos electrónicos, por lo que debes configurar las credenciales de tu correo en el archivo `.env`.

## Uso 🚀

Una vez que hayas instalado y configurado correctamente todo, puedes correr el servidor y acceder a la aplicación en tu navegador.

```bash
php artisan serve
npm run dev
```

1. Abre tu navegador y ve a <http://localhost:8000> (o la URL que te proporcionó el comando anterior).

2. Regístrate o inicia sesión en la aplicación.

3. Una vez que hayas iniciado sesión, podrás reservar una sala seleccionando la opción 'Solicitar Reservación' en el menú.

4. Para ver tus reservaciones, selecciona 'Mis Solicitudes' en el menú.

5. Si necesitas eliminar una reservación, puedes hacerlo desde la sección 'Mis Solicitudes'.

## Construido con 🛠️

- [Laravel](https://laravel.com/) - El framework web usado.
- [Tailwind CSS](https://tailwindcss.com/) - El framework de CSS usado.
- [Alpine.js](https://alpinejs.dev/) - El framework de JavaScript usado.
- [Livewire](https://laravel-livewire.com/) - El framework de PHP usado.
- [Breeze](https://laravel.com/docs/11.x/starter-kits#laravel-breeze) - El starter kit usado.
- [PostgreSQL](https://www.postgresql.org/) - La base de datos usada.
- [Node.js](https://nodejs.org/) - El entorno de ejecución de JavaScript usado.
- [NPM](https://www.npmjs.com/) - El manejador de paquetes usado.

## Autores ✒️

- **Alejandro Olvera Delgado** - *Desarrollador* - [AlejandroDev8](https://github.com/AlejandroDev8)
- **Xally Martínez Trejo** - *Desarrollador* - [XallyMartinez](https://github.com/20690080xallytrejo)
- **Alexis Ponce González** - *Desarrollador* - [AlexisPonceG](https://github.com/PONCE2602)
