<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class TugastambahanptkController extends Controller
{
    /**
    * __middleware
    *
    * @return void
    */

    public static function middleware(): array
    {
        return [
            // examples with aliases, pipe-separated names, guards, etc:
            'permission:jabatantugasptk.index|jabatantugasptk.create|jabatantugasptk.edit|jabatantugasptk.delete|jabatantugasptk.trash',
        ];
    }
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(): View
    {
        return view('backend.tugastambahanptk.index', [
            'title' => 'Jenis Tugas Tambahan PTK'
        ]);
    }
}
