<?php

namespace App\Providers;

use App\Models\Video;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class VideoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['*'], function ($view) {
        $global_videos = Video::with('author')->orderBy('created_at', 'desc')->take(2)->get();
            if (!empty($global_videos)) {
                $view->with('global_videos', $global_videos);
            } else {
                $view->with('global_videos', '0');
            }
        });
    }
}