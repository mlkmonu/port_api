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
        if (!$this->app->runningInConsole()) {
            // Disable automatic migrations during web requests to prevent
            // connection errors when the database is not yet available at
            // application startup (e.g. when using php -S built-in server).
            \Illuminate\Database\Migrations\Migrator::withoutMigrations();
        }
    }
}
