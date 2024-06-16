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

Docker y Docker Desktop

```bash
Docker ^26.1.1
Docker Desktop ^4.31.1
```

Wsl en su versión 2

```bash
wsl2
```

```php
PHP ^8.3.8
Composer ^2.7.7
Laravel Installer ^5.1.3
```

```js
Node.js ^22.3.0
npm ^10.8.1
```

### Instalación 🔧

Para instalar el proyecto, primero debes clonar el repositorio en wsl2, para ello, ejecuta el siguiente comando:

```bash
git clone https://github.com/AlejandroDev8/Reservaciones-Docker.git
```

**Nota:** Si no quieres escribir el comando completo de `./vendor/bin/sail`, puedes crear un alias en tu archivo `.~/bashrc` o `.~/zshrc`:

```bash
alias sail='./vendor/bin/sail'
```

Y ya con ese alias, puedes ejecutar los comandos de sail de la siguiente manera:

```bash
sail [comando]
```

Ya que tengas el repositorio clonado, debes entrar a la carpeta del proyecto:

```bash
cd Reservaciones-Docker
```

Después inicializa Docker Desktop.

Una vez que Docker Desktop esté corriendo, ejecuta el siguiente comando para instalar las dependencias de PHP:

```bash

./vendor/bin/sail composer install

# o en su defecto si creaste el alias, sería de la siguiente manera

sail composer install
```

Después, ejecuta el siguiente comando para instalar las dependencias de Node.js:

```bash
./vendor/bin/sail npm install

# o en su defecto si creaste el alias, sería de la siguiente manera

sail npm install
```

Ya que tengas todas las dependencias instaladas, ejecuta el siguiente comando para copiar el archivo .env.example a .env:

```bash
cp .env.example .env
```

En este caso se está usando una base de datos en `MySQL`, por lo que debes configurar las variables de entorno en el archivo `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=reservaciones
DB_USERNAME=sail [Este es el usuario por defecto en docker]
DB_PASSWORD=password [Este es la contraseña por defecto en docker]
```

Ya que tengas configurado el archivo `.env`, ejecuta el siguiente comando para generar la llave de la aplicación:

```bash
./vendor/bin/sail artisan key:generate

# o en su defecto si creaste el alias, sería de la siguiente manera

sail artisan key:generate
```

Después, ejecuta el siguiente comando para correr las migraciones y los seeders:

```bash
./vendor/bin/sail artisan migrate --seed

# o en su defecto si creaste el alias, sería de la siguiente manera

sail artisan migrate --seed
```

Finalmente, ejecuta el siguiente comando para correr el proyecto:

```bash
./vendor/bin/sail up

# o en su defecto si creaste el alias, sería de la siguiente manera

sail up
```

Y para que puedas ver los estilos correctamente, ejecuta el siguiente comando:

```bash
./vendor/bin/sail npm run dev

# o en su defecto si creaste el alias, sería de la siguiente manera

sail npm run dev
```

Cuando quierás terminar la ejecución del proyecto, ejecuta el siguiente comando:

```bash
./vendor/bin/sail down

# o en su defecto si creaste el alias, sería de la siguiente manera

sail down
```
