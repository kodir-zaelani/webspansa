<?php

namespace App\Providers;

use App\Models\Blogcategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class BlogcategoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['*'], function ($view) {
        $blogcategories = Blogcategory::with('blogs')->orderBy('title', 'asc')->get();
            if (!empty($blogcategories)) {
                $view->with('blogcategories', $blogcategories);
            } else {
                $view->with('blogcategories', '0');
            }
        });
    }
}