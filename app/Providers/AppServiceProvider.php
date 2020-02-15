<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //  custom blade directive
        Schema::defaultStringLength(191);

        // Blade Function
        Blade::if('admin', function () {
        return auth()->check() && auth()->user()->role == 1;
        });
        // Blade::if('doctor', function () {
        //     return auth()->check() && auth()->user()->role == 2;
        //         });
        // Blade::if('nurse', function () {
        //     return auth()->check() && auth()->user()->role == 3;
        //         });
        // Blade::if('user', function () {
        //     return auth()->check() && auth()->user()->role == 4;
        //         });
    }
}
