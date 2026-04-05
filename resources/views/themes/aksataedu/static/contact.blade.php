@extends('layouts.appf')
@section('title', __($title ?? 'Contact'))
@section('content')
<section class="pb-20 bg-img pt-180" data-overlay="7" style="background-image: url({{asset('')}}assets/images/front-end-img/background/bg-8laptop.jpeg);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">
						<h2 class="text-white page-title">{{ __($title ?? 'Contact us') }}</h2>
						<ol class="bg-transparent breadcrumb justify-content-center">
							<li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="py-50">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-7 col-12">
						<div class="text-start mb-30">
							<h2>{!! $global_option->webname !!}</h2>
							{!! $global_option->description !!}
						</div>

				</div>
				<div class="col-md-5 col-12 mt-30 mt-md-0">
					<div class="p-40 mb-0 box box-body bg-dark">
						<h2 class="text-white box-title">{{ __('Kontak') }}</h2>
						<div class="py-20 my-20 widget fs-18 by-1 border-light">
							<ul class="list list-unstyled text-white-80">
								<li class="ps-40"><i class="ti-location-pin"></i>{!! $global_option->address !!}, {!! $global_option->postalcode !!}</li>
								<li class="my-20 ps-40"><i class="ti-mobile"></i>+(62) {!! $global_option->phone !!}</li>
								<li class="ps-40"><i class="ti-email"></i>{!! $global_option->email !!}</li>
							</ul>
						</div>
						<h4 class="mb-20">{{ __('Ikuti Kami') }}</h4>
						<ul class="list-unstyled d-flex gap-items-1">
							   @foreach ($social_media as $socialmedia)
                                <li><a href="{{ $socialmedia->url }}" target="_blank"  class="waves-effect waves-circle btn btn-social-icon btn-circle btn-linkedin">{!! $socialmedia->icon !!}</a></li>
                                @endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
				<iframe src="{!! $global_option->maps !!}" class="map" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>
@endsection
