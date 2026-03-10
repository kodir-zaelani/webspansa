<?php

namespace App\Providers;

use Bdhabib\LaravelMenu\Facades\LaravelMenu;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewHeadermenuServiceProvider extends ServiceProvider
{
       /**
     * Bootstrap services.
     */
    public function boot(): void
    {
         View::composer(['*'], function ($view) {
            $header_menu = LaravelMenu::getByName('Top Menu');
            if (!empty($header_menu)) {
                $view->with('header_menu', $header_menu);
            } else {
                $view->with('header_menu', '0');
            }
        });
    }
}
