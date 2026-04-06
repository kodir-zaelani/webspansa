@extends('layouts.appf')
@section('title',  $title ?? 'Sambutan')
@section('content')
<section class="pb-20 bg-img pt-180" data-overlay="7" style="background-image: url({{asset('')}}assets/images/front-end-img/background/bg-8laptop.jpeg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h2 class="text-white page-title">{{ __($title ?? 'Anak Petani') }}</h2>
                    <ol class="bg-transparent breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{route('root')}}" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-50">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-md-4 col-sm-12">
                <div class="course-detail-bx">
                    @include('themes.aksataedu.partials.sidebar-recent-news')
                    @include('themes.aksataedu.partials.sidebar-postcategory')
                </div>
            </div>
            <div class="col-xl-9 col-md-8 col-12">
                @if ($greetings->count())
                @forelse ($greetings as $item)
                <div class="box pull-up">
                    <div class="row g-0">
                        <div class="col-md-4 col-12 bg-img h-md-auto h-250" style="background-image: url({{ $item->image_url ? $item->image_url : '/uploads/images/logo/' . $global_option->logo }})"></div>
                        <div class="col-md-8 col-12">
                            <div class="box-body">
                                <h4><a href="#">{{ Str::limit($item->title, 75) }}</a></h4>
                                <div class="mb-10 d-flex">
                                    <div class="me-10">
                                        <i class="fa fa-book-open text-muted me-5"></i> {{ $item->reading_time }} menit
                                    </div>
                                    <div>
                                        <i class="fa fa-calendar me-5"></i> {{ $item->created_at }}
                                    </div>
                                </div>

                                <p>{!! Str::limit($item->content, 100) !!}</p>

                                <div class="mt-3 flexbox align-items-center">
                                    <a class="btn btn-sm btn-primary" href="{{ route('greeting.detail', $item->slug) }}">Selengkapnya..</a>

                                    <div class="gap-items-4">
                                        <a class="text-muted" href="#">
                                            <i class="fa fa-eye me-1"></i> {{ $item->view_count }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <p>No blog posts available.</p>
                @endforelse
                <div class="row justify-content-center d-md-none d-lg-none d-xl-none d-block">
                    <div class="text-center col-lg-12 col-12">
                        {{ $greetings->links('vendor.pagination.bootstrap-5-aksata-simple') }}
                    </div>
                </div>
                <div class="row justify-content-center d-md-block d-lg-block d-xl-block d-none">
                    <div class="text-center col-lg-12 col-12">
                        {{ $greetings->links('vendor.pagination.bootstrap-5-aksata') }}
                    </div>
                </div>
                @endif

            </div>
        </div>
    </section>


    @endsection
