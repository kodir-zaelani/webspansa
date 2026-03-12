<?php

namespace App\Providers;

use Bdhabib\LaravelMenu\Facades\LaravelMenu;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewMenuFotterrightServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['*'], function ($view) {
            $footer_right = LaravelMenu::getByName('Footer Right');
            if (!empty($footer_right)) {
                $view->with('footer_right', $footer_right);
            } else {
                $view->with('footer_right', '0');
            }
        });
    }
}