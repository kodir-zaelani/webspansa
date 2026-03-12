@if ($latest_video->count())
<section id="latest-posts" class="latest-posts section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Video</h2>
        {{-- <div><span>Check Our</span> <span class="description-title">Latest Posts</span></div> --}}
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            @foreach ($latest_video as $item)
            <div class="col-lg-4">
                <article>
                    <div class="post-img">
                        <a href="{{ route('video.detail', $item->slug) }}"><img src="{{$item->imageUrl}}" title="{{$item->title}}" class="img-fluid"> </a>
                    </div>
                    <h2 class="pb-0 mb-0 title">
                        <a href="{{ route('video.detail', $item->slug) }}" title="{{$item->title}}">
                            {{$item->title}}
                            {{-- {{Str::limit($item->title, 40)}} --}}
                        </a>
                    </h2>
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
@endif
