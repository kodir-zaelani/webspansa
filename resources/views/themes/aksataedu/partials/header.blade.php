<header class="top-bar text-dark d-md-block d-none">
    @include('themes.aksataedu.partials.topbar')

    <nav hidden class="nav-dark">
        <div class="nav-header">
            <a href="index.html" class="brand">
                <img src="{{ asset('') }}uploads/images/logo/{{ $global_option->logo_menu }}" alt="" style="max-width: 50%"/>
            </a>
            <button class="toggle-bar">
                <span class="ti-menu"></span>
            </button>
        </div>
        <ul class="menu">
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
            <li>
                <a href="about.html">About</a>
            </li>
            <li class="dropdown">
                <a href="#">Courses</a>
                <ul class="dropdown-menu">
                    <li><a href="courses_list.html">Courses List</a></li>
                    <li><a href="courses_list_right_sidebar.html">Courses List Right Sidebar</a></li>
                    <li><a href="courses_list-map.html">Courses with Map</a></li>
                    <li><a href="courses_categories.html">Courses Categories</a></li>
                    <li><a href="courses_details.html">Courses Details</a></li>
                    <li><a href="courses_details_right_sidebar.html">Courses Details right sidebar</a></li>
                </ul>
            </li>
            <li class="megamenu">
                <a href="#">Pages</a>
                <div class="megamenu-content">
                    <div class="row">
                        <div class="col-lg-3 col-12">
                            <ul class="list-group">
                                <li><h4 class="menu-title">User Pages</h4></li>
                                <li><a href="faqs.html"><i class="ti-arrow-circle-right me-10"></i>FAQs</a></li>
                                <li><a href="inovice.html"><i class="ti-arrow-circle-right me-10"></i>Invoice</a></li>
                                <li><a href="membership.html"><i class="ti-arrow-circle-right me-10"></i>Membership</a></li>
                                <li><a href="mydashboard.html"><i class="ti-arrow-circle-right me-10"></i>My Dashboard</a></li>
                                <li><a href="staff.html"><i class="ti-arrow-circle-right me-10"></i>Staff</a></li>
                                <li><a href="testimonial.html"><i class="ti-arrow-circle-right me-10"></i>Testimonial</a></li>
                                <li><a href="typography.html"><i class="ti-arrow-circle-right me-10"></i>Typography</a></li>
                                <li><a href="user_list.html"><i class="ti-arrow-circle-right me-10"></i>User List</a></li>
                                <li><a href="userprofile.html"><i class="ti-arrow-circle-right me-10"></i>User Profile</a></li>
                                <li><a href="about.html"><i class="ti-arrow-circle-right me-10"></i>About</a></li>
                                <li><a href="contact_us.html"><i class="ti-arrow-circle-right me-10"></i>Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-12">
                            <ul class="list-group">
                                <li><h4 class="menu-title">Widgets</h4></li>
                                <li><a href="widgets.html"><i class="ti-arrow-circle-right me-10"></i>Widgets</a></li>
                                <li><a href="courses_list.html"><i class="ti-arrow-circle-right me-10"></i>Courses List</a></li>
                                <li><a href="courses_details.html"><i class="ti-arrow-circle-right me-10"></i>Courses Details</a></li>
                                <li><a href="register.html"><i class="ti-arrow-circle-right me-10"></i>Register</a></li>
                                <li><a href="login.html"><i class="ti-arrow-circle-right me-10"></i>Login</a></li>
                                <li><a href="register_login.html"><i class="ti-arrow-circle-right me-10"></i>Register & Login</a></li>
                                <li><a href="forgot_pass.html"><i class="ti-arrow-circle-right me-10"></i>Forgot Password</a></li>
                                <li><a href="lockscreen.html"><i class="ti-arrow-circle-right me-10"></i>Lock Screen</a></li>
                                <li><a href="maintenance.html"><i class="ti-arrow-circle-right me-10"></i>Under Constructions</a></li>
                                <li><a href="404.html"><i class="ti-arrow-circle-right me-10"></i>404</a></li>
                                <li><a href="500.html"><i class="ti-arrow-circle-right me-10"></i>500</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-12">
                            <ul class="list-group">
                                <li><h4 class="menu-title">Features</h4></li>
                                <li><a href="header_default.html"><i class="ti-arrow-circle-right me-10"></i>Header One</a></li>
                                <li><a href="header_style2.html"><i class="ti-arrow-circle-right me-10"></i>Header Two</a></li>
                                <li><a href="header_style3.html"><i class="ti-arrow-circle-right me-10"></i>Header Three</a></li>
                                <li><a href="header_style4.html"><i class="ti-arrow-circle-right me-10"></i>Header Four</a></li>
                                <li><a href="header_style5.html"><i class="ti-arrow-circle-right me-10"></i>Header Five</a></li>
                                <li><a href="footer_style1.html"><i class="ti-arrow-circle-right me-10"></i>Footer One</a></li>
                                <li><a href="footer_style2.html"><i class="ti-arrow-circle-right me-10"></i>Footer Two</a></li>
                                <li><a href="footer_style3.html"><i class="ti-arrow-circle-right me-10"></i>Footer Three</a></li>
                                <li><a href="footer_style4.html"><i class="ti-arrow-circle-right me-10"></i>Footer Four</a></li>
                                <li><a href="footer_style5.html"><i class="ti-arrow-circle-right me-10"></i>Footer Five</a></li>
                                <li><a href="footer_style6.html"><i class="ti-arrow-circle-right me-10"></i>Footer Six</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-12 d-none d-lg-block">
                            <img src="{{ asset('') }}assets/images/front-end-img/adv.jpg" class="img-fluid" alt="" />
                        </div>
                    </div>
                </div>
            </li>
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
        <ul class="attributes">
            <li class="d-md-block d-none"><a href="#" class="px-10 pb-10 pt-15"><div class="py-5 btn btn-primary">Enroll Now</div></a></li>
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
        <ul class="menu">
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
            <li>
                <a href="about.html">About</a>
            </li>
            <li class="dropdown">
                <a href="#">Courses</a>
                <ul class="dropdown-menu">
                    <li><a href="courses_list.html">Courses List</a></li>
                    <li><a href="courses_list_right_sidebar.html">Courses List Right Sidebar</a></li>
                    <li><a href="courses_list-map.html">Courses with Map</a></li>
                    <li><a href="courses_categories.html">Courses Categories</a></li>
                    <li><a href="courses_details.html">Courses Details</a></li>
                    <li><a href="courses_details_right_sidebar.html">Courses Details right sidebar</a></li>
                </ul>
            </li>
            <li class="megamenu">
                <a href="#">Pages</a>
                <div class="megamenu-content">
                    <div class="row">
                        <div class="col-lg-3 col-12">
                            <ul class="list-group">
                                <li><h4 class="menu-title">User Pages</h4></li>
                                <li><a href="faqs.html"><i class="ti-arrow-circle-right me-10"></i>FAQs</a></li>
                                <li><a href="inovice.html"><i class="ti-arrow-circle-right me-10"></i>Invoice</a></li>
                                <li><a href="membership.html"><i class="ti-arrow-circle-right me-10"></i>Membership</a></li>
                                <li><a href="mydashboard.html"><i class="ti-arrow-circle-right me-10"></i>My Dashboard</a></li>
                                <li><a href="staff.html"><i class="ti-arrow-circle-right me-10"></i>Staff</a></li>
                                <li><a href="testimonial.html"><i class="ti-arrow-circle-right me-10"></i>Testimonial</a></li>
                                <li><a href="typography.html"><i class="ti-arrow-circle-right me-10"></i>Typography</a></li>
                                <li><a href="user_list.html"><i class="ti-arrow-circle-right me-10"></i>User List</a></li>
                                <li><a href="userprofile.html"><i class="ti-arrow-circle-right me-10"></i>User Profile</a></li>
                                <li><a href="about.html"><i class="ti-arrow-circle-right me-10"></i>About</a></li>
                                <li><a href="contact_us.html"><i class="ti-arrow-circle-right me-10"></i>Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-12">
                            <ul class="list-group">
                                <li><h4 class="menu-title">Widgets</h4></li>
                                <li><a href="widgets.html"><i class="ti-arrow-circle-right me-10"></i>Widgets</a></li>
                                <li><a href="courses_list.html"><i class="ti-arrow-circle-right me-10"></i>Courses List</a></li>
                                <li><a href="courses_details.html"><i class="ti-arrow-circle-right me-10"></i>Courses Details</a></li>
                                <li><a href="register.html"><i class="ti-arrow-circle-right me-10"></i>Register</a></li>
                                <li><a href="login.html"><i class="ti-arrow-circle-right me-10"></i>Login</a></li>
                                <li><a href="register_login.html"><i class="ti-arrow-circle-right me-10"></i>Register & Login</a></li>
                                <li><a href="forgot_pass.html"><i class="ti-arrow-circle-right me-10"></i>Forgot Password</a></li>
                                <li><a href="lockscreen.html"><i class="ti-arrow-circle-right me-10"></i>Lock Screen</a></li>
                                <li><a href="maintenance.html"><i class="ti-arrow-circle-right me-10"></i>Under Constructions</a></li>
                                <li><a href="404.html"><i class="ti-arrow-circle-right me-10"></i>404</a></li>
                                <li><a href="500.html"><i class="ti-arrow-circle-right me-10"></i>500</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-12">
                            <ul class="list-group">
                                <li><h4 class="menu-title">Features</h4></li>
                                <li><a href="header_default.html"><i class="ti-arrow-circle-right me-10"></i>Header One</a></li>
                                <li><a href="header_style2.html"><i class="ti-arrow-circle-right me-10"></i>Header Two</a></li>
                                <li><a href="header_style3.html"><i class="ti-arrow-circle-right me-10"></i>Header Three</a></li>
                                <li><a href="header_style4.html"><i class="ti-arrow-circle-right me-10"></i>Header Four</a></li>
                                <li><a href="header_style5.html"><i class="ti-arrow-circle-right me-10"></i>Header Five</a></li>
                                <li><a href="footer_style1.html"><i class="ti-arrow-circle-right me-10"></i>Footer One</a></li>
                                <li><a href="footer_style2.html"><i class="ti-arrow-circle-right me-10"></i>Footer Two</a></li>
                                <li><a href="footer_style3.html"><i class="ti-arrow-circle-right me-10"></i>Footer Three</a></li>
                                <li><a href="footer_style4.html"><i class="ti-arrow-circle-right me-10"></i>Footer Four</a></li>
                                <li><a href="footer_style5.html"><i class="ti-arrow-circle-right me-10"></i>Footer Five</a></li>
                                <li><a href="footer_style6.html"><i class="ti-arrow-circle-right me-10"></i>Footer Six</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-12 d-none d-lg-block">
                            <img src="{{ asset('') }}assets/images/front-end-img/adv.jpg" class="img-fluid" alt="" />
                        </div>
                    </div>
                </div>
            </li>
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
