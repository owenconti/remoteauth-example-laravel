<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use RemoteAuth\RemoteAuth;
use App\User;

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
        RemoteAuth::setUserModel(User::class);
        RemoteAuth::registerRoutes();
    }
}
