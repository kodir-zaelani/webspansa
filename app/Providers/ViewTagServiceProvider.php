<?php

namespace App\Providers;

use App\Models\Tag;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewTagServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
         View::composer(['*'], function ($view) {
        $tags = Tag::with('posts')->orderBy('title', 'asc')->get();
            if (!empty($tags)) {
                $view->with('tags', $tags);
            } else {
                $view->with('tags', '0');
            }
        });
    }
}