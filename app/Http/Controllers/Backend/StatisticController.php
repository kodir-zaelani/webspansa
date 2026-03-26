<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class StatisticController extends Controller
{
     /**
    * __construct
    *
    * @return void
    */

     public static function middleware(): array
    {
        return [
            'permission:statistic.index|statistic.create|statistic.edit|statistic.delete|statistic.trash',
        ];
    }

    public function index()
    {
        return view('backend.statistic.index');
    }
}