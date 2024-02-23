<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(\App\Contracts\Admin\AdminServiceInterface::class, \App\Services\Admin\AdminService::class);
        $this->app->bind(\App\Contracts\Members\MembersServiceInterface::class, \App\Services\Members\MembersService::class);
        $this->app->bind(\App\Contracts\Security\SecurityServiceInterface::class, \App\Services\Security\SecurityService::class);
    }
}
