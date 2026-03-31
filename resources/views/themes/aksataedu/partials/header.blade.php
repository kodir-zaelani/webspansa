<header class="top-bar text-dark d-md-block d-none">
    @include('themes.aksataedu.partials.topbar')

    <nav hidden class="nav-dark">
        <div class="nav-header">
            <a href="{{route('root')}}" class="brand">
                <img src="{{ asset('') }}uploads/images/logo/{{ $global_option->logo_menu }}" alt="" style="max-width: 50%"/>
            </a>
            <button class="toggle-bar">
                <span class="ti-menu"></span>
            </button>
        </div>
        @if ($public_menu)
        <ul class="menu">
            @foreach ($public_menu as $menu)
            @if ($menu['status'] == 1)
            @if ($menu['child'])
            {{-- menu child --}}
            <li class="dropdown">
                @if ($menu['type'] == 'internal' && $menu['link'] == '/')
                <a href="{{ $menu['link'] }}" target="{{ $menu['target'] }}">
                    <span>{{ $menu['label'] }}</span>
                </a>
                @elseif ($menu['type'] == 'internal' && $menu['link'] != '/')
                <a href="{{ asset('') }}{{ $menu['link'] }}" target="{{ $menu['target'] }}">
                    <span>{{ $menu['label'] }}</span>
                </a>
                @endif
                <ul class="dropdown-menu">
                    @foreach ($menu['child'] as $child)
                    @if ($child['status'] == 1)
                    @if ($child['child'])
                    <li class="dropdown">
                        {{-- child sub child --}}
                        @if ($child['type'] == 'internal')
                        <a href="{{ asset('') }}{{ $child['link'] }}" target="{{ $child['target'] }}">
                            <span>{{ $child['label'] }}</span>
                        </a>
                        @else
                        <a href="{{ $child['link'] }}" target="{{ $child['target'] }}">
                            <span>{{ $child['label'] }}</span>
                        </a>
                        @endif
                        <ul class="dropdown-menu">
                            @foreach ($child['child'] as $subchild)
                            @if ($subchild['status'] == 1)
                            <li >
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
        </ul>
        @endif
        <ul class="attributes">
            {{-- <li class="d-md-block d-none"><a href="#" class="px-10 pb-10 pt-15"><div class="py-5 btn btn-primary">Enroll Now</div></a></li> --}}
            <li class="d-md-block d-none"><a href="#" class="toggle-search-fullscreen"><span class="ti-search"></span></a></li>
            <li class="megamenu" data-width="270">
                <a href="#"><span class="ti-shopping-cart"></span></a>
                <div class="megamenu-content megamenu-cart">

                    <div class="cart-header">
                        <div class="total-price">
                            Total:  <span>$2,432.93</span>
                        </div>
                        <i class="ti-shopping-cart"></i>
                        <span class="badge">3</span>
                    </div>
                    <div class="cart-body">
                        <ul>
                            <li>
                                <img src="{{ asset('') }}assets/images/front-end-img/product/product-1.png" alt="">
                                <h5 class="title">Lorem ipsum dolor</h5>
                                <span class="qty">Quantity: 02</span>
                                <span class="price-st">$843,12</span>
                                <a href="#" class="link"></a>
                            </li>
                            <li>
                                <img src="{{ asset('') }}assets/images/front-end-img/product/product-2.png" alt="">
                                <h5 class="title">Lorem ipsum dolor</h5>
                                <span class="qty">Quantity: 02</span>
                                <span class="price-st">$843,12</span>
                                <a href="#" class="link"></a>
                            </li>
                            <li>
                                <img src="{{ asset('') }}assets/images/front-end-img/product/product-3.png" alt="">
                                <h5 class="title">Lorem ipsum dolor</h5>
                                <span class="qty">Quantity: 02</span>
                                <span class="price-st">$843,12</span>
                                <a href="#" class="link"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="cart-footer">
                        <a href="#">Checkout</a>
                    </div>

                </div>
            </li>
        </ul>


    </nav>
</header>
<nav class="navbar bg-body-tertiary d-md-none d-block">
    <div class="container">
        <div class="nav-header">
            <a href="/" class="brand">
                <img src="{{ asset('') }}uploads/images/logo/{{ $global_option->logo_menu }}" alt="" style="max-width: 50%"/>
            </a>
            <button class="toggle-bar">
                <span class="ti-menu"></span>
            </button>
        </div>
        @if ($public_menu)
        <ul class="menu">
            @foreach ($public_menu as $menu)
            @if ($menu['status'] == 1)
            @if ($menu['child'])
            {{-- menu child --}}
            <li class="dropdown">
                <a href="#">Home</a>
                <ul class="dropdown-menu">
                    <li><a href="index.html">Home 1</a></li>
                    <li><a href="index2.html">Home 2</a></li>
                    <li><a href="index3.html">Home 3</a></li>
                    <li><a href="index4.html">Home 4</a></li>
                    <li><a href="index5.html">Home 5</a></li>
                    <li><a href="index6.html">Home 6</a></li>
                </ul>
            </li>
            @else
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

            <li class="dropdown">
                <a href="#">Blog</a>
                <ul class="dropdown-menu">
                    <li class="dropdown">
                        <a href="#">Grid Blog</a>
                        <ul class="dropdown-menu">
                            <li><a href="blog_grid_2.html">Grid 2 colunm</a></li>
                            <li><a href="blog_grid_3.html">Grid 3 colunm</a></li>
                            <li><a href="blog_grid_left_sidebar.html">blog left sidebar</a></li>
                            <li><a href="blog_grid_right_sidebar.html">blog right sidebar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">List Blog</a>
                        <ul class="dropdown-menu">
                            <li><a href="blog_list.html">Blog List</a></li>
                            <li><a href="blog_list_left_sidebar.html">Blog List Left Sidebar</a></li>
                            <li><a href="blog_list_right_sidebar.html">Blog List right Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Single Blog Post</a>
                        <ul class="dropdown-menu">
                            <li><a href="blog_single_grid_post.html">Single Grid Post</a></li>
                            <li><a href="blog_single_html5video_post.html">Single html5 Video-post</a></li>
                            <li><a href="blog_single_image_post.html">Single Image Post</a></li>
                            <li><a href="blog_single_slider_post.html">Single Slider Post</a></li>
                            <li><a href="blog_single_soundcloud_post.html">Single SoundCloud Post</a></li>
                            <li><a href="blog_single_vimeo_post.html">Single Vimeo Post</a></li>
                            <li><a href="blog_single_post.html">Single without image post</a></li>
                            <li><a href="blog_single_youtube_post.html">Single Youtube Post</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Shop</a>
                <ul class="dropdown-menu">
                    <li><a href="shop.html">Shop Grid</a></li>
                    <li><a href="shop-cart.html">Shop Cart</a></li>
                    <li><a href="shop-checkout.html">Shop Checkout</a></li>
                    <li><a href="shop-details.html">Shop Details</a></li>
                    <li><a href="shop-orders.html">Shop Orders</a></li>
                </ul>
            </li>
            <li>
                <a href="contact_us.html">Contact</a>
            </li>
        </ul>
        @endif

        <ul class="attributes">
            <li class="d-md-block d-none"><a href="#" class="toggle-search-fullscreen"><span class="ti-search"></span></a></li>
            <li class="megamenu" data-width="270">
                <a href="#"><span class="ti-shopping-cart"></span></a>
                <div class="megamenu-content megamenu-cart">

                    <div class="cart-header">
                        <div class="total-price">
                            Total:  <span>$2,432.93</span>
                        </div>
                        <i class="ti-shopping-cart"></i>
                        <span class="badge">3</span>
                    </div>
                    <div class="cart-body">
                        <ul>
                            <li>
                                <img src="{{ asset('') }}assets/images/front-end-img/product/product-1.png" alt="">
                                <h5 class="title">Lorem ipsum dolor</h5>
                                <span class="qty">Quantity: 02</span>
                                <span class="price-st">$843,12</span>
                                <a href="#" class="link"></a>
                            </li>
                            <li>
                                <img src="{{ asset('') }}assets/images/front-end-img/product/product-2.png" alt="">
                                <h5 class="title">Lorem ipsum dolor</h5>
                                <span class="qty">Quantity: 02</span>
                                <span class="price-st">$843,12</span>
                                <a href="#" class="link"></a>
                            </li>
                            <li>
                                <img src="{{ asset('') }}assets/images/front-end-img/product/product-3.png" alt="">
                                <h5 class="title">Lorem ipsum dolor</h5>
                                <span class="qty">Quantity: 02</span>
                                <span class="price-st">$843,12</span>
                                <a href="#" class="link"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="cart-footer">
                        <a href="#">Checkout</a>
                    </div>

                </div>
            </li>
        </ul>
    </div>
</nav>
<div class="wrap-search-fullscreen">
    <div class="container">
        <button class="close-search"><span class="ti-close"></span></button>
        <input type="text" placeholder="Search..." id="term" />
    </div>
</div>
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
