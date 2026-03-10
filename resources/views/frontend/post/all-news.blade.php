@extends('layouts.front')
@section('title', $title ?? 'Beranda')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <section id="category-section" class="category-section section">


                <div class="container section-title" data-aos="fade-up">
                    <h2>Semua Berita</h2>
                </div>

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row">
                        @foreach ($all_news as $item)
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <article class="list-post">
                                <div class="post-img">
                                    <img src="{{$item->imageUrl}}" alt="" class="img-fluid" loading="lazy">
                                </div>
                                <div class="post-content">
                                    <div class="category-meta">
                                        <span class="post-category">{{$item->postcategory->title}}</span>
                                    </div>
                                    <h3 class="title">
                                        <a href="blog-details.html">{{Str::limit($item->title, 40)}}</a>
                                    </h3>
                                    <div class="post-meta">
                                        {{-- <span class="read-time">2 mins read</span> --}}
                                        <span class="post-date">{{ \Carbon\Carbon::parse($item->created_at)->format('j F Y') }}</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        @endforeach
                    </div>
                </div>

            </section>



            <section id="pagination-2" class="pagination-2 section">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        {{ $all_news->links() }}
                        {{-- <ul>
                            <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#" class="active">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li>...</li>
                            <li><a href="#">10</a></li>
                            <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                        </ul> --}}
                    </div>
                </div>

            </section>

        </div>

        <div class="col-lg-4 sidebar">

            <div class="widgets-container" data-aos="fade-up" data-aos-delay="200">


                <div class="search-widget widget-item">

                    <h3 class="widget-title">Search</h3>
                    <form action="">
                        <input type="text">
                        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                    </form>

                </div>


                <div class="categories-widget widget-item">

                    <h3 class="widget-title">Categories</h3>
                    <ul class="mt-3">
                        <li><a href="#">General <span>(25)</span></a></li>
                        <li><a href="#">Lifestyle <span>(12)</span></a></li>
                        <li><a href="#">Travel <span>(5)</span></a></li>
                        <li><a href="#">Design <span>(22)</span></a></li>
                        <li><a href="#">Creative <span>(8)</span></a></li>
                        <li><a href="#">Educaion <span>(14)</span></a></li>
                    </ul>

                </div>


                <div class="recent-posts-widget widget-item">

                    <h3 class="widget-title">Recent Posts</h3>

                    <div class="post-item">
                        <img src="{{asset('')}}assets/frontend/img/blog/blog-post-square-1.webp" alt="" class="flex-shrink-0">
                        <div>
                            <h4><a href="blog-details.html">Nihil blanditiis at in nihil autem</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>
                    </div>

                    <div class="post-item">
                        <img src="{{asset('')}}assets/frontend/img/blog/blog-post-square-2.webp" alt="" class="flex-shrink-0">
                        <div>
                            <h4><a href="blog-details.html">Quidem autem et impedit</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>
                    </div>

                    <div class="post-item">
                        <img src="{{asset('')}}assets/frontend/img/blog/blog-post-square-3.webp" alt="" class="flex-shrink-0">
                        <div>
                            <h4><a href="blog-details.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>
                    </div>

                    <div class="post-item">
                        <img src="{{asset('')}}assets/frontend/img/blog/blog-post-square-4.webp" alt="" class="flex-shrink-0">
                        <div>
                            <h4><a href="blog-details.html">Laborum corporis quo dara net para</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>
                    </div>

                    <div class="post-item">
                        <img src="{{asset('')}}assets/frontend/img/blog/blog-post-square-5.webp" alt="" class="flex-shrink-0">
                        <div>
                            <h4><a href="blog-details.html">Et dolores corrupti quae illo quod dolor</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>
                    </div>

                </div>


                <div class="tags-widget widget-item">

                    <h3 class="widget-title">Tags</h3>
                    <ul>
                        <li><a href="#">App</a></li>
                        <li><a href="#">IT</a></li>
                        <li><a href="#">Business</a></li>
                        <li><a href="#">Mac</a></li>
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Office</a></li>
                        <li><a href="#">Creative</a></li>
                        <li><a href="#">Studio</a></li>
                        <li><a href="#">Smart</a></li>
                        <li><a href="#">Tips</a></li>
                        <li><a href="#">Marketing</a></li>
                    </ul>

                </div>

            </div>

        </div>

    </div>
</div>
@endsection
