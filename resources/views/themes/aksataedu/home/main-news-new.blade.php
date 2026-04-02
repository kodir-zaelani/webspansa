<section class="py-50">
    <div class="mx-2 container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-12">
                <div class="position-sticky t-100">
                    <div class="box">
                        <div class="box-header bg-info">
                            <h4 class="box-title"><strong>Pengumuman</strong></h4>
                            <div class="box-controls pull-right">
                                <a class="btn btn-sm btn-primary">{{ __('Semua')}}</a>
                            </div>
                        </div>

                        <div class=" box-body">
                            <div class="widget">
                                @forelse ($latest_announcements as $item)
                                <div class="clearfix recent-post">
                                    <div class="recent-post-image">
                                        <img class="img-fluid bg-primary-light" src="{{$item->imageThumbUrl ? $item->imageThumbUrl : asset('uploads/images/default-image.png')}}" alt="">
                                    </div>
                                    <div class="recent-post-info">
                                        <a href="#">{{ $item->title }}</a>
                                        <span><i class="fa fa-calendar-o"></i> {{ $item->created_at->format('F j, Y') }}</span>
                                    </div>
                                </div>
                                @empty
                                <p>No announcements available.</p>
                                @endforelse
                            </div>
                        </div>

                    </div>
                    <div class="box">
                        <div class="box-header bg-success">
                            <h4 class="box-title"><strong>Agenda</strong></h4>
                            <div class="box-controls pull-right">
                                <a class="btn btn-sm btn-primary">{{ __('Semua')}}</a>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="widget">
                                @forelse ($latest_agendas as $item)
                                <div class="clearfix recent-post">
                                    <div class="recent-post-image">
                                        <img class="img-fluid bg-primary-light" src="{{$item->imageThumbUrl ? $item->imageThumbUrl : asset('uploads/images/default-image.png')}}" alt="">
                                    </div>
                                    <div class="recent-post-info">
                                        <a href="#">{{ $item->title }}</a>
                                        <span><i class="fa fa-calendar-o"></i> {{ $item->created_at->format('F j, Y') }}</span>
                                    </div>
                                </div>
                                @empty
                                <p>No agenda available.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <div class="box">
                    <div class="py-2 box-header bg-light">
                        <div class="rounded d-lg-flex justify-content-between align-items-center">
                            <h3 class="class="box-title">Berita & Kegiatan Sekolah</h3>
                            <div class="d-flex justify-lg-content-end align-items-center">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="mx-5 nav-item" role="presentation">
                                        <a class="nav-link active b-0 fs-18" id="pills-list-tab" data-bs-toggle="pill" href="#pills-list" role="tab" aria-controls="pills-list" aria-selected="true">
                                            <i class="fa fa-list me-0"></i>
                                        </a>
                                    </li>
                                    <li class="mx-5 nav-item" role="presentation">
                                        <a class="nav-link b-0 fs-18" id="pills-grid-tab" data-bs-toggle="pill" href="#pills-grid" role="tab" aria-controls="pills-grid" aria-selected="false">
                                            <i class="fa fa-th me-0"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-list" role="tabpanel" aria-labelledby="pills-list-tab">
                                @foreach ($featured_news as $item)
                                <div class="card rounded-0">
                                    <div class="d-lg-flex">
                                        <div class="position-relative w-lg-400">
                                            <a href="{{ route('news.detail', $item->slug) }}" title="{{ $item->title }}">
                                                <img class="img-fluid rounded-start" src="{{$item->imageThumbUrl ? $item->imageThumbUrl : asset('uploads/images/no_image.jpg')}}" alt="{{ $item->title }}">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <span class="badge badge-info">{{$item->postcategory->title}}</span>
                                            </div>
                                        </div>
                                        <div class="card no-border no-shadow w-p80">
                                            <div class="py-2 mt-1 card-body">
                                                <h3 class="pt-0 mt-0 card-title">
                                                    <a href="{{ route('news.detail', $item->slug) }}" title="{{ $item->title }}">{{Str::limit($item->title, 50)}}</a>
                                                </h3>
                                                <div class="pt-2 cour-stac d-lg-flex align-items-center text-fade ps-2">
                                                    <div class="d-flex align-items-center">
                                                        <span><i class="fa fa-calendar-o"></i> {{ \Carbon\Carbon::parse($item->published_at ? $item->published_at : $item->created_at)->format('M j, Y') }}</span>
                                                        <p class="lt-sp">|</p>
                                                        <span><i class="fa fa-eye"></i> {{$item->view_count}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="tab-pane fade" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
                                <div class="row">
                                    @foreach ($featured_news as $item)
                                    <div class="col-lg-6 col-12">
                                        <div class="card h-350">
                                            <a href="{{ route('news.detail', $item->slug) }}" title="{{ $item->title }}">
                                                <img class="card-img-top" src="{{$item->imageThumbUrl ? $item->imageThumbUrl : asset('uploads/images/no_image.jpg')}}" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <span class="badge badge-info">{{$item->postcategory->title}}</span>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title justify-content-between d-flex align-items-center">
                                                    <a href="{{ route('news.detail', $item->slug) }}" title="{{ $item->title }}">{{Str::limit($item->title, 50)}}</a>
                                                </h4>
                                                <div class="mt-20 cour-stac d-flex align-items-center text-fade">
                                                    <span><i class="fa fa-calendar-o"></i> {{ \Carbon\Carbon::parse($item->published_at ? $item->published_at : $item->created_at)->format('M j, Y') }}</span>
                                                    <p class="lt-sp">|</p>
                                                    <span><i class="fa fa-eye"></i> {{$item->view_count}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div aria-label="Page navigation example">
                            <a href="{{ route('news.all') }}" class="mx-auto btn btn-primary">Tampilkan Semua</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="position-sticky t-100">
                    <div class="box">
                        <div class="box-header bg-primary">
                            <h4 class="box-title"><strong>Pengumuman</strong></h4>
                            <div class="box-controls pull-right">
                                <a class="btn btn-sm btn-danger">{{ __('Semua')}}</a>
                            </div>
                        </div>

                        <div class=" box-body">
                            <div class="widget">
                                @forelse ($latest_announcements as $item)
                                <div class="clearfix recent-post">
                                    <div class="recent-post-image">
                                        <img class="img-fluid bg-primary-light" src="{{$item->imageThumbUrl ? $item->imageThumbUrl : asset('uploads/images/default-image.png')}}" alt="">
                                    </div>
                                    <div class="recent-post-info">
                                        <a href="#">{{ $item->title }}</a>
                                        <span><i class="fa fa-calendar-o"></i> {{ $item->created_at->format('F j, Y') }}</span>
                                    </div>
                                </div>
                                @empty
                                <p>No announcements available.</p>
                                @endforelse
                            </div>
                        </div>

                    </div>
                    <div class="box">
                        <div class="box-header bg-success">
                            <h4 class="box-title"><strong>Agenda</strong></h4>
                            <div class="box-controls pull-right">
                                <a class="btn btn-sm btn-primary">{{ __('Semua')}}</a>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="widget">
                                @forelse ($latest_agendas as $item)
                                <div class="clearfix recent-post">
                                    <div class="recent-post-image">
                                        <img class="img-fluid bg-primary-light" src="{{$item->imageThumbUrl ? $item->imageThumbUrl : asset('uploads/images/default-image.png')}}" alt="">
                                    </div>
                                    <div class="recent-post-info">
                                        <a href="#">{{ $item->title }}</a>
                                        <span><i class="fa fa-calendar-o"></i> {{ $item->created_at->format('F j, Y') }}</span>
                                    </div>
                                </div>
                                @empty
                                <p>No agenda available.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
