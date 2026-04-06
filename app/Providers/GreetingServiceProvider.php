<?php

namespace App\Providers;

use App\Models\Greeting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class GreetingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['*'], function ($view) {
        $global_greeting = Greeting::with('author')->orderBy('created_at', 'desc')->take(4)->get();
            if (!empty($global_greeting)) {
                $view->with('global_greeting', $global_greeting);
            } else {
                $view->with('global_greeting', '0');
            }
        });
    }
}
