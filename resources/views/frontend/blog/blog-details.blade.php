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
                                <h2 class="pb-2">{{ $item->title }}</h2>

                                <div class="author-info">
                                    <div class="author-details">
                                        @if ($item->author->image)
                                        <img src="{{ asset('') }}uploads/images/users/images_thumb/{{ $item->author->image }}" alt="Author" class="author-img">
                                        @else
                                        <img src="{{ $global_option->imageThumbUrl }}" alt="Author" class="author-img">
                                        @endif
                                        <div class="info">
                                            <h4>
                                                <a href="{{ route('news.author', $item->author->id) }}">
                                                    @if ($item->author->displayname)
                                                    {{ $item->author->displayname }}
                                                    @else
                                                    {{ $item->author->name }}
                                                    @endif
                                                </a>
                                            </h4>
                                            {{-- <span class="role"></span> --}}
                                        </div>
                                    </div>
                                    <div class="post-meta">
                                        <span class="date"><i class="bi bi-calendar3"></i> {{ \Carbon\Carbon::parse($item->created_at)->format('j F Y') }}</span>
                                        {{-- <span class="date"><i class="bi bi-calendar3"></i> {{ $item->created_at->format('M j, Y') }}</span> --}}
                                        <span class="divider ms-2">•</span>
                                        <span class="comments ms-2"><i class="bi bi-eye-fill"></i> {{ $item->view_count }} Baca</span>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-img" data-aos="zoom-in">
                                <img src="{{$item->imageUrl}}" alt="Featured blog image" class="img-fluid" loading="lazy">
                                <div class="meta-overlay">
                                    <div class="meta-categories">
                                        <a href="{{ route('blog.category', $item->blogcategory->slug) }}" class="category">{{ $item->blogcategory->title }}</a>
                                        <span class="divider">•</span>
                                        <span class="reading-time"><i class="bi bi-clock"></i> <em>Estimasi: {{ $item->reading_time }}</em></span>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-0 mb-0 content">
                                {!! $item->content !!}
                            </div>
                            <div class="meta-bottom">
                                <div class="tags-section">
                                    <h4>Topik terkait</h4>
                                    <div class="tags">
                                        {!! $item->tags_html !!}
                                    </div>
                                </div>

                                <div class="share-section">
                                    <h4>Share Article</h4>
                                    <div class="social-links">
                                        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                                        <a href="#" class="copy-link" title="Copy Link"><i class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
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
