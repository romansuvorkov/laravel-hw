<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ConfigService;

class EnvironmentInfoServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\ConfigService', function ($app) {
            return new ConfigService();
        });

        $this->app->singleton('ConfigService', function ($app) {
            return new ConfigService();
        });
    }
}
