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
@endsection
