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
