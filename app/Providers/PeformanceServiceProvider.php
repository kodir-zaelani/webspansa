<?php

namespace App\Providers;

use App\Models\Performance;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class PeformanceServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['*'], function ($view) {
        $global_performances = Performance::with('author')->orderBy('published_at', 'desc')->take(4)->get();
            if (!empty($global_performances)) {
                $view->with('global_performances', $global_performances);
            } else {
                $view->with('global_performances', '0');
            }
        });
    }
}
