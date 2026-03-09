<?php

namespace App\Providers;

use Bdhabib\LaravelMenu\Facades\LaravelMenu;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewTopmenuServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['*'], function ($view) {
            $public_menu = LaravelMenu::getByName('Top Menu');
            if (!empty($public_menu)) {
                $view->with('public_menu', $public_menu);
            } else {
                $view->with('public_menu', '0');
            }
        });
    }
}
