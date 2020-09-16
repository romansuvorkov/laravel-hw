<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Classes\GetEnvironment;

class EnvironmentInfoServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Classes\GetEnvironment', function ($app) {
            return new GetEnvironment();
        });

        $this->app->singleton('GetEnvironment', function ($app) {
            return new GetEnvironment();
        });
    }
}
