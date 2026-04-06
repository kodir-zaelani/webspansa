<?php

namespace App\Providers;

use App\Models\Post;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class NewNewsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['*'], function ($view) {
        $global_post = Post::with('author','postcategory')->orderBy('published_at', 'desc')->paginate(8);
            if (!empty($global_post)) {
                $view->with('global_post', $global_post);
            } else {
                $view->with('global_post', '0');
            }
        });
    }
}