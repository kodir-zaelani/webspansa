<?php

namespace App\Providers;

use App\Models\Performance;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class PerformanceServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['*'], function ($view) {
            $global_performances= Performance::with('author')->published()->latest()->take(4)->get();
            if (!empty($global_performances)) {
                $view->with('global_performances', $global_performances);
            } else {
                $view->with('global_performances', '0');
            }
        });
    }
}