<?php

namespace Bdhabib\LaravelMenu;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class LaravelMenuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadRoutesFrom(__DIR__ . '/routes.php');

        $this->loadViewsFrom(__DIR__ . '/Views', 'laravel-menu');

        $this->publishes([
            __DIR__ . '/../config/menu.php'  => config_path('menu.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/../resources/views'   => resource_path('views/vendor/laravel-menu'),
        ]);

        $this->publishes([
            __DIR__ . '/../assets' => public_path('vendor/laravel-menu'),
        ], 'public');

        $this->publishesMigrations([
            __DIR__ . '/../database/migrations' => database_path('migrations'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('laravel-menu', function () {
            return new WMenu();
        });

        $this->app->make('Bdhabib\LaravelMenu\Controllers\MenuController');
        $this->mergeConfigFrom(
            __DIR__ . '/../config/menu.php',
            'menu'
        );
    }
}
