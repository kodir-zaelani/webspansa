@extends('layouts.front')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <section id="blog-details" class=" blog-details section">
                <div class="container" data-aos="fade-up">
                    <article class="article">
                        <div class="article-content" data-aos="fade-up" data-aos-delay="100">
                            <div class="pb-0 content-header">
                                <h2 class="pb-2">{{ $page->title }}</h2>
                                    <div class="post-meta">
                                        {{-- <span class="date"><i class="bi bi-calendar3"></i> {{ \Carbon\Carbon::parse($page->created_at)->format('j F Y') }}</span> --}}
                                        <span class="reading-time"><i class="bi bi-clock me-2"></i> <em>Estimasi: {{ $page->reading_time }}</em></span>
                                        <span class="divider ms-2">•</span>
                                        <span class="comments ms-2"><i class="bi bi-eye-fill"></i> {{ $page->view_count }} Baca</span>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-img" data-aos="zoom-in">
                                <img src="{{$page->imageUrl}}" alt="Featured blog image" class="img-fluid" loading="lazy">
                                <div class="meta-overlay">
                                    <div class="meta-categories">
                                        <a href="#" class="category">{{ $page->pagecategory->title }}</a>
                                        {{-- <span class="divider">•</span>
                                        <span class="reading-time"><i class="bi bi-clock"></i> <em>Estimasi: {{ $page->reading_time }}</em></span> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="pb-0 mb-0 content">
                                {!! $page->content !!}
                            </div>
                        </div>
                    </article>
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
