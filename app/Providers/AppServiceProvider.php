<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repository\Contracts\ICarRepository',
            'App\Repository\CarRepository'
        );
        $this->app->bind(
            'App\Service\Contracts\ICarService',
            'App\Service\CarService'
        );
    }
}
