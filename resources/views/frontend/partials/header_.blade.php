 @auth
 @php
 $currentUser = Auth::user()
 @endphp
 @endauth

 <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center"  >
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-calendar-week-fill d-flex align-items-center">
                    <span id="dateview"></span>
                </i>
                <i class="bi bi-clock d-flex align-items-center ms-4">
                    <span id="clock"></span>
                </i>
            </div>
            <div class=" social-links d-none d-md-flex align-items-center">
                @if ($header_menu)
                @foreach ($header_menu as $headermenu)
                @if ($headermenu['status'] == 1)
                @if ($headermenu['type'] == 'internal')
                <a href="{{ asset('') }}{{ $headermenu['link'] }}" target="{{ $headermenu['target'] }}">
                    @else
                    <a href="{{ $headermenu['link'] }}" target="{{ $headermenu['target'] }}">
                        @endif
                        {{ $headermenu['label']}}
                    </a>
                    @endif
                    @endforeach
                    @endif
                    @guest
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="fw-bold">
                        {{__('Register')}}
                    </a>
                    @endif
                    @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="fw-bold">{{__('Login')}}</a>
                    @endif

                    @else
                    <a href="{{ route('backend.dashboard') }}" class="fw-bold">
                        Dashboard
                    </a>
                    @endguest
                    @if ($social_media)
                    @foreach ($social_media as $socialmedia)
                    <a href="{{ $socialmedia->url }}" target="_blank" >{!! $socialmedia->icon !!}</a>
                    @endforeach
                    @endif

                </div>
            </div>
        </div>

        <div class="branding d-flex align-items-cente">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="{{route('root')}}" class="logo d-flex align-items-center">
                    <img src="{{ asset('') }}uploads/images/logo/{{ $global_option->logo_menu }}" alt="" class="img-fluid">
                </a>
                <nav id="navmenu" class="navmenu">

                    <ul>
                        @if ($public_menu)
                        @foreach ($public_menu as $menu)
                        @if ($menu['status'] == 1)
                        <li class="@if ($menu['child']) dropdown @endif">
                            @if ($menu['type'] == 'internal' && $menu['link'] == '/')
                            <a href="{{ $menu['link'] }}" target="{{ $menu['target'] }}">
                                @elseif ($menu['type'] == 'internal' && $menu['link'] != '/')
                                <a href="{{ asset('') }}{{ $menu['link'] }}" target="{{ $menu['target'] }}">
                                    @else
                                    <a href="{{ $menu['link'] }}" target="{{ $menu['target'] }}">
                                        @endif
                                        @if ($menu['child'])
                                        <span>{{ $menu['label'] }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                                        @else
                                        <span class="me-1"></span>{{ $menu['label'] }}
                                        @endif
                                    </a>
                                    @if ($menu['child'])
                                    <ul>
                                        @foreach ($menu['child'] as $child)
                                        @if ($child['status'] == 1)
                                        <li @if ($child['child']) class="dropdown" @endif>
                                            @if ($child['type'] == 'internal')
                                            <a href="{{ asset('') }}{{ $child['link'] }}" target="{{ $child['target'] }}">
                                                @else
                                                <a href="{{ $child['link'] }}" target="{{ $child['target'] }}">
                                                    @endif
                                                    @if ($child['child'])
                                                    <span>{{ $child['label'] }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                                                    @else
                                                    {{ $child['label'] }}
                                                    @endif
                                                </a>
                                                @if ($child['child'])
                                                <ul>
                                                    @foreach ($child['child'] as $subchild)
                                                    @if ($subchild['status'] == 1)
                                                    <li @if ($subchild['child']) class="dropdown" @endif>
                                                        @if ($subchild['type'] == 'internal')
                                                        <a href="{{ asset('') }}{{ $subchild['link'] }}" target="{{ $subchild['target'] }}">
                                                            @else
                                                            <a href="{{ $subchild['link'] }}" target="{{ $subchild['target'] }}">
                                                                @endif
                                                                @if ($subchild['child'])
                                                                <span>{{ $subchild['label'] }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                                                                @else
                                                                {{ $subchild['label'] }}
                                                                @endif
                                                            </a>
                                                            @if ($subchild['child'])
                                                            <ul>
                                                                @foreach ($subchild['child'] as $subchilddeep)
                                                                @if ($subchilddeep['status'] == 1)
                                                                <li>
                                                                    <a href="{{ $subchilddeep['link'] }}" target="{{ $subchilddeep['target'] }}">
                                                                        {{ $subchilddeep['label'] }}
                                                                    </a>
                                                                </li>
                                                                @endif
                                                                @endforeach
                                                            </ul>
                                                            @endif
                                                        </li>
                                                        @endif
                                                        @endforeach
                                                    </ul>
                                                    @endif
                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>
                                            @endif
                                        </li>
                                        @endif
                                        @endforeach
                                        @endif
                                        <li>
                                            <a data-bs-toggle="modal" data-bs-target="#modalSearch" style="cursor: pointer" class="fw-bold"><i class="fa fa-search" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                                </nav>

                            </div>

                        </div>

                    </header>
                    @push('scripts')
                    <script>
                        // date
                        var tw = new Date();
                        if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
                        else(a = tw.getTime());
                        tw.setTime(a);
                        var tahun = tw.getFullYear();
                        var hari = tw.getDay();
                        var bulan = tw.getMonth();
                        var tanggal = tw.getDate();
                        var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
                        var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
                        "Oktober", "Nopember", "Desember");
                        document.getElementById("dateview").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " + tahun;

                        // Clock
                        function showTime() {
                            var a_p = "";
                            var today = new Date();
                            var curr_hour = today.getHours();
                            var curr_minute = today.getMinutes();
                            var curr_second = today.getSeconds();

                            if (curr_hour < 12) {
                                a_p = "AM";
                            } else {
                                a_p = "PM";
                            }

                            curr_hour = checkTime(curr_hour);
                            curr_minute = checkTime(curr_minute);
                            curr_second = checkTime(curr_second);
                            // document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p; // AM/PM
                            document.getElementById('clock').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second;
                        }

                        function checkTime(i) {
                            if (i < 10) {
                                i = "0" + i;
                            }
                            return i;
                        }
                        setInterval(showTime, 500);

                        window.onload = function() {
                            document.getElementById('term').value = '';
                        }
                    </script>
                    @endpush
