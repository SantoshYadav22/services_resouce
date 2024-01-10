<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class OopServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind('App\Service\OopServiceInterface','App\Service\OopService');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
