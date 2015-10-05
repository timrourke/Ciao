<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\ServiceProvider;
use App\Providers\AuthServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        User::creating(function($user){
            if ( $user ) {
                $user->email_confirmation_uuid = AuthServiceProvider::openssl_random_16char();
                return $user;
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
