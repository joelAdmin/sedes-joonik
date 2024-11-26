<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# API RESTful - Laravel 11

Este proyecto es una API RESTful para gestionar sedes. Prueba Técnica para Desarrollador Full Stack (Senior) - Laravel, React, TypeScript

## Requisitos previos

Asegúrate de tener instalados los siguientes programas antes de continuar:

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)
- [Git](https://git-scm.com/)

## Instalación

Sigue estos pasos para configurar y ejecutar la API:

### 1. Clonar el repositorio

Clona el repositorio del proyecto en tu máquina local:

```bash
git clone https://github.com/joelAdmin/sedes-joonik.git
cd dir_name/backend

#Configuración del entorno .env
    API_KEY=MVcc7aWOQ123456789MVcc7aWOQ
    DB_CONNECTION=mysql
    DB_HOST=db
    DB_PORT=3306
    DB_DATABASE=sedes
    DB_USERNAME=root
    DB_PASSWORD=root

#Instala las dependencias de Laravel
    bash
    composer install

#Construir y ejecutar el proyecto

#Construye los contenedores Docker:
bash
docker-compose up --build

#Ejecuta los contenedores en segundo plano:

bash
docker-compose up -d

# Documentación de la API

## Endpoint: Obtener lista de sedes

### URL
`GET /api/locations`

### Descripción
# sedes-joonik
Prueba Técnica para Desarrollador Full Stack (Senior) - Laravel, React, TypeScript
Este endpoint devuelve una lista de las sedes disponibles. Cada sede incluye los siguientes detalles:

- **code**: El ID único de la sede.
- **name**: El nombre de la sede.
- **image**: Una URL simulada que muestra la imagen representativa de la sede.
- **creationDate**: La fecha de creación de la sede.

### Headers Requeridos
- **X-API-KEY**: Se debe incluir un encabezado `X-API-KEY` con una clave válida para autenticar la solicitud.

### Ejemplo de solicitud en cURL
```bash
curl --location 'http://localhost/api/locations' \
--header 'X-API-KEY: MVcc7aWOQ123456789MVcc7aWOQ'


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
