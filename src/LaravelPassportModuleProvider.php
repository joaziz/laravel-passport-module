<?php

namespace Joeaziz\LaravelPassportModule;

use Illuminate\Support\ServiceProvider;
use Joeaziz\LaravelPassportModule\Misc\LaravelPassportRouter;

class LaravelPassportModuleProvider extends ServiceProvider
{
    /**TodolistServiceProvider
     * Register services.
     *
     * @return void
     */
    public function register()
    {
//        LaravelPassportRouter::loadRoute();
        $this->publishes([
            __DIR__ . '/Configs/laravel_password.php' => config_path('laravel_password.php'),
        ],["config","lp-config"]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
