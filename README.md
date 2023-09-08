<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

За проекта:
Използвани технологии:
Laravel
LiveWIre
Tenancy for laravel
Ajax
Bootsrap

Проекта представлява Login/Register форма с роли на потребителите, като админа създава Tenant база данни за всеки потребител. Потребителя след като се е регистрирал и му е създадена база данни от админа има достъп до TODO list ,информацията от който се записва в отделна tenant база данни за всеки потребител. Всички роутове освен Get методите са премахнати и са използвани livewire и ajax за да ги заместя.За ограничаване на достъпа до админските страници съм използвал middleware.

