<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Blogcategory;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    protected $limit = 6;
    public function index()
    {
        return view('themes.aksataedu.blog.blog-all', [
            'blogs' => Blog::with('blogcategory', 'tags', 'author')
            ->Published()
            ->Publishedate()
            ->latest()
            ->paginate($this->limit),
            'title' => 'Semua Blog'
        ]);
    }

    public function detail($slug, Blog $blog) {

        $blog->increment('view_count');

        return view('themes.aksataedu.blog.blog-detail', [
            'item' => Blog::with('blogcategory', 'tags', 'author')->where('slug', $slug)->first(),
            'title' => 'Blog Detail'
        ]);
    }

    public function blog_category(Request $request) {
        $this->segment = $request->segment(3);
        $blogcategory = Blogcategory::where('slug', $this->segment)->first();
        $blogs = $blogcategory->blogs()
        ->published()
        ->publishedate()
        ->paginate($this->limit);


        return view('frontend.blog.blog-category', [
            'blogs' => $blogs,
            'blogcategory' => $blogcategory,
            'title' => 'Blog Category'
        ]);
    }

    public function news_tag(Request $request) {
        $this->segment = $request->segment(3);
        $tag = Tag::where('slug', $this->segment)->first();
        $blogs =$tag->blogs()
                ->with('blogcategory', 'author')
                ->latest()
                ->published()
                ->paginate(10);
        return view('frontend.blog.all-blog-tags', [
            'newstag' => $blogs,
            'tag_name' => $tag->title,
            'title' => 'Tag Berita'
        ]);
    }

    public function news_author(Request $request) {
        $this->segment = $request->segment(3);
        $author = User::where('id', $this->segment)->first();
        $blogs =$author->blogs()
                ->with('blogcategory', 'author')
                ->latest()
                ->published()
                ->paginate(10);
        return view('frontend.blog.all-blog-author', [
            'newsauthor' => $blogs,
            'author_name' => $author->name,
            'title' => 'Penulis Berita'
        ]);
    }
}
