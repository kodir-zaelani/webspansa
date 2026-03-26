<header id="header" class="header sticky-top">

    <div class="pt-2 topbar d-flex align-items-center d-none d-xl-block d-lg-block d-md-block">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-calendar-week-fill d-flex align-items-center">
                    <span id="dateview"></span>
                </i>
                <i class="bi bi-clock d-flex align-items-center ms-4">
                    <span id="clock"></span>
                </i>
            </div>
            <div class="social-links d-md-flex align-items-center">
                @if ($header_menu)
                @foreach ($header_menu as $headermenu)
                @if ($headermenu['status'] == 1)
                @if ($headermenu['type'] == 'internal')
                <a href="{{ asset('') }}{{ $headermenu['link'] }}" target="{{ $headermenu['target'] }}">
                    {{ $headermenu['label']}}
                </a>
                @else
                <a href="{{ $headermenu['link'] }}" target="{{ $headermenu['target'] }}">
                    {{ $headermenu['label']}}
                </a>
                @endif
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
                <a href="{{ route('login') }}" class="fw-bold" target="_blank">{{__('Login')}}</a>
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
    </div><!-- End Top Bar -->

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
                    @if ($menu['child'])
                    {{-- menu child --}}
                    <li class="dropdown">
                        @if ($menu['type'] == 'internal' && $menu['link'] == '/')
                        <a href="{{ $menu['link'] }}" target="{{ $menu['target'] }}">
                            <span>{{ $menu['label'] }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                        </a>
                        @elseif ($menu['type'] == 'internal' && $menu['link'] != '/')
                        <a href="{{ asset('') }}{{ $menu['link'] }}" target="{{ $menu['target'] }}">
                            <span>{{ $menu['label'] }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                        </a>
                        @endif
                        <ul>
                            @foreach ($menu['child'] as $child)
                            @if ($child['status'] == 1)
                            @if ($child['child'])
                            <li class="dropdown">
                                {{-- child sub child --}}
                                @if ($child['type'] == 'internal')
                                <a href="{{ asset('') }}{{ $child['link'] }}" target="{{ $child['target'] }}">
                                    <span>{{ $child['label'] }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                                </a>
                                @else
                                <a href="{{ $child['link'] }}" target="{{ $child['target'] }}">
                                    <span>{{ $child['label'] }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                                </a>
                                @endif
                                <ul>
                                    @foreach ($child['child'] as $subchild)
                                    @if ($subchild['status'] == 1)
                                    <li>
                                        @if ($subchild['type'] == 'internal')
                                        <a href="{{ asset('') }}{{ $subchild['link'] }}" target="{{ $subchild['target'] }}">{{ $subchild['label'] }}</a>
                                        @else
                                        <a href="{{ $subchild['link'] }}" target="{{ $subchild['target'] }}">{{ $subchild['label'] }}</a>
                                        @endif
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                                {{-- end child sub child --}}
                            </li>
                            @else
                            <li>
                                @if ($child['type'] == 'internal')
                                <a href="{{ asset('') }}{{ $child['link'] }}" target="{{ $child['target'] }}">{{ $child['label'] }}</a>
                                @else
                                <a href="{{ $child['link'] }}" target="{{ $child['target'] }}">{{ $child['label'] }}</a>
                                @endif
                            </li>
                            @endif
                            @endif
                            @endforeach
                        </ul>
                    </li>
                    {{-- end menu child --}}
                    @else
                    {{-- mmnu --}}
                    <li>
                        @if ($menu['type'] == 'internal' && $menu['link'] == '/')
                        <a href="{{ $menu['link'] }}" target="{{ $menu['target'] }}">
                            {{ $menu['label'] }}
                        </a>
                        @elseif ($menu['type'] == 'internal' && $menu['link'] != '/')
                        <a href="{{ asset('') }}{{ $menu['link'] }}" target="{{ $menu['target'] }}">
                            <span>{{ $menu['label'] }}</span>
                        </a>
                        @else
                        <a href="{{ $menu['link'] }}" target="{{ $menu['target'] }}">
                            {{ $menu['label'] }}
                        </a>
                        @endif
                    </li>

                    @endif
                    @endif
                    @endforeach
                    @endif
                    <li>
                        <a data-bs-toggle="modal" data-bs-target="#modalSearch" style="cursor: pointer" class="fw-bold">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
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
