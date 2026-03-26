<?php
namespace Bdhabib\LaravelMenu\Facades;
use Illuminate\Support\Facades\Facade;

class LaravelMenu extends Facade {
    /**
     * @see \Bdhabib\LaravelMenu\WMenu
     *
     * Return facade accessor
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-menu';
    }
}
