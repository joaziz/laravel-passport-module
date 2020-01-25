# Laravel Passport Module

<p align="center">

[![Latest Stable Version](https://poser.pugx.org/joeaziz/laravel-passport-module/v/stable)](https://packagist.org/packages/joeaziz/laravel-passport-module)
[![Total Downloads](https://poser.pugx.org/joeaziz/laravel-passport-module/downloads)](https://packagist.org/packages/joeaziz/laravel-passport-module)
[![License](https://poser.pugx.org/joeaziz/laravel-passport-module/license)](https://packagist.org/packages/joeaziz/laravel-passport-module)

</p>
## Introduction

Laravel Passport Module is an Library bulit on <a href="https://packagist.org/packages/laravel/passport">Laravel Passport</a>
to rapid create auth controllers and routes

## License

Laravel Passport is open-sourced software licensed under the MIT license

## Install

first make sure you install **laravel passport** then run this commend 
`composer require joeaziz/laravel-passport-module`
and to edit config publish it using `php artisan vendor:publish --tag=lp-config`
## Usage

in `route/api` file put this code `\Joeaziz\LaravelPassportModule\Misc\LaravelPassportRouter::loadRoute();
`
