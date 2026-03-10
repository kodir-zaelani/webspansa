@extends('layouts.front')
@section('title', $title ?? 'Beranda')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <section id="category-section" class="category-section section">
                <div class="container section-title" data-aos="fade-up">
                    <h2>Semua Berita</h2>
                    {{-- <div><span>Check Our</span> <span class="description-title">Latest Posts</span></div> --}}
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
                                        <a href="{{ route('news.detail', $item->slug) }}" title="{{$item->title}}">{{Str::limit($item->title, 40)}}</a>
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
                    </div>
                </div>
            </section>
        </div>

        <div class="col-lg-4 sidebar">
            <div class="widgets-container" data-aos="fade-up" data-aos-delay="200">
                @include('frontend.partials.searchnews-sidebar')
                @include('frontend.partials.postcategory-sidebar')
                @include('frontend.partials.latestpost-sidebar')
                @include('frontend.partials.tags-sidebar')
            </div>
        </div>
    </div>
</div>
@endsection
