@extends('layouts.appf')
@section('title', $title ?? 'Anak Petani')
@section('content')
<section class="pb-20 bg-img pt-180 d-xl-block d-lg-block d-md-block d-none" data-overlay="7" style="background-image: url({{asset('')}}assets/images/front-end-img/background/bg-8laptop.jpeg);">
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
<section class="bg-img pt-60 d-xl-none d-lg-none d-md-none d-block" data-overlay="7" style="background-image: url({{asset('')}}assets/images/front-end-img/background/bg-8laptop.jpeg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h2 class="pt-20 text-white page-title">{{ __($title ?? 'Anak Petani') }}</h2>
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
            <div class="col-xl-9 col-md-8 col-12">
                <div class="box">
                    <div class="box-body">
                        <h3 class="box-title">{{ $item->title }}</h3>
                        <div class="cour-stac d-lg-flex align-items-center text-fade">
                            <div class="d-flex align-items-center">
                                <p><i class="fa fa-book-open text-muted me-5"></i> {{ $item->reading_time }} </p>
                                <p class="lt-sp">|</p>
                                <p><i class="fa fa-calendar-o me-5"></i> {{$item->published_at ? $item->published_at : $item->created_at}}</p>
                            </div>
                        </div>
                        <img class="py-10 box-img-top btrr-5 btlr-5" src="{{$item->image_url ? $item->image_url : asset('uploads/images/logo/'. $global_option->logo)}}" alt="Card image cap">
                        <hr>
                        <p class="fs-16 mb-30">
                            {!! $item->content !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-12">
                <div class="course-detail-bx">
                    @include('themes.aksataedu.partials.sidebar-recent-blog')
                    @include('themes.aksataedu.partials.sidebar-postcategory')
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
