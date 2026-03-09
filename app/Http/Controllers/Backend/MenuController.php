<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public static function middleware(): array
    {
        return [
            // examples with aliases, pipe-separated names, guards, etc:
            'permission:menu.index|menu.create|menu.edit|menu.delete|menu.trash',
        ];
    }
    public function index()
    {
        return view('backend.menu.index',[
            'title' => 'Manajemen Menu ',
        ]);
    }
}
