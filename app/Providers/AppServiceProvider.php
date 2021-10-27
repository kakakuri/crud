<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Auth0\Login\Contract\Auth0UserRepository as Auth0UserRepositoryContract; 
use Auth0\Login\Repository\Auth0UserRepository as Auth0UserRepository;

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

        // $this->app->bind(
        //     \Auth0\Login\Contract\Auth0UserRepository::class,
        //     \Auth0\Login\Repository\Auth0UserRepository::class
        // );
        $this->app->bind( Auth0UserRepositoryContract::class, Auth0UserRepository::class ); 
   $this->app->bind( Auth0UserRepositoryContract::class, Auth0UserRepository::class ); 
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
