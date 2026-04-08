<section class="py-50 bg-light">
    <div class="mx-2 container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-12">
                <div class="box">
                    <div class="py-2 box-header bg-primary">
                        <div class="rounded d-lg-flex justify-content-between align-items-center">
                            <h3 class="class="box-title">Berita</h3>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row justify-content-center d-xl-block d-lg-block d-md-block d-none">
                            @foreach ($featured_news as $item)
                            <div class="mb-4 col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                                <div class="mb-2 border-0 card">
                                    <div class="row g-0">
                                        <div class="col-md-4 ">
                                            <a href="{{ route('news.detail', $item->slug) }}" title="{{$item->title}}">
                                                <img src="{{ $item->imageUrl ? $item->imageUrl : '/uploads/images/logo/' . $global_option->logo }}" class="pt-1 rounded img-fluid" alt="..." style="max-height: 100%">
                                            </a>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="pt-0 pb-0 card-body ps-3 pe-1">
                                                <a href="{{ route('news.detail', $item->slug) }}" title="{{$item->title}}">
                                                    <h6 class="py-2 m-0 card-title ">{{ Str::limit($item->title, 75) }}</h6>
                                                </a>
                                                <span>
                                                    <small class="text-secondary fst-italic"><i class="fa fa-calendar-o"></i> {{ \Carbon\Carbon::parse($item->published_at ? $item->published_at : $item->created_at)->format('M j, Y') }}</small>
                                                </span>
                                                <span class="ms-3"> |
                                                    <i class="mx-2 fa fa-eye text-secondary"></i>
                                                    <small class="text-primary fw-semibold ">{{ $item->view_count }} kali

                                                    </small>
                                                </span><br/>
                                                <span >
                                                    <i class="me-2 fa fa-user text-secondary"></i>
                                                    <small class="text-primary fw-semibold ">
                                                        <a href="{{route('news.author', $item->author->id)}}" title="{{$item->author->displayname ?? $item->author->name}}">
                                                            {{ $item->author->displayname ?? $item->author->name }}
                                                        </a>
                                                    </small>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            @endforeach
                        </div>

                        <div class="media-list media-list-hover media-list-divided md-post mt-lg-0 mt-30 d-xl-none d-lg-none d-md-none d-block">
                            @forelse ($featured_news_mobile as $item)
                            <a class="bg-white media media-single box-shadowed pull-up mb-15" href="{{ route('agenda.detail', $item->slug) }}" title="{{$item->title}}">
                                <img class="rounded w-80 ms-0" src="{{$item->imageThumbUrl ? $item->imageThumbUrl : asset('uploads/images/logo/'. $global_option->logo)}}" alt="...">
                                <div class="media-body fw-500">
                                    <h6 class="overflow-hidden text-overflow-h nowrap">{{Str::limit($item->title, 40)}}</h6>
                                    <span class="text-info"><i class="fa fa-calendar-o"></i> {{ $item->created_at->format('F j, Y') }}</span>
                                    <p><span class="mt-10 text-fade text-primary">{{$item->postcategory->title ?? 'Uncategorized'}}</span></p>
                                </div>
                            </a>
                            @empty
                            <p>No agenda available.</p>
                            @endforelse
                        </div>

                        <div aria-label="Page navigation example">
                            <a href="{{ route('news.all') }}" class="mx-auto btn btn-primary">Tampilkan Semua</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="position-sticky t-100">
                    @include('themes.aksataedu.partials.sidebar-agenda')
                    @include('themes.aksataedu.partials.sidebar-postcategory')
                    @include('themes.aksataedu.partials.sidebar-tags')
                </div>
            </div>
        </div>
    </div>
</section>
