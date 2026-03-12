<?php

namespace App\Providers;

use Bdhabib\LaravelMenu\Facades\LaravelMenu;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewMenuFotterleftServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['*'], function ($view) {
            $footer_menuleft = LaravelMenu::getByName('Footer Left');
            if (!empty($footer_menuleft)) {
                $view->with('footer_menuleft', $footer_menuleft);
            } else {
                $view->with('footer_menuleft', '0');
            }
        });
    }
}
