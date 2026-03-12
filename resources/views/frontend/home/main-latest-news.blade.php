<section id="latest-posts" class="latest-posts section light-background">


    <div class="container section-title" data-aos="fade-up">
        <h2>Berita Terbaru</h2>
        {{-- <div><span>Check Our</span> <span class="description-title">Latest Posts</span></div> --}}
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            @foreach ($latest_news as $item)
            <div class="col-lg-4">
                <article>
                    <div class="post-img">
                        <img src="{{$item->imageUrl}}" alt="" class="img-fluid">
                    </div>
                    <p class="post-category">
                        <a href="{{ route('post.category', $item->postcategory->slug) }}">
                            {{$item->postcategory->title}}
                        </a>
                    </p>

                    <h2 class="title">
                        <a href="{{ route('news.detail', $item->slug) }}">{{Str::limit($item->title, 40)}}</a>
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
                                <time datetime="2022-01-01">{{ \Carbon\Carbon::parse($item->created_at)->format('M j, Y') }}</time>
                            </p>
                        </div>
                    </div>

                </article>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12">
                <div class="pt-5 text-center">
                    <a href="{{ route('all.news') }}" class="btn btn-primary">{{ __('Selengkapnya') }}</a>
                </div>
            </div>
        </div>
    </div>

</section>
