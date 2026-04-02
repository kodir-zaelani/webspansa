<section class="py-50" data-aos="fade-up">
    <div class="container">
        <div class="row justify-content-center">
            <div class="text-start col-lg-12 col-12">
                <h1 class="mb-10">Blog Guru</h1>
                <hr class="w-100 bg-primary">
            </div>
        </div>
        <div class="row mt-30">
            @foreach ($featured_news as $item)
            <div class="col-xl-3 col-md-3 col-12">
                <div class="blog-post h-400">
                    <div class="clearfix entry-image">
                        <img class="img-fluid" src="{{$item->imageUrl ? $item->imageUrl : asset('uploads/images/no_image.png')}}" alt="">
                    </div>
                    <div class="blog-detail">
                        <div class="mb-10 entry-meta">
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-folder-open-o"></i> Design</a></li>
                                <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                            </ul>
                        </div>
                        <div class="mb-10 entry-title">
                            <a href="{{ route('news.detail', $item->slug) }}" title="{{ $item->title }}">{{Str::limit($item->title, 60)}}</a>
                        </div>
                        <div class="mb-10 entry-meta">
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-calendar-o"></i> {{ \Carbon\Carbon::parse($item->published_at ? $item->published_at : $item->created_at)->format('M j, Y') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

            <div class="text-center col-12">
                <a href="{{ route('news.all') }}" class="mx-auto btn btn-primary">Selengkapnya..</a>
            </div>
        </div>
    </div>
</section>
