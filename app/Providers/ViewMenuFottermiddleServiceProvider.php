<?php

namespace App\Providers;

use Bdhabib\LaravelMenu\Facades\LaravelMenu;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewMenuFottermiddleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['*'], function ($view) {
            $footer_menumiddle = LaravelMenu::getByName('Footer Middle');
            if (!empty($footer_menumiddle)) {
                $view->with('footer_menumiddle', $footer_menumiddle);
            } else {
                $view->with('footer_menumiddle', '0');
            }
        });
    }
}
