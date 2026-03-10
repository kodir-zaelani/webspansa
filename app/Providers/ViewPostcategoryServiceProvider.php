<?php

namespace App\Providers;

use App\Models\Postcategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewPostcategoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['*'], function ($view) {
        $postcategories = Postcategory::with('posts')->orderBy('title', 'asc')->get();
            if (!empty($postcategories)) {
                $view->with('postcategories', $postcategories);
            } else {
                $view->with('postcategories', '0');
            }
        });
    }
}