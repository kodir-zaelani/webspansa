<?php

namespace App\Providers;

use App\Models\Announcement;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AnnouncementServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['*'], function ($view) {
            $global_announcements = Announcement::with('author')->published()->latest()->take(3)->get();
            if (!empty($global_announcements)) {
                $view->with('global_announcements', $global_announcements);
            } else {
                $view->with('global_announcements', '0');
            }
        });
    }
}
