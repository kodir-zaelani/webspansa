<?php

namespace App\Providers;

use App\Models\Ptk;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class EmployeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['*'], function ($view) {
            $global_ptk = Ptk::take(6)->get();
            if (!empty($global_ptk)) {
                $view->with('global_ptk', $global_ptk);
            } else {
                $view->with('global_ptk', '0');
            }
        });
    }
}
