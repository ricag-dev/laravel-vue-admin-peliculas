<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## App Laravel Listado de películas

Se requiere tener preinstalado Docker, PHP 8, Composer y NodeJs

- [Docker](https://docs.docker.com/engine/install/).
- [Composer](https://getcomposer.org).
- [NodeJs](nodejs.org).


## Correr docker en linux/macos terminal

Iniciar ir a la carpeta y correr

    ./iniciar.sh

## Correr docker en windows

Iniciar ir a la carpeta y correr en CMD
    
    composer install
    npm install
    ./vendor/bin/sail up -d
    ./vendor/bin/sail artisan migrate
    ./vendor/bin/sail artisan storage:link
    ./vendor/bin/sail composer install
    ./vendor/bin/sail npm run dev



## Cerrar app
    ./vendor/bin/sail down

## Abrir Browser

Abrir el browser en la dirección http://0.0.0.0/
