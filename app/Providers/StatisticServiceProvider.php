<?php

namespace App\Providers;

use App\Models\Statistic;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class StatisticServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['*'], function ($view) {
            $global_statistics = Statistic::with('author')->published()->take(6)->get();
            if (!empty($global_statistics)) {
                $view->with('global_statistics', $global_statistics);
            } else {
                $view->with('global_statistics', '0');
            }
        });
    }
}
