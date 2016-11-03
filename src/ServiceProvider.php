<?php

namespace LAIS\Socialite\Sabia;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Laravel\Socialite\Facades\Socialite;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Socialite::extend('sabia', function($app) {
            return Socialite::buildProvider(
                '\LAIS\Socialite\Sabia\Provider',
                $app['config']['services.sabia']
            );
        });
    }
}
