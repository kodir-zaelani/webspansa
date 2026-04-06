<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Greeting;

class GreetingController extends Controller
{
     public function all_greetings(){
        return view('themes.aksataedu.greetings.greeting-all',[
            'greetings' => Greeting::with('author')->published()->latest()->paginate(8),
            'title' => 'Semua Sambutan'
        ]);
    }

    public function greeting_detail($slug, Greeting $greeting) {
        $greeting->increment('view_count');
        $greetings_item =Greeting::with('author')->where('slug', $slug)->first();
        return view('themes.aksataedu.greetings.greeting-details', [
            'item' => $greetings_item,
            'title' => 'Detail Sambutan',
        ]);
    }


}
