<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
     public function all_news(){
        return view('frontend.post.all-news',[
            'all_news' => Post::with('author','postcategory')->published()->latest()->paginate(16),
            'title' => 'Semua Berita'
        ]);
    }

    public function news_detail($slug, Post $post) {

        $post->increment('view_count');

        return view('frontend.post.news-details', [
            'item' => Post::with('postcategory', 'tags', 'author')->where('slug', $slug)->first(),
            'title' => 'Detail Berita'
        ]);
    }
}
