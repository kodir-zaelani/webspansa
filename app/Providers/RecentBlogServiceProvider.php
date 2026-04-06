<?php

namespace App\Providers;

use App\Models\Blog;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class RecentBlogServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['*'], function ($view) {
        $global_recentblog = Blog::with('author', 'blogcategory')->Published()->orderBy('created_at', 'desc')->take(4)->get();
            if (!empty($global_recentblog)) {
                $view->with('global_recentblog', $global_recentblog);
            } else {
                $view->with('global_recentblog', '0');
            }
        });
    }
}
