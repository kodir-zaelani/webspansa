<footer class="footer_three">
    <div class="footer-top bg-dark3 pt-80">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-12">
                    <div class="widget">
                        <h4 class="footer-title">Tentang</h4>
                        <ul class="list list-arrow mb-30">
                            @if ($footer_menuleft != '0')
                            @foreach ($footer_menuleft as $item)
                            <li>
                                <a href=" @if ($item['type'] == 'internal'){{ asset('') }}{{ $item['link'] }} @else {{ $item['link'] }} @endif" target="{{ $item['target'] }}">
                                    {{ $item['label'] }}
                                </a>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="widget">
                        <h4 class="footer-title">Layanan</h4>
                        <ul class="list list-arrow mb-30">
                            @if ($footer_menumiddle != '0')
                            @foreach ($footer_menumiddle as $item)
                            <li>
                                <a href=" @if ($item['type'] == 'internal'){{ asset('') }}{{ $item['link'] }} @else {{ $item['link'] }} @endif" target="{{ $item['target'] }}">
                                    {{ $item['label'] }}
                                </a>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="widget">
                        <h4 class="footer-title">{!! $global_option->webname !!}</h4>
                        <ul class="list list-unstyled mb-30">
                            <li> <a href="{!! $global_option->link_map !!}" target="_blank"><i class="fa fa-map-marker"></i>  {!! $global_option->address !!}, {!! $global_option->postalcode !!} </a></li>
                            <li> <i class="fa fa-phone"></i> <span class="me-5">+(62) {!! $global_option->phone !!} </span></li>
                            <li> <i class="fa fa-envelope"></i> <span class="me-5">{!! $global_option->email !!} </span></li>
                        </ul>

                        <div class="social-icons mt-30">
                            @if ($social_media)
                            <ul class="list-unstyled d-flex gap-items-1">
                                @foreach ($social_media as $socialmedia)
                                <li><a href="{{ $socialmedia->url }}" target="_blank"  class="waves-effect waves-circle btn btn-social-icon btn-circle btn-linkedin">{!! $socialmedia->icon !!}</a></li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-12">
                    <div class="widget">
                        <h4 class="footer-title">Web Statistik</h4>
                        <!-- Histats.com  (div with counter) -->
                        <div id="histats_counter"></div>
                        <!-- Histats.com  START  (aync)-->
                        <script type="text/javascript">var _Hasync= _Hasync|| [];
                            _Hasync.push(['Histats.start', '1,4745723,4,402,118,80,00011111']);
                            _Hasync.push(['Histats.fasi', '1']);
                            _Hasync.push(['Histats.track_hits', '']);
                            (function() {
                                var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
                                hs.src = ('//s10.histats.com/js15_as.js');
                                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
                            })();</script>
                            <noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4745723&101" alt="hidden hit counter" border="0"></a></noscript>
                            <!-- Histats.com  END  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom bg-dark3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="text-center col-md-12 col-12 text-md-start">
                        © 2012-
                        @php
                        echo date('Y');
                        @endphp
                        <span class="px-1 text-white fw-bold sitename">
                            @if ($global_option != '0')
                            {{ !empty($global_option->webname) ? $global_option->webname : 'Silahkan Sesuaikan ' }}
                            @else
                            Aksata Kaylana - Anak Petani
                            @endif
                        </span>
                        <span>
                            | Versi: {{ config('app.version', '1.0') }} | Dibuat dengan <i class="px-1 fa fa-heart" aria-hidden="true"></i> untuk <i class="px-1 flag-icon flag-icon-id" title="Indonesia" id="id"></i>
                        </span>
                        <span > | Modify by <a href="#" class="text-white fw-bold">Anak Petani</a></span>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    {{-- <footer class="footer_three">
        <div class="footer-top bg-dark3 pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div class="widget">
                            <h4 class="footer-title">About</h4>
                            <hr class="mx-auto mt-0 mb-10 bg-primary d-inline-block w-60">
                            <p class="mb-20 text-capitalize">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis exercitation ullamco laboris<br><br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="widget">
                            <h4 class="footer-title">Contact Info</h4>
                            <hr class="mx-auto mt-0 mb-10 bg-primary d-inline-block w-60">
                            <ul class="list list-unstyled mb-30">
                                <li> <i class="fa fa-map-marker"></i> 123, Lorem Ipsum, Dummy City,<br>FL-12345 USA</li>
                                <li> <i class="fa fa-phone"></i> <span>+(1) 123-878-1649 </span><br><span>+(1) 123-878-1649 </span></li>
                                <li> <i class="fa fa-envelope"></i> <span>info@EduAdmin.com </span><br><span>support@EduAdmin.com </span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="clearfix widget widget_gallery">
                            <h4 class="footer-title">Our Gallery</h4>
                            <hr class="mx-auto mt-0 mb-10 bg-primary d-inline-block w-60">
                            <ul class="list-unstyled">
                                <li><img src="{{ asset('') }}assets/images/gallery/thumb/1.jpg" alt=""></li>
                                <li><img src="{{ asset('') }}assets/images/gallery/thumb/2.jpg" alt=""></li>
                                <li><img src="{{ asset('') }}assets/images/gallery/thumb/3.jpg" alt=""></li>
                                <li><img src="{{ asset('') }}assets/images/gallery/thumb/4.jpg" alt=""></li>
                                <li><img src="{{ asset('') }}assets/images/gallery/thumb/5.jpg" alt=""></li>
                                <li><img src="{{ asset('') }}assets/images/gallery/thumb/6.jpg" alt=""></li>
                                <li><img src="{{ asset('') }}assets/images/gallery/thumb/7.jpg" alt=""></li>
                                <li><img src="{{ asset('') }}assets/images/gallery/thumb/8.jpg" alt=""></li>
                                <li><img src="{{ asset('') }}assets/images/gallery/thumb/9.jpg" alt=""></li>
                                <li><img src="{{ asset('') }}assets/images/gallery/thumb/10.jpg" alt=""></li>
                                <li><img src="{{ asset('') }}assets/images/gallery/thumb/11.jpg" alt=""></li>
                                <li><img src="{{ asset('') }}assets/images/gallery/thumb/12.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="widget">
                            <h4 class="footer-title">Accept Card Payments</h4>
                            <hr class="mx-auto mt-0 mb-10 bg-primary d-inline-block w-60">
                            <ul class="payment-icon list-unstyled d-flex gap-items-1">
                                <li class="ps-0">
                                    <a href="javascript:;"><i class="fa fa-cc-amex" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><i class="fa fa-cc-visa" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><i class="fa fa-cc-paypal" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                            <h4 class="mt-20 footer-title">Newsletter</h4>
                            <hr class="mx-auto mt-0 mb-4 bg-primary d-inline-block w-60">
                            <div class="mb-20">
                                <form class="" action="" method="post">
                                    <div class="input-group">
                                        <input name="email" required="required" class="form-control" placeholder="Your Email Address" type="email">
                                        <button name="submit" value="Submit" type="submit" class="btn btn-primary"> <i class="fa fa-envelope"></i> </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-10 by-1 bg-dark3 border-dark">
            <div class="container">
                <div class="text-center footer-links">
                    <a href="#" class="btn btn-link">Home</a>
                    <a href="#" class="btn btn-link">About Us</a>
                    <a href="#" class="btn btn-link">Pricing</a>
                    <a href="#" class="btn btn-link">Courses</a>
                    <a href="#" class="btn btn-link">Blog</a>
                    <a href="#" class="btn btn-link">Contact Us</a>
                    <a href="#" class="btn btn-link">Privacy Policy</a>
                    <a href="#" class="btn btn-link">Terms Of Conditions</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom bg-dark3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="text-center col-md-6 col-12 text-md-start">
                        © 2012-
                        @php
                        echo date('Y');
                        @endphp
                        <span class="px-1 text-white fw-bold sitename">
                            @if ($global_option != '0')
                            {{ !empty($global_option->webname) ? $global_option->webname : 'Silahkan Sesuaikan ' }}
                            @else
                            Aksata Kaylana - Anak Petani
                            @endif
                        </span>
                        <span>
                            | Versi: {{ config('app.version', '1.0') }} | Dibuat dengan <i class="px-1 fa fa-heart" aria-hidden="true"></i> untuk <i class="px-1 flag-icon flag-icon-id" title="Indonesia" id="id"></i>
                        </span>
                        <span >Modify by <a href="#" class="fw-bold">Anak Petani</a></span>
                    </div>
                    <div class="mt-20 col-md-6 mt-md-0">
                        <div class="social-icons">
                            <ul class="list-unstyled d-flex gap-items-1 justify-content-md-end justify-content-center">
                                <li><a href="#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-youtube"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> --}}
