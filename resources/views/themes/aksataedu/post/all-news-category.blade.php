@extends('layouts.appf')
@section('title', $title ?? 'Anak Petani')
@section('content')
<section class="pb-20 bg-img pt-180" data-overlay="7" style="background-image: url({{asset('')}}assets/images/front-end-img/background/bg-8laptop.jpeg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h2 class="text-white page-title">{{ __($title ?? 'Anak Petani') }}</h2>
                    <ol class="bg-transparent breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{route('root')}}" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="text-white breadcrumb-item active" aria-current="page">{{$postcategory->title}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-50">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-md-4 col-sm-12">
                <div class="course-detail-bx">
                    @include('themes.aksataedu.partials.sidebar-postcategory')
                    @include('themes.aksataedu.partials.sidebar-recent-news')
                </div>
            </div>
            <div class="col-xl-9 col-md-8 col-12">
                <div class="box">
                    <div class="row g-0">
                        <div class="col-md-4 col-12 bg-img h-md-auto h-250" style="background-image: url(../images/front-end-img/courses/12f.jpg)"></div>
                        <div class="col-md-8 col-12">
                            <div class="box-body">
                                <h4><a href="#">Aenean venenatis arcu quis ante porttitor bibendum.</a></h4>
                                <div class="mb-10 d-flex">
                                    <div class="me-10">
                                        <i class="fa fa-user me-5"></i> Johen Doe
                                    </div>
                                    <div>
                                        <i class="fa fa-calendar me-5"></i> October 19, 2020
                                    </div>
                                </div>

                                <p>Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget justo lacinia rutrum sed at mi.</p>

                                <div class="mt-3 flexbox align-items-center">
                                    <a class="btn btn-sm btn-primary" href="#">Read more</a>

                                    <div class="gap-items-4">
                                        <a class="text-muted" href="#">
                                            <i class="fa fa-heart me-1"></i> 25
                                        </a>
                                        <a class="text-muted" href="#">
                                            <i class="fa fa-comment me-1"></i> 23
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
