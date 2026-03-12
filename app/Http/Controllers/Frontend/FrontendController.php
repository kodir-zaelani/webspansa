<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Post;
use App\Models\Slider;
use App\Models\Video;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.home.index',[
            'sliders' => Slider::published()->latest()->take(8)->get(),
            'featured_news' => Post::with('author','postcategory')->where('headline', 1)->published()->latest()->take(6)->get(),
            'latest_news' => Post::with('author','postcategory')->published()->latest()->take(6)->get(),
            'latest_video' => Video::published()->latest()->take(6)->get(),
            'title' => 'Beranda'
        ]);
    }
    public function contact(){
        return view('frontend.home.contact',[
            'title' => 'Kontak'
        ]);
    }


    public function pagedetail(Request $request, Page $page){
        $this->segment = $request->segment(3);
        $page = Page::published()->where('slug', $this->segment)->first();
        $page->increment('view_count');

        return view('frontend.page.detail',[
            'pages' => Page::published()->where('pagecategory_id', $page->pagecategory_id)->get(),
            'page' => $page,
            'title' => 'Detail Page'
        ]);
    }

    public function video_detail(Request $request, Page $page){
        $this->segment = $request->segment(3);
        $page = Page::published()->where('slug', $this->segment)->first();
        $page->increment('view_count');

        return view('frontend.video.details',[
            'pages' => Page::published()->where('pagecategory_id', $page->pagecategory_id)->get(),
            'page' => $page,
            'title' => 'Detail Video'
        ]);
    }
}