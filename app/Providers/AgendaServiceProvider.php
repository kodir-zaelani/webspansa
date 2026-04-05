<?php

namespace App\Providers;

use App\Models\Agenda;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AgendaServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['*'], function ($view) {
            $global_agendas = Agenda::with('author')->published()->latest()->take(4)->get();
            if (!empty($global_agendas)) {
                $view->with('global_agendas', $global_agendas);
            } else {
                $view->with('global_agendas', '0');
            }
        });
    }
}