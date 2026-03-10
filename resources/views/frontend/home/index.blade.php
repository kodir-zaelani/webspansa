@extends('layouts.front')
@section('title', $title ?? 'Beranda')
@section('content')
@include('frontend.partials.main-banner')
@include('frontend.partials.main-hero')
@include('frontend.home.main-featured-news')
@include('frontend.home.main-latest-news')

<section id="about" class="about section">

    <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>

    <div class="container">

        <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <h3>Voluptatem dignissimos provident laboris nisi ut aliquip ex ea commodo</h3>
                <img src="{{asset('')}}assets/frontend/img/about.jpg" class="mb-4 img-fluid rounded-4" alt="">
                <p>Ut fugiat ut sunt quia veniam. Voluptate perferendis perspiciatis quod nisi et. Placeat debitis quia recusandae odit et consequatur voluptatem. Dignissimos pariatur consectetur fugiat voluptas ea.</p>
                <p>Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo officia vel. Blanditiis eligendi possimus et in cum. Quidem eos ut sint rem veniam qui. Ut ut repellendus nobis tempore doloribus debitis explicabo similique sit. Accusantium sed ut omnis beatae neque deleniti repellendus.</p>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                <div class="content ps-0 ps-lg-5">
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle-fill"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                    </ul>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                    </p>

                    <div class="mt-4 position-relative">
                        <img src="{{asset('')}}assets/frontend/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section id="why-us" class="why-us section">

    <div class="container">
        <div class="row gy-4">
            <div class="container section-title" data-aos="fade-up">
                <h2>Program Unggulan</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card-item">
                    <span>01</span>
                    <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                    <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card-item">
                    <span>02</span>
                    <h4><a href="" class="stretched-link">Repellat Nihil</a></h4>
                    <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card-item">
                    <span>03</span>
                    <h4><a href="" class="stretched-link">Ad ad velit qui</a></h4>
                    <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
                </div>
            </div>

        </div>

    </div>

</section>


<section id="stats" class="stats section light-background">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                <i class="bi bi-emoji-smile"></i>
                <div class="stats-item">
                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Happy Clients</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                <i class="bi bi-journal-richtext"></i>
                <div class="stats-item">
                    <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Projects</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                <i class="bi bi-headset"></i>
                <div class="stats-item">
                    <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Hours Of Support</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                <i class="bi bi-people"></i>
                <div class="stats-item">
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Hard Workers</p>
                </div>
            </div>

        </div>

    </div>

</section>


<section id="services" class="services section">


    <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-activity"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Nesciunt Mete</h3>
                    </a>
                    <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-broadcast"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Eosle Commodi</h3>
                    </a>
                    <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-easel"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Ledo Markt</h3>
                    </a>
                    <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-bounding-box-circles"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Asperiores Commodit</h3>
                    </a>
                    <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
                    <a href="service-details.html" class="stretched-link"></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-calendar4-week"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Velit Doloremque</h3>
                    </a>
                    <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                    <a href="service-details.html" class="stretched-link"></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-chat-square-text"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Dolori Architecto</h3>
                    </a>
                    <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
                    <a href="service-details.html" class="stretched-link"></a>
                </div>
            </div>

        </div>

    </div>

</section>

<section id="team" class="team section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

            <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
                <div class="team-member">
                    <div class="member-img">
                        <img src="{{asset('')}}assets/frontend/img/team/team-1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                        <h4>Walter White</h4>
                        <span>Chief Executive Officer</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="400">
                <div class="team-member">
                    <div class="member-img">
                        <img src="{{asset('')}}assets/frontend/img/team/team-2.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                        <h4>Sarah Jhonson</h4>
                        <span>Product Manager</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
                <div class="team-member">
                    <div class="member-img">
                        <img src="{{asset('')}}assets/frontend/img/team/team-3.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                        <h4>William Anderson</h4>
                        <span>CTO</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

@endsection
