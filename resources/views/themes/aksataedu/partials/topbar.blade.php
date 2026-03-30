<div class=" topbar">

    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6 col-12 d-lg-block d-none">
                <div class="text-center topbar-social text-md-start topbar-left">
                    <ul class="list-inline d-md-flex d-inline-block">
                        <li class="ms-10 pe-10"><i class="text-dark fa fa-calendar"></i> <span id="dateview"></span></li>
                        <li class="ms-10 pe-10"><i class="text-dark fa fa-clock"></i> <span id="clock"></span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-12 xs-mb-10">
                <div class="text-center topbar-call text-lg-end topbar-right">
                    <ul class="list-inline d-lg-flex justify-content-end">

                        @if ($header_menu)
                        @foreach ($header_menu as $headermenu)
                        @if ($headermenu['status'] == 1)
                        @if ($headermenu['type'] == 'internal')
                        <li class="me-10 ps-10 lng-drop">
                            <a href="{{ asset('') }}{{ $headermenu['link'] }}" target="{{ $headermenu['target'] }}">
                                {{ $headermenu['label']}}
                            </a>
                        </li>
                        @else
                        <li class="me-10 ps-10 lng-drop">
                            <a href="{{ $headermenu['link'] }}" target="{{ $headermenu['target'] }}">
                                {{ $headermenu['label']}}
                            </a>
                        </li>
                        @endif
                        @endif
                        @endforeach
                        @endif
                        @guest
                        @if (Route::has('register'))
                        <li class="me-10 ps-10"><a href="{{ route('register') }}" class="fw-bold"><i class="text-dark fa fa-user d-md-inline-block d-none"></i> {{__('Register')}}</a></li>
                        @endif
                        @if (Route::has('login'))
                        <li class="me-10 ps-10"><a href="{{ route('login') }}" class="fw-bold" target="_blank"><i class="text-dark fa fa-sign-in d-md-inline-block d-none"></i> {{__('Login')}}</a></li>
                        @endif
                        @else
                        <li class="me-10 ps-10">
                            <a href="{{ route('backend.dashboard') }}" class="fw-bold"><i class="text-dark fa fa-dashboard d-md-inline-block d-none"></i>
                                Dashboard</a>
                            </li>
                            @endguest
                            @if ($social_media)
                            @foreach ($social_media as $socialmedia)
                            <li class="me-10 ps-10 d-md-inline-block d-none"><a href="{{ $socialmedia->url }}" target="_blank" >{!! $socialmedia->icon !!}</a></li>
                            @endforeach
                            @endif
                            {{-- // <li class="me-10 ps-10"><a href="#"><i class="text-dark fa fa-user d-md-inline-block d-none"></i> Register</a></li>
                            // <li class="me-10 ps-10"><a href="#"><i class="text-dark fa fa-sign-in d-md-inline-block d-none"></i> Login</a></li>
                            // <li class="me-10 ps-10"><a href="#"><i class="text-dark fa fa-dashboard d-md-inline-block d-none"></i> My Account</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
