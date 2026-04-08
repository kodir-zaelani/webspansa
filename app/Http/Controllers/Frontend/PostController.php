<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Postcategory;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
     public function all_news(){
        return view('themes.aksataedu.post.news-all',[
            'all_news' => Post::with('author','postcategory')->published()->latest()->paginate(16),
            'title' => 'Semua Berita'
        ]);
    }

    public function news_detail($slug, Post $post) {
        $post->increment('view_count');
        $post_item =Post::with('postcategory', 'tags', 'author')->where('slug', $slug)->first();
        $postcategories = Postcategory::with('posts')->where('id', '!=', $post_item->postcategory_id)->get();
        return view('themes.aksataedu.post.news-details', [
            'item' => $post_item,
            'postcategories' => $postcategories,
            'title' => 'Detail Berita',
        ]);
    }

    public function news_category(Request $request) {
        $this->segment = $request->segment(3);
        $postcategory = Postcategory::where('slug', $this->segment)->first();
        return view('themes.aksataedu.post.all-news-category', [
            'all_news' => Post::with('postcategory', 'tags', 'author')->where('postcategory_id', $postcategory->id)->paginate(6),
            'title' => 'Kategori Berita'
        ]);
    }
    public function news_tag(Request $request) {
        $this->segment = $request->segment(3);
        $tag = Tag::where('slug', $this->segment)->first();
        $posts =$tag->posts()
                ->with('postcategory', 'author')
                ->latest()
                ->published()
                ->paginate(10);
        return view('themes.aksataedu.post.all-news-tags', [
            'all_news' => $posts,
            'tag_name' => $tag->title,
            'title' => 'Tag Berita'
        ]);
    }

    public function news_author(Request $request) {
        $this->segment = $request->segment(3);
        $author = User::where('id', $this->segment)->first();
        $posts =$author->posts()
                ->with('postcategory', 'author')
                ->latest()
                ->published()
                ->paginate(10);
        return view('themes.aksataedu.post.all-news-author', [
            'all_news' => $posts,
            'author_name' => $author->name,
            'title' => 'Penulis Berita'
        ]);
    }

    public function news_search(Request $request) {

        $term = $request->search;

        if ($request->has('search')) {

        $posts = Post::when($term, function ($query, $term) {
            $query->where('title', 'like', '%' . $term . '%')
                ->orWhere('content', 'like', '%' . $term . '%')
                ->orWhereHas('author', function ($q) use ($term) {
                    $q->where('name', 'like', '%' . $term . '%');
                })
                ->orWhereHas('postcategory', function ($q) use ($term) {
                    $q->where('title', 'like', '%' . $term . '%');
                })
                ->orWhereHas('tags', function ($q) use ($term) {
                    $q->where('title', 'like', '%' . $term . '%');
                });
        })->with('postcategory', 'author')->published()->paginate(10);
        }

        return view('frontend.post.all-news-search', [
            'newssearch' => $posts,
            'term' => $term,
            'title' => 'Hasil Pencarian'
        ]);
    }
}
