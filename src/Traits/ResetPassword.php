<?php

namespace Joeaziz\LaravelPassportModule\Traits;


use Illuminate\Auth\Passwords\CanResetPassword;
use Joeaziz\LaravelPassportModule\Notifications\ResetPasswordNotification;


trait ResetPassword
{
    use CanResetPassword;

    /**
     * Send the password reset notification.
     *
     * @param string $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

}
