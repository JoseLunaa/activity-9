# Activity 9 - Sistema de autenticacion con Laravel 7

## Descripcion
Este proyecto fue hecho con Laravel 7. Tiene un sistema de registro e inicio de sesion.
Dependiendo de si el usuario tiene cuenta o no, se muestra una vista diferente.

## Como funciona
- Si el usuario no tiene cuenta, ve la pagina "landingpage" con opciones para registrarse o iniciar sesion.
- Si el usuario ya inicio sesion, puede entrar al "dashboard" con su informacion.
- Un usuario sin cuenta no puede entrar al dashboard directamente, lo manda al login.

## Tecnologias usadas
- Laravel 7
- PHP
- MySQL

## Como instalar
1. Clonar el repositorio
2. Correr composer install
3. Copiar .env.example a .env y configurar la base de datos
4. Correr php artisan key:generate
5. Correr php artisan migrate
6. Correr php artisan serve

## Autor
Jose Guadalupe Luna Luna
Carlos Alberto Perez Burelo
Hector Ariel Lopez Ramos