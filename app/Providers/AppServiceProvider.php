<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
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
        Paginator::useBootstrapFive();

        // Define authorization gates
        Gate::define('super_admin', function ($user) {
            return $user->isSuperAdmin();
        });

        Gate::define('admin', function ($user) {
            return $user->isAdmin();
        });
    }
}
