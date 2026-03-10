<section id="featured-news" class="featured-news section">

    <div class="container section-title" data-aos="fade-up">
        <h2>Berita Utama</h2>
        {{-- <div><span>Check Our</span> <span class="description-title">Featured Posts</span></div> --}}
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="feature-news-slider swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 4000
                    },
                    "slidesPerView": 1,
                    "spaceBetween": 30,
                    "navigation": {
                        "nextEl": ".swiper-button-next",
                        "prevEl": ".swiper-button-prev"
                    },
                    "breakpoints": {
                        "768": {
                            "slidesPerView": 2
                        },
                        "1200": {
                            "slidesPerView": 3
                        }
                    }
                }
            </script>

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="feature-news-item" data-aos="zoom-in" data-aos-delay="200">
                        <article>

                            <div class="post-img">
                                <img src="{{asset('')}}assets/frontend/img/blog/blog-post-1.webp" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">Politics</p>

                            <h2 class="title">
                                <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="{{asset('')}}assets/frontend/img/person/person-f-12.webp" alt="" class="flex-shrink-0 img-fluid post-author-img">
                                <div class="post-meta">
                                    <p class="post-author">Maria Doe</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Jan 1, 2022</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="feature-news-item" data-aos="zoom-in" data-aos-delay="200">
                        <article>

                            <div class="post-img">
                                <img src="{{asset('')}}assets/frontend/img/blog/blog-post-2.webp" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">Sports</p>

                            <h2 class="title">
                                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="{{asset('')}}assets/frontend/img/person/person-f-13.webp" alt="" class="flex-shrink-0 img-fluid post-author-img">
                                <div class="post-meta">
                                    <p class="post-author">Allisa Mayer</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Jun 5, 2022</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="feature-news-item" data-aos="zoom-in" data-aos-delay="200">
                        <article>

                            <div class="post-img">
                                <img src="{{asset('')}}assets/frontend/img/blog/blog-post-3.webp" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">Entertainment</p>

                            <h2 class="title">
                                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="{{asset('')}}assets/frontend/img/person/person-m-10.webp" alt="" class="flex-shrink-0 img-fluid post-author-img">
                                <div class="post-meta">
                                    <p class="post-author">Mark Dower</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Jun 22, 2022</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="feature-news-item" data-aos="zoom-in" data-aos-delay="200">
                        <article>

                            <div class="post-img">
                                <img src="{{asset('')}}assets/frontend/img/blog/blog-post-4.webp" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">Sports</p>

                            <h2 class="title">
                                <a href="blog-details.html">Non rem rerum nam cum quo minus olor distincti</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="{{asset('')}}assets/frontend/img/person/person-f-14.webp" alt="" class="flex-shrink-0 img-fluid post-author-img">
                                <div class="post-meta">
                                    <p class="post-author">Lisa Neymar</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Jun 30, 2022</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="feature-news-item" data-aos="zoom-in" data-aos-delay="200">
                        <article>

                            <div class="post-img">
                                <img src="{{asset('')}}assets/frontend/img/blog/blog-post-5.webp" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">Politics</p>

                            <h2 class="title">
                                <a href="blog-details.html">Accusamus quaerat aliquam qui debitis facilis consequatur</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="{{asset('')}}assets/frontend/img/person/person-m-11.webp" alt="" class="flex-shrink-0 img-fluid post-author-img">
                                <div class="post-meta">
                                    <p class="post-author">Denis Peterson</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Jan 30, 2022</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div>
                </div>

            </div>

            <div class="swiper-navigation">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

        </div>

    </div>

</section>
