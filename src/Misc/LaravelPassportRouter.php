<?php


namespace Joeaziz\LaravelPassportModule\Misc;


use Illuminate\Support\Facades\Route;

class LaravelPassportRouter
{
    public static function loadRoute()
    {
        Route::group(
            [
                "prefix" => config("laravel_password.route_prefix"),
                "namespace" => "\Joeaziz\LaravelPassportModule\Controllers"
            ],
            function () {
                Route::post("login", "PassportAuthController@login");
                if (config("laravel_password.enable_registration")) {
                    Route::post("register", "PassportAuthController@register");
                }
                Route::post("reset-password", "ResetPasswordController@reset");
                Route::post("forget-password", "ForgetPasswordController@sendResetLinkEmail");
            });
    }

}
