<?php

namespace App\Providers;

use App\Models\Album;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AlbumServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['*'], function ($view) {
        $global_albums = Album::with('author')->orderBy('created_at', 'desc')->take(4)->get();
            if (!empty($global_albums)) {
                $view->with('global_albums', $global_albums);
            } else {
                $view->with('global_albums', '0');
            }
        });
    }
}
