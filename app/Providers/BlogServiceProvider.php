<?php

namespace App\Providers;

use App\Models\Blog;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['*'], function ($view) {
        $global_blog = Blog::with('author','blogcategory')->orderBy('published_at', 'desc')->take(4)->get();
            if (!empty($global_blog)) {
                $view->with('global_blog', $global_blog);
            } else {
                $view->with('global_blog', '0');
            }
        });
    }
}
