<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">


    @if ($global_option->favicon)
    <link rel="icon" href="{{ asset('') }}uploads/images/logo/{{ $global_option->favicon }}" rel="icon">
    @else
    <link href="{{asset('')}}assets/frontend/img/favicon.png" rel="icon">
    <link href="{{asset('')}}assets/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">
    @endif

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <link href="{{asset('')}}assets/vendor_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('')}}assets/icons/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('')}}assets/vendor_components/aos/aos.css" rel="stylesheet">
    <link href="{{asset('')}}assets/vendor_components/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{asset('')}}assets/vendor_components/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/icons/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/icons/font-awesome/css/all.min.css" rel="stylesheet">

    <link href="{{asset('')}}assets/frontend/css/main.css" rel="stylesheet">
    <title>{{ $title ?? config('app.name', 'Anak Petani') }}</title>


    @livewireStyles
</head>

<body class="index-page">

    @include('frontend.partials.header')

    <main class="main">
        @yield('content')
        {{ isset($slot) ? $slot : null }}
    </main>

    @include('frontend.partials.footer')


    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    {{-- <div id="preloader"></div> --}}


    <script src="{{asset('')}}assets/vendor_components/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('')}}assets/vendor_components/php-email-form/validate.js"></script>
    <script src="{{asset('')}}assets/vendor_components/aos/aos.js"></script>
    <script src="{{asset('')}}assets/vendor_components/glightbox/js/glightbox.min.js"></script>
    <script src="{{asset('')}}assets/vendor_components/purecounter/purecounter_vanilla.js"></script>
    <script src="{{asset('')}}assets/vendor_components/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="{{asset('')}}assets/vendor_components/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{asset('')}}assets/vendor_components/swiper/swiper-bundle.min.js"></script>


    <script src="{{asset('')}}assets/frontend/js/main.js"></script>
    @stack('scripts')

    @livewireScripts
    <div class="modal fade modal-md" id="modalSearch" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel"><i class="fa fa-search" aria-hidden="true"></i> Pencarian berita</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('post.search') }}" method="GET">
                                <div class="mb-3 input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Cari berita..." value="{{ request('search') ?? '' }}">
                                    <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
