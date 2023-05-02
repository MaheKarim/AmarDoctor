<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;
use App\User;
use App\SiteSettings;

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

        User::deleting(function ($user) {
            $user->Doctor()->delete();
        });



        view()->composer('*', function ($view){
            $settings =SiteSettings::find(1);
            $view->with('settings', $settings);
        });
        Paginator::useBootstrap();
    }
}
