<?php

namespace App\Providers;

use App\Models\Post;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class RecentNewsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['*'], function ($view) {
        $global_recentposts = Post::with('author', 'postcategory')->Published()->orderBy('created_at', 'desc')->take(5)->get();
            if (!empty($global_recentposts)) {
                $view->with('global_recentposts', $global_recentposts);
            } else {
                $view->with('global_recentposts', '0');
            }
        });
    }
}
