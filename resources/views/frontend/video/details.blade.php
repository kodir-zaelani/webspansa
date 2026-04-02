@extends('layouts.front')
@section('title', $title ?? 'Beranda')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <section id="blog-details" class=" blog-details section">
                <div class="container" data-aos="fade-up">
                    <article class="article">
                        <div class="article-content" data-aos="fade-up" data-aos-delay="100">
                            <div class="pb-0 content-header">
                                <h2 class="pb-2">{{ $video->title }}</h2>

                                <div class="author-info">
                                    {{-- <div class="author-details">
                                        <div class="info">
                                            <h4>
                                                <a href="{{ route('news.author', $video->author->id) }}">
                                                    @if ($video->author->displayname)
                                                    {{ $video->author->displayname }}
                                                    @else
                                                    {{ $video->author->name }}
                                                    @endif
                                                </a>
                                            </h4>
                                        </div>
                                    </div> --}}
                                    <div class="post-meta">
                                        <span class="date"><i class="bi bi-calendar3"></i> {{ \Carbon\Carbon::parse($video->created_at)->format('j F Y') }}</span>
                                        {{-- <span class="date"><i class="bi bi-calendar3"></i> {{ $video->created_at->format('M j, Y') }}</span> --}}
                                        <span class="divider ms-2">•</span>
                                        <span class="comments ms-2"><i class="bi bi-eye-fill"></i> {{ $video->view_count }} Baca</span>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="hero-img" data-aos="zoom-in">
                                <a href="{{$video->video}}" class="glightbox pulsating-play-btn">
                                    <img src="{{$video->imageUrl}}" alt="Featured blog image" class="img-fluid" loading="lazy">
                                </a>
                            </div> --}}
                            <div class="position-relative hero-img">
                                <img src="{{$video->imageUrl}}" class="img-fluid" alt="">
                                <a href="{{$video->video}}" class="glightbox pulsating-play-btn"></a>
                            </div>
                            <div class="pb-0 mb-0 content">
                                {!! $video->content !!}
                            </div>

                        </div>
                    </article>
                </div>
            </section>

        </div>

        <div class="col-lg-4 sidebar">
            <div class="widgets-container" data-aos="fade-up" data-aos-delay="200">
                @include('frontend.partials.postcategory-sidebar')
                @include('frontend.partials.latestpost-sidebar')
                @include('frontend.partials.tags-sidebar')
            </div>
        </div>
    </div>
</div>
@endsection
