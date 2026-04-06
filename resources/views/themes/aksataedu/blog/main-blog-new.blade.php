<section class="py-50 bg-light">
    <div class="mx-2 container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="">
                    @include('themes.aksataedu.partials.sidebar-album')
                    @include('themes.aksataedu.partials.sidebar-video')
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="box">
                    <div class="py-2 box-header bg-primary">
                        <div class="rounded d-lg-flex justify-content-between align-items-center">
                            <h3 class="class="box-title">Blog</h3>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row justify-content-center">
                            @forelse ($global_blog as $item)
                            <div class="mb-4 col-xl-6 col-lg-6 col-md-6 col-sm-12 d-none d-md-block d-lg-block d-xl-block">
                                <div class="mb-2 border-0 card">
                                    <div class="row g-0">
                                        <div class="col-md-4 ">
                                            <a href="{{ route('blog.detail', $item->slug) }}" title="{{$item->title}}">
                                                <img src="{{ $item->imageUrl ? $item->imageUrl : '/uploads/images/logo/' . $global_option->logo }}" class="pt-1 rounded img-fluid" alt="..." style="max-height: 100%">
                                            </a>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="pt-0 pb-0 card-body ps-3 pe-1">
                                                <a href="{{ route('blog.detail', $item->slug) }}" title="{{$item->title}}">
                                                    <h6 class="p-0 m-0 card-title ">{{ Str::limit($item->title, 75) }}</h6>
                                                </a>
                                                <span>
                                                    <small class="text-secondary fst-italic"><i class="fa fa-calendar-o"></i> {{ \Carbon\Carbon::parse($item->published_at ? $item->published_at : $item->created_at)->format('M j, Y') }}</small>
                                                </span><br/>
                                                <span>
                                                    <i class="fa fa-eye me-2 text-secondary"></i><small class="text-primary fw-semibold ">{{ $item->view_count }} kali</small>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <p>No blog posts available.</p>
                            @endforelse
                        </div>
                        @if ($global_blog->count())
                        <div aria-label="Page navigation example">
                            <a href="{{ route('blog.all') }}" class="mx-auto btn btn-primary">Tampilkan Semua</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="">
                    @include('themes.aksataedu.partials.sidebar-blogcategory')
                    @include('themes.aksataedu.partials.sidebar-tags-blog')
                </div>
            </div>
        </div>
    </section>
