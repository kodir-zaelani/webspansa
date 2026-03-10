<section id="featured-news" class="featured-news section">

    <div class="container section-title" data-aos="fade-up">
        <h2>Berita Utama</h2>
        {{-- <div><span>Check Our</span> <span class="description-title">Featured Posts</span></div> --}}
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="feature-news-slider swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 4000
                    },
                    "slidesPerView": 1,
                    "spaceBetween": 30,
                    "navigation": {
                        "nextEl": ".swiper-button-next",
                        "prevEl": ".swiper-button-prev"
                    },
                    "breakpoints": {
                        "768": {
                            "slidesPerView": 2
                        },
                        "1200": {
                            "slidesPerView": 3
                        }
                    }
                }
            </script>

            <div class="swiper-wrapper">
                @foreach ($featured_news as $item)
                <div class="swiper-slide">
                    <div class="feature-news-item" data-aos="zoom-in" data-aos-delay="200">
                        <article>

                            <div class="post-img">
                                <img src="{{$item->imageUrl}}" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">
                                <a href="{{ route('post.category', $item->postcategory->slug) }}" >{{$item->postcategory->title}}</a>
                            </p>

                            <h2 class="title">
                                <a href="{{ route('news.detail', $item->slug) }}" title="{{$item->title}}">{{Str::limit($item->title, 40)}}</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                @if ($item->author->image)
                                <img src="{{ asset('') }}uploads/images/users/images_thumb/{{ $item->author->image }}" alt="" class="flex-shrink-0 img-fluid post-author-img">
                                @else
                                <img src="{{ $global_option->imageThumbUrl }}" alt="User" class="flex-shrink-0 img-fluid post-author-img">
                                @endif
                                <div class="post-meta">
                                    <p class="post-author">
                                        <a href="{{ route('post.author', $item->author->id) }}" title="Tulisan dari">
                                            @if ($item->author->displayname)
                                            {{ $item->author->displayname }}
                                            @else
                                            {{ $item->author->name }}
                                            @endif
                                        </a>
                                    </p>
                                    <p class="post-date">
                                        <time datetime="2026-01-01">{{ \Carbon\Carbon::parse($item->created_at)->format('M j, Y') }}</time>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                @endforeach


            </div>

            <div class="swiper-navigation">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

        </div>

    </div>

</section>
