<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Announcement;
use App\Models\Editorial;
use App\Models\Foto;
use App\Models\Greeting;
use App\Models\Page;
use App\Models\Performance;
use App\Models\Post;
use App\Models\Slider;
use App\Models\Video;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('themes.aksataedu.home.index',[
            'sliders' => Slider::published()->latest()->take(8)->get(),
            'greeting' => Greeting ::latest()->take(1)->first(),
            'featured_news' => Post::with('author','postcategory')->where('headline', 1)->published()->latest()->take(12)->get(),
            'latest_news' => Post::with('author','postcategory')->published()->latest()->take(6)->get(),
            'title' => 'Beranda'
        ]);
    }

    public function contact(){
        return view('themes.aksataedu.static.contact',[
            'title' => 'Kontak Kami'
        ]);
    }
    public function about(){
        return view('themes.aksataedu.static.about',[
            'title' => 'Tentang Kami'
        ]);
    }


    public function pagedetail(Request $request, Page $page){
        $this->segment = $request->segment(3);
        $page = Page::published()->where('slug', $this->segment)->first();
        $page->increment('view_count');

        return view('themes.aksataedu.static.page-detail',[
            'pages' => Page::published()->where('pagecategory_id', $page->pagecategory_id)->get(),
            'item' => $page,
            'title' => 'Detail Halaman'
        ]);
    }


    public function announcementdetail(Request $request, Announcement $announcement){
        $this->segment = $request->segment(3);
        $announcement->increment('view_count');

        return view('themes.aksataedu.static.announcement-detail',[
            'item' => Announcement::published()->where('slug', $this->segment)->first(),
            'title' => 'Detail Pengumuman'
        ]);
    }


    public function agendadetail(Request $request, Agenda $agenda){
        $this->segment = $request->segment(3);
        $agenda->increment('view_count');

        return view('themes.aksataedu.static.agenda-detail',[
            // 'agenda' => Agenda::published()->where('slug', $this->segment)->first(),
            'item' => Agenda::published()->where('slug', $this->segment)->first(),
            'title' => 'Detail Agenda'
        ]);
    }

public function all_performance(){
        return view('themes.aksataedu.performance.performance-all',[
            'performances' => Performance::with('author')->published()->latest()->paginate(16),
            'title' => 'Semua Berita'
        ]);
    }


    public function upload(Request $request)
    {
        if($request->hasFile('file')){

            $uploadPath = "uploads/gallery/";

            $file = $request->file('file');

            $extention = $file->getClientOriginalExtension();
            $filename = time().'-'.rand(0,99).'.'.$extention;
            $file->move($uploadPath, $filename);

            $finalImageName = $uploadPath.$filename;

            Gallery::create([
                'image' => $finalImageName
            ]);

            return response()->json(['success' => 'Image Uploaded Successfully']);
        }
        else
        {
            return response()->json(['error' => 'File upload failed.']);
        }
    }

    public function editorialdetail(Request $request){
        $this->segment = $request->segment(3);
        $editorial = Editorial::publish()->where('slug', $this->segment)->first();
        $editorial->increment('view_count');

        return view('frontend.editorial.detail',[
            'editorials' => editorial::publish()->get(),
            'editorial' => $editorial,
            'title' => 'Detail Editorial'
        ]);
    }

    public function editorialall(Request $request){

        return view('frontend.editorial.all',[
            'editorials' => Editorial::Published()
            ->Publishedate()
            ->latest()
            ->paginate($this->limit),
            'title' => 'Semua Editorial'
        ]);
    }



    public function fotoAll()
    {
        return view('frontend.foto.all', [
            'fotos' => Foto::with('album')
            ->latest()
            ->paginate($this->limit),
            'title' => 'Galeri Foto'
        ]);
    }
    public function videoAll()
    {
        return view('frontend.video.all', [
            'videos' => Video::latest()
            ->paginate($this->limit),
            'title' => 'Galeri Video'
        ]);
    }

    public function video_detail(Request $request, Video $video){
        $this->segment = $request->segment(3);
        $video = Video::published()->where('slug', $this->segment)->first();
        $video->increment('view_count');

        return view('frontend.video.details',[
            'videos' => Video::published()->get(),
            'video' => $video,
            'title' => 'Detail Video'
        ]);
    }
}