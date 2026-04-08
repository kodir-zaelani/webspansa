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
                        <li class="text-white breadcrumb-item active" aria-current="page">{{$all_news->first()->postcategory->title}}</li>
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
                        <div class="row justify-content-center">
                            @foreach ($all_news as $item)
                            <div class="mb-4 col-xl-6 col-lg-6 col-md-6 col-sm-12 d-none d-md-block d-lg-block d-xl-block">
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
                                                    <h6 class="p-0 m-0 card-title ">{{ Str::limit($item->title, 75) }}</h6>
                                                </a>
                                                <span>
                                                    <small class="text-secondary fst-italic"><i class="fa fa-calendar-o"></i> {{ \Carbon\Carbon::parse($item->published_at ? $item->published_at : $item->created_at)->format('M j, Y') }}</small>
                                                </span>
                                                <span class="ms-3"> |
                                                    <i class="mx-2 fa fa-eye text-secondary"></i><small class="text-primary fw-semibold ">{{ $item->view_count }} kali</small>
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
                        <div class="row">
                            <div class="col">
                                <h4 class="fw-blod">Berita</h4>
                                <div class="row justify-content-center d-md-none d-lg-none d-xl-none d-block">
                                    <div class="text-center col-lg-12 col-12">
                                        {{ $all_news->links('vendor.pagination.bootstrap-5-aksata-simple') }}
                                    </div>
                                </div>
                                <div class="row justify-content-center d-md-block d-lg-block d-xl-block d-none">
                                    <div class="text-center col-lg-12 col-12">
                                        {{ $all_news->links('vendor.pagination.bootstrap-5-aksata') }}
                                    </div>
                                </div>
                                <div class="media-list media-list-hover media-list-divided md-post mt-lg-0 mt-30 d-xl-none d-lg-none d-md-none d-block">
                                    @forelse ($all_news as $item)
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
                            </div>
                        </div>
                        <div class="row justify-content-center d-md-none d-lg-none d-xl-none d-block">
                            <div class="text-center col-lg-12 col-12">
                                {{ $all_news->links('vendor.pagination.bootstrap-5-aksata-simple') }}
                            </div>
                        </div>
                        <div class="row justify-content-center d-md-block d-lg-block d-xl-block d-none">
                            <div class="text-center col-lg-12 col-12">
                                {{ $all_news->links('vendor.pagination.bootstrap-5-aksata') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-12">
                <div class="course-detail-bx">
                    @include('themes.aksataedu.partials.sidebar-postcategory')
                    @include('themes.aksataedu.partials.sidebar-recent-news')
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
