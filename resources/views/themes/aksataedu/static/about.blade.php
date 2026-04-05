@extends('layouts.appf')
@section('title', __($title ?? 'About Us'))
@section('content')
<section class="pb-20 bg-img pt-150" data-overlay="7" style="background-image: url({{asset('')}}assets/images/front-end-img/background/bg-8laptop.jpeg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h2 class="text-white page-title">{{ __('Tentang Kami')}}</h2>
                    <ol class="bg-transparent breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-50">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <h2 class="mb-10">Tentang Kami</h2>
                <h4 class="fw-400">{{$global_option ? $global_option->tagline : 'Belajar Terus menenus'}}</h4>
                <p class="fs-16">{!!$global_option->description ? $global_option->description : 'Description not available' !!}</p>
            </div>
            <div class="col-lg-6 col-12 position-relative">
                <div class="popup-vdo mt-30 mt-md-0">
                    <img src="{{$global_option->bg_headerThumbUrl ? $global_option->bg_headerThumbUrl : asset('uploads/images/no_image.png')}}" class="rounded img-fluid h-350" alt="">
                    <a href="{{$global_option->video }}" class="popup-youtube play-vdo-bt waves-effect waves-circle btn btn-circle btn-primary btn-lg"><i class="mdi mdi-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-50">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="px-20 py-10 bg-white side-block">
                    <div class="widget">
                        <h4 class=" bb-1">Pimpinan</h4>
                        <div class="text-center box-body">
                            <div>
                                <img src="{{asset('')}}uploads/images/users/P08cOJAJRHE5bXzdswxpwOClClAlJc0Dc71AvQwY.jpg" width="180" class="rounded bg-primary-light" alt="user">
                                <h5 class="mt-20 mb-0">Prof. Dr. Abdul Kodir Zaelani, ST., M.Si</h5>
                            </div>
                        </div>
                    </div>
                    <div class="widget">
                        <h4 class="pb-15 mb-25 bb-1">Courses Levels</h4>
                        <ul class="list-unstyled">
                            <li>
                                <input type="checkbox" id="levels_1" class="filled-in">
                                <label for="levels_1" class="form-label">
                                    Starter
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" id="levels_2" class="filled-in">
                                <label for="levels_2" class="form-label">
                                    Interpose
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" id="levels_3" class="filled-in">
                                <label for="levels_3" class="form-label">
                                    Advance
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h4 class="pb-15 mb-25 bb-1">Courses Classes Type</h4>
                        <ul class="list-unstyled">
                            <li>
                                <input type="checkbox" id="type_1" class="filled-in">
                                <label for="type_1" class="form-label">
                                    Online
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" id="type_2" class="filled-in">
                                <label for="type_2" class="form-label">
                                    Offline
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h4 class="pb-15 mb-25 bb-1">Top Rated</h4>
                        <ul class="list-unstyled">
                            <li>
                                <input type="checkbox" id="rated_1" class="filled-in">
                                <label for="rated_1" class="d-flex justify-content-between align-items-center form-label">
                                    More then
                                    <ul class="cours-star">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                    </ul>
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" id="rated_2" class="filled-in">
                                <label for="rated_2" class="d-flex justify-content-between align-items-center form-label">
                                    More then
                                    <ul class="cours-star">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" id="rated_3" class="filled-in">
                                <label for="rated_3" class="d-flex justify-content-between align-items-center form-label">
                                    More then
                                    <ul class="cours-star">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="mb-20 widget">
                        <h4 class="pb-15 mb-25 bb-1">Recent Courses</h4>
                        <div class="clearfix recent-post">
                            <div class="recent-post-image">
                                <img class="img-fluid" src="../images/front-end-img/courses/cor-logo-1.png" alt="">
                            </div>
                            <div class="recent-post-info">
                                <a href="#">Lorem Ipsum is simply dummy text of the printing.</a>
                                <span><i class="fa fa-calendar-o"></i> Oct 1, 2020</span>
                            </div>
                        </div>
                        <div class="clearfix recent-post">
                            <div class="recent-post-image">
                                <img class="img-fluid" src="../images/front-end-img/courses/cor-logo-2.png" alt="">
                            </div>
                            <div class="recent-post-info">
                                <a href="#">Lorem Ipsum is simply dummy text of the printing.</a>
                                <span><i class="fa fa-calendar-o"></i> Oct 11, 2020</span>
                            </div>
                        </div>
                        <div class="clearfix recent-post">
                            <div class="recent-post-image">
                                <img class="img-fluid" src="../images/front-end-img/courses/cor-logo-3.png" alt="">
                            </div>
                            <div class="recent-post-info">
                                <a href="#">Lorem Ipsum is simply dummy text of the printing.</a>
                                <span><i class="fa fa-calendar-o"></i> Oct 22, 2020</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget">
                    <h4 class="mt-40 mb-20">Testimonials</h4>
                    <div class="owl-carousel" data-nav-dots="false" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
                        <div class="item">
                            <div class="testimonial-widget">
                                <div class="testimonial-content">
                                    <p>In odio metus, porta vitae neque vitae, faucibus viverra orci. Quisque in lorem aliquam, ullamcorper turpis a, aliquam dui. In accumsan aliquam viverra.</p>
                                </div>
                                <div class="mt-20 testimonial-info">
                                    <div class="testimonial-avtar">
                                        <img class="img-fluid" src="../images/avatar/1.jpg" alt="">
                                    </div>
                                    <div class="testimonial-name">
                                        <strong>Johen Doe</strong>
                                        <span>Project Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-widget">
                                <div class="testimonial-content">
                                    <p>Morbi condimentum leo eu lacinia accumsan. Phasellus cursus rhoncus elit, mattis convallis sapien efficitur non phasellus et erat sapien phasellus. </p>
                                </div>
                                <div class="mt-20 testimonial-info">
                                    <div class="testimonial-avtar">
                                        <img class="img-fluid" src="../images/avatar/2.jpg" alt="">
                                    </div>
                                    <div class="testimonial-name">
                                        <strong>Johen Doe</strong>
                                        <span>Design</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-widget">
                                <div class="testimonial-content">
                                    <p>In odio metus, porta vitae neque vitae, faucibus viverra orci. Quisque in lorem aliquam, ullamcorper turpis a, aliquam dui. In accumsan aliquam viverra.</p>
                                </div>
                                <div class="mt-20 testimonial-info">
                                    <div class="testimonial-avtar">
                                        <img class="img-fluid" src="../images/avatar/3.jpg" alt="">
                                    </div>
                                    <div class="testimonial-name">
                                        <strong>Johen Doe</strong>
                                        <span>Project Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-widget">
                                <div class="testimonial-content">
                                    <p>Morbi condimentum leo eu lacinia accumsan. Phasellus cursus rhoncus elit, mattis convallis sapien efficitur non phasellus et erat sapien phasellus. </p>
                                </div>
                                <div class="mt-20 testimonial-info">
                                    <div class="testimonial-avtar">
                                        <img class="img-fluid" src="../images/avatar/4.jpg" alt="">
                                    </div>
                                    <div class="testimonial-name">
                                        <strong>Johen Doe</strong>
                                        <span>Design</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
                <div class="box">
                    <div class="box-body">
                        <div class="p-10 mb-20 rounded bg-light d-lg-flex justify-content-between align-items-center">
                            <p class="mb-20 mb-lg-0">Showing 1 to 12 of 36 entries</p>
                            <div class="d-flex justify-lg-content-end align-items-center">
                                <select class="form-select w-150">
                                    <option selected>Sort By...</option>
                                    <option value="1">New</option>
                                    <option value="2">Top Rated</option>
                                    <option value="3">Populer</option>
                                </select>
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="mx-5 nav-item" role="presentation">
                                        <a class="nav-link b-0 fs-18" id="pills-grid-tab" data-bs-toggle="pill" href="#pills-grid" role="tab" aria-controls="pills-grid" aria-selected="false">
                                            <i class="fa fa-th me-0"></i>
                                        </a>
                                    </li>
                                    <li class="mx-5 nav-item" role="presentation">
                                        <a class="nav-link active b-0 fs-18" id="pills-list-tab" data-bs-toggle="pill" href="#pills-list" role="tab" aria-controls="pills-list" aria-selected="true">
                                            <i class="fa fa-list me-0"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-list" role="tabpanel" aria-labelledby="pills-list-tab">
                                <div class="card rounded-0">
                                    <div class="d-lg-flex">
                                        <div class="position-relative w-lg-400">
                                            <a href="#">
                                                <img class="" src="../images/front-end-img/courses/9.jpg" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                        </div>
                                        <div class="mb-0 card no-border no-shadow w-p100">
                                            <div class="card-body">
                                                <div class="cour-stac d-lg-flex align-items-center text-fade">
                                                    <div class="d-flex align-items-center">
                                                        <p>Start Date 4th Nov..</p>
                                                        <p class="lt-sp">|</p>
                                                        <p>Johen doe</p>
                                                        <p class="lt-sp">|</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <p>English, Spanish</p>
                                                        <p class="lt-sp">|</p>
                                                        <span class="badge badge-success">Online</span>
                                                    </div>
                                                </div>
                                                <h3 class="mt-20 card-title">It &amp; software</h3>
                                                <p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(42)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0">
                                    <div class="d-lg-flex">
                                        <div class="position-relative w-lg-400">
                                            <a href="#">
                                                <img class="" src="../images/front-end-img/courses/4.jpg" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                        </div>
                                        <div class="mb-0 card no-border no-shadow w-p100">
                                            <div class="card-body">
                                                <div class="cour-stac d-lg-flex align-items-center text-fade">
                                                    <div class="d-flex align-items-center">
                                                        <p>Start Date 4th Nov..</p>
                                                        <p class="lt-sp">|</p>
                                                        <p>Johen doe</p>
                                                        <p class="lt-sp">|</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <p>English, Spanish</p>
                                                        <p class="lt-sp">|</p>
                                                        <span class="badge badge-success">Online</span>
                                                    </div>
                                                </div>
                                                <h3 class="mt-20 card-title">Programming</h3>
                                                <p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(42)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0">
                                    <div class="d-lg-flex">
                                        <div class="position-relative w-lg-400">
                                            <a href="#">
                                                <img class="" src="../images/front-end-img/courses/5.jpg" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                        </div>
                                        <div class="mb-0 card no-border no-shadow w-p100">
                                            <div class="card-body">
                                                <div class="cour-stac d-lg-flex align-items-center text-fade">
                                                    <div class="d-flex align-items-center">
                                                        <p>Start Date 4th Nov..</p>
                                                        <p class="lt-sp">|</p>
                                                        <p>Johen doe</p>
                                                        <p class="lt-sp">|</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <p>English, Spanish</p>
                                                        <p class="lt-sp">|</p>
                                                        <span class="badge badge-success">Online</span>
                                                    </div>
                                                </div>
                                                <h3 class="mt-20 card-title">Photography</h3>
                                                <p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(42)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0">
                                    <div class="d-lg-flex">
                                        <div class="position-relative w-lg-400">
                                            <a href="#">
                                                <img class="" src="../images/front-end-img/courses/1.jpg" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                        </div>
                                        <div class="mb-0 card no-border no-shadow w-p100">
                                            <div class="card-body">
                                                <div class="cour-stac d-lg-flex align-items-center text-fade">
                                                    <div class="d-flex align-items-center">
                                                        <p>Start Date 4th Nov..</p>
                                                        <p class="lt-sp">|</p>
                                                        <p>Johen doe</p>
                                                        <p class="lt-sp">|</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <p>English, Spanish</p>
                                                        <p class="lt-sp">|</p>
                                                        <span class="badge badge-success">Online</span>
                                                    </div>
                                                </div>
                                                <h3 class="mt-20 card-title">Manegement</h3>
                                                <p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(42)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0">
                                    <div class="d-lg-flex">
                                        <div class="position-relative w-lg-400">
                                            <a href="#">
                                                <img class="" src="../images/front-end-img/courses/2.jpg" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                        </div>
                                        <div class="mb-0 card no-border no-shadow w-p100">
                                            <div class="card-body">
                                                <div class="cour-stac d-lg-flex align-items-center text-fade">
                                                    <div class="d-flex align-items-center">
                                                        <p>Start Date 4th Nov..</p>
                                                        <p class="lt-sp">|</p>
                                                        <p>Johen doe</p>
                                                        <p class="lt-sp">|</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <p>English, Spanish</p>
                                                        <p class="lt-sp">|</p>
                                                        <span class="badge badge-success">Online</span>
                                                    </div>
                                                </div>
                                                <h3 class="mt-20 card-title">Networking</h3>
                                                <p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(42)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0">
                                    <div class="d-lg-flex">
                                        <div class="position-relative w-lg-400">
                                            <a href="#">
                                                <img class="" src="../images/front-end-img/courses/8.jpg" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                        </div>
                                        <div class="mb-0 card no-border no-shadow w-p100">
                                            <div class="card-body">
                                                <div class="cour-stac d-lg-flex align-items-center text-fade">
                                                    <div class="d-flex align-items-center">
                                                        <p>Start Date 4th Nov..</p>
                                                        <p class="lt-sp">|</p>
                                                        <p>Johen doe</p>
                                                        <p class="lt-sp">|</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <p>English, Spanish</p>
                                                        <p class="lt-sp">|</p>
                                                        <span class="badge badge-dark">Offline</span>
                                                    </div>
                                                </div>
                                                <h3 class="mt-20 card-title">Security</h3>
                                                <p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(42)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0">
                                    <div class="d-lg-flex">
                                        <div class="position-relative w-lg-400">
                                            <a href="#">
                                                <img class="" src="../images/front-end-img/courses/6.jpg" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                        </div>
                                        <div class="mb-0 card no-border no-shadow w-p100">
                                            <div class="card-body">
                                                <div class="cour-stac d-lg-flex align-items-center text-fade">
                                                    <div class="d-flex align-items-center">
                                                        <p>Start Date 4th Nov..</p>
                                                        <p class="lt-sp">|</p>
                                                        <p>Johen doe</p>
                                                        <p class="lt-sp">|</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <p>English, Spanish</p>
                                                        <p class="lt-sp">|</p>
                                                        <span class="badge badge-dark">Offline</span>
                                                    </div>
                                                </div>
                                                <h3 class="mt-20 card-title">Language</h3>
                                                <p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(42)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0">
                                    <div class="d-lg-flex">
                                        <div class="position-relative w-lg-400">
                                            <a href="#">
                                                <img class="" src="../images/front-end-img/courses/7.jpg" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                        </div>
                                        <div class="mb-0 card no-border no-shadow w-p100">
                                            <div class="card-body">
                                                <div class="cour-stac d-lg-flex align-items-center text-fade">
                                                    <div class="d-flex align-items-center">
                                                        <p>Start Date 4th Nov..</p>
                                                        <p class="lt-sp">|</p>
                                                        <p>Johen doe</p>
                                                        <p class="lt-sp">|</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <p>English, Spanish</p>
                                                        <p class="lt-sp">|</p>
                                                        <span class="badge badge-warning">Upcoming</span>
                                                    </div>
                                                </div>
                                                <h3 class="mt-20 card-title">Computer</h3>
                                                <p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(42)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0">
                                    <div class="d-lg-flex">
                                        <div class="position-relative w-lg-400">
                                            <a href="#">
                                                <img class="" src="../images/front-end-img/courses/11.jpg" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                        </div>
                                        <div class="mb-0 card no-border no-shadow w-p100">
                                            <div class="card-body">
                                                <div class="cour-stac d-lg-flex align-items-center text-fade">
                                                    <div class="d-flex align-items-center">
                                                        <p>Start Date 4th Nov..</p>
                                                        <p class="lt-sp">|</p>
                                                        <p>Johen doe</p>
                                                        <p class="lt-sp">|</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <p>English, Spanish</p>
                                                        <p class="lt-sp">|</p>
                                                        <span class="badge badge-warning">Upcoming</span>
                                                    </div>
                                                </div>
                                                <h3 class="mt-20 card-title">Law</h3>
                                                <p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(42)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-12">
                                        <div class="card">
                                            <img class="card-img-top" src="../images/front-end-img/courses/1.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <span class="badge badge-success">Online</span>
                                                <span class="badge badge-primary-light">English</span>
                                                <span class="badge badge-primary-light">Spanish</span>
                                                <div class="mt-20 cour-stac d-flex align-items-center text-fade">
                                                    <p>Start Date 4th Nov..</p>
                                                    <p class="lt-sp">|</p>
                                                    <p>Johen doe</p>
                                                </div>
                                                <h4 class="card-title justify-content-between d-flex align-items-center">Manegement</h4>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(42)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="card">
                                            <img class="card-img-top" src="../images/front-end-img/courses/9.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <span class="badge badge-success">Online</span>
                                                <span class="badge badge-primary-light">English</span>
                                                <span class="badge badge-primary-light">Spanish</span>
                                                <div class="mt-20 cour-stac d-flex align-items-center text-fade">
                                                    <p>Start Date 4th Nov..</p>
                                                    <p class="lt-sp">|</p>
                                                    <p>Johen doe</p>
                                                </div>
                                                <h4 class="card-title justify-content-between d-flex align-items-center">Networking</h4>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(42)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="card">
                                            <img class="card-img-top" src="../images/front-end-img/courses/8.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <span class="badge badge-dark">Offline</span>
                                                <span class="badge badge-primary-light">English</span>
                                                <span class="badge badge-primary-light">Spanish</span>
                                                <div class="mt-20 cour-stac d-flex align-items-center text-fade">
                                                    <p>Start Date 4th Nov..</p>
                                                    <p class="lt-sp">|</p>
                                                    <p>Johen doe</p>
                                                </div>
                                                <h4 class="card-title justify-content-between d-flex align-items-center">Security</h4>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(42)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="card">
                                            <img class="card-img-top" src="../images/front-end-img/courses/2.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <span class="badge badge-success">Online</span>
                                                <span class="badge badge-primary-light">English</span>
                                                <span class="badge badge-primary-light">Spanish</span>
                                                <div class="mt-20 cour-stac d-flex align-items-center text-fade">
                                                    <p>Start Date 4th Nov..</p>
                                                    <p class="lt-sp">|</p>
                                                    <p>Johen doe</p>
                                                </div>
                                                <h4 class="card-title justify-content-between d-flex align-items-center">Language</h4>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(42)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="card">
                                            <img class="card-img-top" src="../images/front-end-img/courses/10.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <span class="badge badge-success">Online</span>
                                                <span class="badge badge-primary-light">English</span>
                                                <span class="badge badge-primary-light">Spanish</span>
                                                <div class="mt-20 cour-stac d-flex align-items-center text-fade">
                                                    <p>Start Date 4th Nov..</p>
                                                    <p class="lt-sp">|</p>
                                                    <p>Johen doe</p>
                                                </div>
                                                <h4 class="card-title justify-content-between d-flex align-items-center">It &amp; software</h4>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(42)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="card">
                                            <img class="card-img-top" src="../images/front-end-img/courses/5.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <span class="badge badge-success">Online</span>
                                                <span class="badge badge-primary-light">English</span>
                                                <span class="badge badge-primary-light">Spanish</span>
                                                <div class="mt-20 cour-stac d-flex align-items-center text-fade">
                                                    <p>Start Date 4th Nov..</p>
                                                    <p class="lt-sp">|</p>
                                                    <p>Johen doe</p>
                                                </div>
                                                <h4 class="card-title justify-content-between d-flex align-items-center">Photography</h4>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(42)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="card">
                                            <img class="card-img-top" src="../images/front-end-img/courses/7.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <span class="badge badge-warning">Upcoming</span>
                                                <span class="badge badge-primary-light">English</span>
                                                <span class="badge badge-primary-light">Spanish</span>
                                                <div class="mt-20 cour-stac d-flex align-items-center text-fade">
                                                    <p>Start Date 4th Nov..</p>
                                                    <p class="lt-sp">|</p>
                                                    <p>Johen doe</p>
                                                </div>
                                                <h4 class="card-title justify-content-between d-flex align-items-center">Manegement</h4>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(42)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="card">
                                            <img class="card-img-top" src="../images/front-end-img/courses/8.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <span class="badge badge-warning">Upcoming</span>
                                                <span class="badge badge-primary-light">English</span>
                                                <span class="badge badge-primary-light">Spanish</span>
                                                <div class="mt-20 cour-stac d-flex align-items-center text-fade">
                                                    <p>Start Date 4th Nov..</p>
                                                    <p class="lt-sp">|</p>
                                                    <p>Johen doe</p>
                                                </div>
                                                <h4 class="card-title justify-content-between d-flex align-items-center">Networking</h4>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(42)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="card">
                                            <img class="card-img-top" src="../images/front-end-img/courses/9.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <span class="badge badge-dark">Offline</span>
                                                <span class="badge badge-primary-light">English</span>
                                                <span class="badge badge-primary-light">Spanish</span>
                                                <div class="mt-20 cour-stac d-flex align-items-center text-fade">
                                                    <p>Start Date 4th Nov..</p>
                                                    <p class="lt-sp">|</p>
                                                    <p>Johen doe</p>
                                                </div>
                                                <h4 class="card-title justify-content-between d-flex align-items-center">Security</h4>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(42)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="card">
                                            <img class="card-img-top" src="../images/front-end-img/courses/10.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <span class="badge badge-warning">Upcoming</span>
                                                <span class="badge badge-primary-light">English</span>
                                                <span class="badge badge-primary-light">Spanish</span>
                                                <div class="mt-20 cour-stac d-flex align-items-center text-fade">
                                                    <p>Start Date 4th Nov..</p>
                                                    <p class="lt-sp">|</p>
                                                    <p>Johen doe</p>
                                                </div>
                                                <h4 class="card-title justify-content-between d-flex align-items-center">Language</h4>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(42)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="card">
                                            <img class="card-img-top" src="../images/front-end-img/courses/11.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <span class="badge badge-success">Online</span>
                                                <span class="badge badge-primary-light">English</span>
                                                <span class="badge badge-primary-light">Spanish</span>
                                                <div class="mt-20 cour-stac d-flex align-items-center text-fade">
                                                    <p>Start Date 4th Nov..</p>
                                                    <p class="lt-sp">|</p>
                                                    <p>Johen doe</p>
                                                </div>
                                                <h4 class="card-title justify-content-between d-flex align-items-center">It &amp; software</h4>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(42)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="card">
                                            <img class="card-img-top" src="../images/front-end-img/courses/12.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <span class="badge badge-dark">Offline</span>
                                                <span class="badge badge-primary-light">English</span>
                                                <span class="badge badge-primary-light">Spanish</span>
                                                <div class="mt-20 cour-stac d-flex align-items-center text-fade">
                                                    <p>Start Date 4th Nov..</p>
                                                    <p class="lt-sp">|</p>
                                                    <p>Johen doe</p>
                                                </div>
                                                <h4 class="card-title justify-content-between d-flex align-items-center">Photography</h4>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(42)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div aria-label="Page navigation example">
                            <ul class="mb-0 pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="position-sticky t-100">
                    <div class="box box-widget widget-user-2">
                        <div class="text-center box-body">
                            <h4 class="box-title text-primary">Pimpinan</h4>
                            <hr class="my-15">
                            <div class="mt-20">
                                <img src="{{asset('')}}uploads/images/users/P08cOJAJRHE5bXzdswxpwOClClAlJc0Dc71AvQwY.jpg" width="180" class="rounded bg-primary-light" alt="user">
                                <h5 class="mt-20 mb-0">Prof. Dr. Abdul Kodir Zaelani, ST., M.Si</h5>
                            </div>
                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav d-block nav-stacked fs-16" id="pills-tab23" role="tablist">
                                <li class="nav-item bb-1">
                                    <a class="py-10 nav-link active" id="pills-edit-tab" data-bs-toggle="pill" href="#pills-edit" role="tab" aria-controls="pills-edit" aria-selected="true">
                                        <span class=" me-10 icon-Position1"><span class="path1"></span><span class="path2"></span></span>Visi, Misi & Tujuan
                                    </a>
                                </li>
                                <li class="nav-item bb-1">
                                    <a class="py-10 nav-link" id="pills-courses-tab" data-bs-toggle="pill" href="#pills-courses" role="tab" aria-controls="pills-courses" aria-selected="true">
                                        <span class="me-10 icon-Book-open"><span class="path1"></span><span class="path2"></span></span>My Courses
                                    </a>
                                </li>
                                <li class="nav-item bb-1">
                                    <a class="py-10 nav-link" id="pills-favorite-tab" data-bs-toggle="pill" href="#pills-favorite" role="tab" aria-controls="pills-favorite" aria-selected="true">
                                        <span class="me-10 icon-Fan"></span>My Favorite
                                    </a>
                                </li>
                                <li class="nav-item bb-1">
                                    <a class="py-10 nav-link" id="pills-managed-tab" data-bs-toggle="pill" href="#pills-managed" role="tab" aria-controls="pills-managed" aria-selected="true">
                                        <span class="me-10 icon-Book"></span>Managed Courses
                                    </a>
                                </li>
                                <li class="nav-item bb-1">
                                    <a class="py-10 nav-link" id="pills-payments-tab" data-bs-toggle="pill" href="#pills-payments" role="tab" aria-controls="pills-payments" aria-selected="true">
                                        <span class="me-10 icon-Money"><span class="path1"></span><span class="path2"></span></span>Payments
                                    </a>
                                </li>
                                <li class="nav-item bb-1">
                                    <a class="py-10 nav-link" id="pills-calendar-tab" data-bs-toggle="pill" href="#pills-calendar" role="tab" aria-controls="pills-calendar" aria-selected="true">
                                        <span class="me-10 icon-Layout-grid"><span class="path1"></span><span class="path2"></span></span>Calendar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="py-10 nav-link" href="login.html">
                                        <span class="me-10 icon-Unlock"></span>Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-15 bt-1 bb-1">
                            <div class="text-center row">
                                <div class="col-6 be-1">
                                    <a href="#" class="font-medium link d-flex align-items-center justify-content-center">
                                        <span class="icon-Mail fs-20 me-5"></span>Message</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="font-medium link d-flex align-items-center justify-content-center">
                                            <span class="icon-Code1 fs-20 me-5"><span class="path1"></span><span class="path2"></span></span>Portfolio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-body">
                                    <div class="mb-20 flexbox align-items-baseline">
                                        <h6 class="text-uppercase ls-2">Group</h6>
                                        <small>20</small>
                                    </div>
                                    <div class="gap-items-2 gap-y">
                                        <a class="avatar" href="#"><img src="../images/avatar/1.jpg" alt="..."></a>
                                        <a class="avatar" href="#"><img src="../images/avatar/3.jpg" alt="..."></a>
                                        <a class="avatar" href="#"><img src="../images/avatar/4.jpg" alt="..."></a>
                                        <a class="avatar" href="#"><img src="../images/avatar/5.jpg" alt="..."></a>
                                        <a class="avatar avatar-more" href="#">+15</a>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <a class="text-uppercase d-blockls-1 text-fade" href="#">Invite People</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="tab-content" id="pills-tabContent23">
                                    <div class="tab-pane fade show active" id="pills-edit" role="tabpanel" aria-labelledby="pills-edit-tab">
                                        <div class="row">
                                            <div class="col-12">
                                                <form class="form">
                                                    <div>
                                                        <h4 class="box-title text-primary"><i class="ti-target me-15"></i> Visi</h4>
                                                        <hr class="my-15">
                                                        <div class="row justify-content-center">
                                                            <div class="col-md-8 ">
                                                                <figure class="text-center">
                                                                    <blockquote >
                                                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                                                        <span class="fs-18">Terwujudnya  Lulusan Unggul Dalam IPTEK, Karakter, Wawasan Global, dan  Peduli Lingkungan Berdasarkan  Iman Dan Taqwa</span>
                                                                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                                                                    </blockquote>
                                                                    <figcaption class="fs-16">
                                                                        <cite title="Source Title">-SMPN 1 Samarinda-</cite>
                                                                    </figcaption>
                                                                </figure>
                                                            </div>
                                                        </div>

                                                        <h4 class="box-title text-primary mt-30"><i class="ti-post me-15"></i> Misi</h4>
                                                        <hr class="my-15">
                                                        <div class="row">
                                                            <div class="col-12">

                                                            </div>
                                                        </div>
                                                        <h4 class="box-title text-primary mt-30"><i class="ti-share me-15"></i> Social Profile</h4>
                                                        <hr class="my-15">
                                                        <div class="form-group">
                                                            <label class="form-label">Facebook</label>
                                                            <input class="form-control" type="text" placeholder="Facebook">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Twitter</label>
                                                            <input class="form-control" type="text" placeholder="Twitter">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Instagram</label>
                                                            <input class="form-control" type="text" placeholder="Instagram">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Linkedin</label>
                                                            <input class="form-control" type="text" placeholder="Linkedin">
                                                        </div>
                                                        <hr class="my-15">
                                                    </div>
                                                    <div class="d-flex justify-content-end gap-items-2">
                                                        <button type="submit" class="btn btn-success">
                                                            <i class="ti-save-alt"></i> Save changes
                                                        </button>
                                                        <button type="button" class="btn btn-danger">
                                                            <i class="ti-trash"></i> Cancel
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-courses" role="tabpanel" aria-labelledby="pills-courses-tab">
                                        <h4 class="mb-0 box-title">
                                            My Courses
                                        </h4>
                                        <hr>
                                        <div class="table-responsive">
                                            <table class="table no-border">
                                                <thead>
                                                    <tr class="text-uppercase bg-lightest">
                                                        <th><span class="text-dark">Coursed</span></th>
                                                        <th><span class="text-fade">Category</span></th>
                                                        <th><span class="text-fade">Fees</span></th>
                                                        <th><span class="text-fade">Faculty</span></th>
                                                        <th><span class="text-fade">Status</span></th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-20">
                                                                    <div class="bg-img h-50 w-50" style="background-image: url(../images/front-end-img/courses/1.jpg)"></div>
                                                                </div>

                                                                <div>
                                                                    <a href="#" class="mb-1 text-dark fw-600 hover-primary fs-16">It Networking</a>
                                                                    <span class="text-fade d-block">Pharetra, Nulla</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            Programming
                                                        </td>
                                                        <td>
                                                            $45k
                                                        </td>
                                                        <td>
                                                            Sophia Pharetra
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-success badge-lg">Approved</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end gap-items-1">
                                                                <a href="#" class="waves-effect waves-light btn btn-primary btn-xs btn-circle"><span class="icon-Bookmark"></span></a>
                                                                <a href="#" class="waves-effect waves-light btn btn-primary btn-xs btn-circle"><span class="icon-Arrow-right"><span class="path1"></span><span class="path2"></span></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-20">
                                                                    <div class="bg-img h-50 w-50" style="background-image: url(../images/front-end-img/courses/2.jpg)"></div>
                                                                </div>

                                                                <div>
                                                                    <a href="#" class="mb-1 text-dark fw-600 hover-primary fs-16">Medical</a>
                                                                    <span class="text-fade d-block">Pharetra, Nulla</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            Programming
                                                        </td>
                                                        <td>
                                                            $45k
                                                        </td>
                                                        <td>
                                                            Sophia Pharetra
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-dark badge-lg">Expired</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end gap-items-1">
                                                                <a href="#" class="waves-effect waves-light btn btn-primary btn-xs btn-circle"><span class="icon-Bookmark"></span></a>
                                                                <a href="#" class="waves-effect waves-light btn btn-primary btn-xs btn-circle"><span class="icon-Arrow-right"><span class="path1"></span><span class="path2"></span></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-20">
                                                                    <div class="bg-img h-50 w-50" style="background-image: url(../images/front-end-img/courses/3.jpg)"></div>
                                                                </div>

                                                                <div>
                                                                    <a href="#" class="mb-1 text-dark fw-600 hover-primary fs-16">General</a>
                                                                    <span class="text-fade d-block">Pharetra, Nulla</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            Programming
                                                        </td>
                                                        <td>
                                                            $45k
                                                        </td>
                                                        <td>
                                                            Sophia Pharetra
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-warning badge-lg">Featured</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end gap-items-1">
                                                                <a href="#" class="waves-effect waves-light btn btn-primary btn-xs btn-circle"><span class="icon-Bookmark"></span></a>
                                                                <a href="#" class="waves-effect waves-light btn btn-primary btn-xs btn-circle"><span class="icon-Arrow-right"><span class="path1"></span><span class="path2"></span></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-20">
                                                                    <div class="bg-img h-50 w-50" style="background-image: url(../images/front-end-img/courses/4.jpg)"></div>
                                                                </div>

                                                                <div>
                                                                    <a href="#" class="mb-1 text-dark fw-600 hover-primary fs-16">IT & Software</a>
                                                                    <span class="text-fade d-block">Pharetra, Nulla</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            Programming
                                                        </td>
                                                        <td>
                                                            $45k
                                                        </td>
                                                        <td>
                                                            Sophia Pharetra
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-dark badge-lg">Expired</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end gap-items-1">
                                                                <a href="#" class="waves-effect waves-light btn btn-primary btn-xs btn-circle"><span class="icon-Bookmark"></span></a>
                                                                <a href="#" class="waves-effect waves-light btn btn-primary btn-xs btn-circle"><span class="icon-Arrow-right"><span class="path1"></span><span class="path2"></span></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-20">
                                                                    <div class="bg-img h-50 w-50" style="background-image: url(../images/front-end-img/courses/5.jpg)"></div>
                                                                </div>

                                                                <div>
                                                                    <a href="#" class="mb-1 text-dark fw-600 hover-primary fs-16">Programming Language</a>
                                                                    <span class="text-fade d-block">Pharetra, Nulla</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            Programming
                                                        </td>
                                                        <td>
                                                            $45k
                                                        </td>
                                                        <td>
                                                            Sophia Pharetra
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-warning badge-lg">Featured</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end gap-items-1">
                                                                <a href="#" class="waves-effect waves-light btn btn-primary btn-xs btn-circle"><span class="icon-Bookmark"></span></a>
                                                                <a href="#" class="waves-effect waves-light btn btn-primary btn-xs btn-circle"><span class="icon-Arrow-right"><span class="path1"></span><span class="path2"></span></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-20">
                                                                    <div class="bg-img h-50 w-50" style="background-image: url(../images/front-end-img/courses/6.jpg)"></div>
                                                                </div>

                                                                <div>
                                                                    <a href="#" class="mb-1 text-dark fw-600 hover-primary fs-16">Technology</a>
                                                                    <span class="text-fade d-block">Pharetra, Nulla</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            Programming
                                                        </td>
                                                        <td>
                                                            $45k
                                                        </td>
                                                        <td>
                                                            Sophia Pharetra
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-info badge-lg">Active</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end gap-items-1">
                                                                <a href="#" class="waves-effect waves-light btn btn-primary btn-xs btn-circle"><span class="icon-Bookmark"></span></a>
                                                                <a href="#" class="waves-effect waves-light btn btn-primary btn-xs btn-circle"><span class="icon-Arrow-right"><span class="path1"></span><span class="path2"></span></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-20">
                                                                    <div class="bg-img h-50 w-50" style="background-image: url(../images/front-end-img/courses/11.jpg)"></div>
                                                                </div>

                                                                <div>
                                                                    <a href="#" class="mb-1 text-dark fw-600 hover-primary fs-16">Programming</a>
                                                                    <span class="text-fade d-block">Pharetra, Nulla</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            Programming
                                                        </td>
                                                        <td>
                                                            $45k
                                                        </td>
                                                        <td>
                                                            Sophia Pharetra
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-success badge-lg">Approved</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end gap-items-1">
                                                                <a href="#" class="waves-effect waves-light btn btn-primary btn-xs btn-circle"><span class="icon-Bookmark"></span></a>
                                                                <a href="#" class="waves-effect waves-light btn btn-primary btn-xs btn-circle"><span class="icon-Arrow-right"><span class="path1"></span><span class="path2"></span></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-20">
                                                                    <div class="bg-img h-50 w-50" style="background-image: url(../images/front-end-img/courses/8.jpg)"></div>
                                                                </div>

                                                                <div>
                                                                    <a href="#" class="mb-1 text-dark fw-600 hover-primary fs-16">Business</a>
                                                                    <span class="text-fade d-block">Pharetra, Nulla</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            Programming
                                                        </td>
                                                        <td>
                                                            $45k
                                                        </td>
                                                        <td>
                                                            Sophia Pharetra
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-info badge-lg">Active</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end gap-items-1">
                                                                <a href="#" class="waves-effect waves-light btn btn-primary btn-xs btn-circle"><span class="icon-Bookmark"></span></a>
                                                                <a href="#" class="waves-effect waves-light btn btn-primary btn-xs btn-circle"><span class="icon-Arrow-right"><span class="path1"></span><span class="path2"></span></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-20">
                                                                    <div class="bg-img h-50 w-50" style="background-image: url(../images/front-end-img/courses/9.jpg)"></div>
                                                                </div>

                                                                <div>
                                                                    <a href="#" class="mb-1 text-dark fw-600 hover-primary fs-16">Ui Design</a>
                                                                    <span class="text-fade d-block">Pharetra, Nulla</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            Programming
                                                        </td>
                                                        <td>
                                                            $45k
                                                        </td>
                                                        <td>
                                                            Sophia Pharetra
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-success badge-lg">Approved</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end gap-items-1">
                                                                <a href="#" class="waves-effect waves-light btn btn-primary btn-xs btn-circle"><span class="icon-Bookmark"></span></a>
                                                                <a href="#" class="waves-effect waves-light btn btn-primary btn-xs btn-circle"><span class="icon-Arrow-right"><span class="path1"></span><span class="path2"></span></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-20">
                                                                    <div class="bg-img h-50 w-50" style="background-image: url(../images/front-end-img/courses/10.jpg)"></div>
                                                                </div>

                                                                <div>
                                                                    <a href="#" class="mb-1 text-dark fw-600 hover-primary fs-16">Graphic design</a>
                                                                    <span class="text-fade d-block">Pharetra, Nulla</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            Programming
                                                        </td>
                                                        <td>
                                                            $45k
                                                        </td>
                                                        <td>
                                                            Sophia Pharetra
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-success badge-lg">Approved</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end gap-items-1">
                                                                <a href="#" class="waves-effect waves-light btn btn-primary btn-xs btn-circle"><span class="icon-Bookmark"></span></a>
                                                                <a href="#" class="waves-effect waves-light btn btn-primary btn-xs btn-circle"><span class="icon-Arrow-right"><span class="path1"></span><span class="path2"></span></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-favorite" role="tabpanel" aria-labelledby="pills-favorite-tab">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="mb-0 box-title">
                                                    My Favorite Courses
                                                </h4>
                                                <hr>
                                            </div>
                                            <div class="col-lg-4 col-12">
                                                <div class="card">
                                                    <img class="card-img-top" src="../images/front-end-img/courses/1.jpg" alt="Card image cap">
                                                    <div class="card-body">
                                                        <span class="badge badge-success">Online</span>
                                                        <span class="badge badge-primary-light">English</span>
                                                        <span class="badge badge-primary-light">Spanish</span>
                                                        <div class="mt-20 cour-stac d-flex align-items-center text-fade">
                                                            <p>Start Date 4th Nov..</p>
                                                            <p class="lt-sp">|</p>
                                                            <p>Johen doe</p>
                                                        </div>
                                                        <h4 class="card-title justify-content-between d-flex align-items-center">Manegement</h4>
                                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                    </div>
                                                    <div class="card-footer justify-content-between d-flex align-items-center">
                                                        <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                        <span>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star-half text-warning"></i>
                                                            <span class="text-muted ms-2">(42)</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-12">
                                                <div class="card">
                                                    <img class="card-img-top" src="../images/front-end-img/courses/9.jpg" alt="Card image cap">
                                                    <div class="card-body">
                                                        <span class="badge badge-success">Online</span>
                                                        <span class="badge badge-primary-light">English</span>
                                                        <span class="badge badge-primary-light">Spanish</span>
                                                        <div class="mt-20 cour-stac d-flex align-items-center text-fade">
                                                            <p>Start Date 4th Nov..</p>
                                                            <p class="lt-sp">|</p>
                                                            <p>Johen doe</p>
                                                        </div>
                                                        <h4 class="card-title justify-content-between d-flex align-items-center">Networking</h4>
                                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                    </div>
                                                    <div class="card-footer justify-content-between d-flex align-items-center">
                                                        <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                        <span>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star-half text-warning"></i>
                                                            <span class="text-muted ms-2">(42)</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-12">
                                                <div class="card">
                                                    <img class="card-img-top" src="../images/front-end-img/courses/8.jpg" alt="Card image cap">
                                                    <div class="card-body">
                                                        <span class="badge badge-dark">Offline</span>
                                                        <span class="badge badge-primary-light">English</span>
                                                        <span class="badge badge-primary-light">Spanish</span>
                                                        <div class="mt-20 cour-stac d-flex align-items-center text-fade">
                                                            <p>Start Date 4th Nov..</p>
                                                            <p class="lt-sp">|</p>
                                                            <p>Johen doe</p>
                                                        </div>
                                                        <h4 class="card-title justify-content-between d-flex align-items-center">Security</h4>
                                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                    </div>
                                                    <div class="card-footer justify-content-between d-flex align-items-center">
                                                        <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                        <span>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star-half text-warning"></i>
                                                            <span class="text-muted ms-2">(42)</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-12">
                                                <div class="card">
                                                    <img class="card-img-top" src="../images/front-end-img/courses/2.jpg" alt="Card image cap">
                                                    <div class="card-body">
                                                        <span class="badge badge-success">Online</span>
                                                        <span class="badge badge-primary-light">English</span>
                                                        <span class="badge badge-primary-light">Spanish</span>
                                                        <div class="mt-20 cour-stac d-flex align-items-center text-fade">
                                                            <p>Start Date 4th Nov..</p>
                                                            <p class="lt-sp">|</p>
                                                            <p>Johen doe</p>
                                                        </div>
                                                        <h4 class="card-title justify-content-between d-flex align-items-center">Language</h4>
                                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                    </div>
                                                    <div class="card-footer justify-content-between d-flex align-items-center">
                                                        <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                        <span>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star-half text-warning"></i>
                                                            <span class="text-muted ms-2">(42)</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-12">
                                                <div class="card">
                                                    <img class="card-img-top" src="../images/front-end-img/courses/10.jpg" alt="Card image cap">
                                                    <div class="card-body">
                                                        <span class="badge badge-success">Online</span>
                                                        <span class="badge badge-primary-light">English</span>
                                                        <span class="badge badge-primary-light">Spanish</span>
                                                        <div class="mt-20 cour-stac d-flex align-items-center text-fade">
                                                            <p>Start Date 4th Nov..</p>
                                                            <p class="lt-sp">|</p>
                                                            <p>Johen doe</p>
                                                        </div>
                                                        <h4 class="card-title justify-content-between d-flex align-items-center">It &amp; software</h4>
                                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                    </div>
                                                    <div class="card-footer justify-content-between d-flex align-items-center">
                                                        <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                        <span>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star-half text-warning"></i>
                                                            <span class="text-muted ms-2">(42)</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-12">
                                                <div class="card">
                                                    <img class="card-img-top" src="../images/front-end-img/courses/5.jpg" alt="Card image cap">
                                                    <div class="card-body">
                                                        <span class="badge badge-success">Online</span>
                                                        <span class="badge badge-primary-light">English</span>
                                                        <span class="badge badge-primary-light">Spanish</span>
                                                        <div class="mt-20 cour-stac d-flex align-items-center text-fade">
                                                            <p>Start Date 4th Nov..</p>
                                                            <p class="lt-sp">|</p>
                                                            <p>Johen doe</p>
                                                        </div>
                                                        <h4 class="card-title justify-content-between d-flex align-items-center">Photography</h4>
                                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                    </div>
                                                    <div class="card-footer justify-content-between d-flex align-items-center">
                                                        <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                        <span>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star-half text-warning"></i>
                                                            <span class="text-muted ms-2">(42)</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-managed" role="tabpanel" aria-labelledby="pills-managed-tab">
                                        <h4 class="mb-0 box-title">
                                            Managed Courses
                                        </h4>
                                        <hr>
                                        <div class="card rounded-0">
                                            <div class="d-lg-flex">
                                                <div class="position-relative w-lg-400">
                                                    <a href="#">
                                                        <img class="" src="../images/front-end-img/courses/9.jpg" alt="Card image cap">
                                                    </a>
                                                    <div class="position-absolute r-10 t-10">
                                                        <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
                                                        <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
                                                    </div>
                                                </div>
                                                <div class="mb-0 card no-border no-shadow w-p100">
                                                    <div class="card-body">
                                                        <div class="cour-stac d-lg-flex align-items-center text-fade">
                                                            <div class="d-flex align-items-center">
                                                                <p>Start Date 4th Nov..</p>
                                                                <p class="lt-sp">|</p>
                                                                <p>Johen doe</p>
                                                                <p class="lt-sp">|</p>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <p>English, Spanish</p>
                                                                <p class="lt-sp">|</p>
                                                                <span class="badge badge-success">Online</span>
                                                            </div>
                                                        </div>
                                                        <h3 class="mt-20 card-title">It &amp; software</h3>
                                                        <p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
                                                    </div>
                                                    <div class="card-footer justify-content-between d-flex align-items-center">
                                                        <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                        <span>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star-half text-warning"></i>
                                                            <span class="text-muted ms-2">(42)</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card rounded-0">
                                            <div class="d-lg-flex">
                                                <div class="position-relative w-lg-400">
                                                    <a href="#">
                                                        <img class="" src="../images/front-end-img/courses/4.jpg" alt="Card image cap">
                                                    </a>
                                                    <div class="position-absolute r-10 t-10">
                                                        <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
                                                        <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
                                                    </div>
                                                </div>
                                                <div class="mb-0 card no-border no-shadow w-p100">
                                                    <div class="card-body">
                                                        <div class="cour-stac d-lg-flex align-items-center text-fade">
                                                            <div class="d-flex align-items-center">
                                                                <p>Start Date 4th Nov..</p>
                                                                <p class="lt-sp">|</p>
                                                                <p>Johen doe</p>
                                                                <p class="lt-sp">|</p>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <p>English, Spanish</p>
                                                                <p class="lt-sp">|</p>
                                                                <span class="badge badge-success">Online</span>
                                                            </div>
                                                        </div>
                                                        <h3 class="mt-20 card-title">Programming</h3>
                                                        <p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
                                                    </div>
                                                    <div class="card-footer justify-content-between d-flex align-items-center">
                                                        <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                        <span>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star-half text-warning"></i>
                                                            <span class="text-muted ms-2">(42)</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card rounded-0">
                                            <div class="d-lg-flex">
                                                <div class="position-relative w-lg-400">
                                                    <a href="#">
                                                        <img class="" src="../images/front-end-img/courses/5.jpg" alt="Card image cap">
                                                    </a>
                                                    <div class="position-absolute r-10 t-10">
                                                        <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
                                                        <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
                                                    </div>
                                                </div>
                                                <div class="mb-0 card no-border no-shadow w-p100">
                                                    <div class="card-body">
                                                        <div class="cour-stac d-lg-flex align-items-center text-fade">
                                                            <div class="d-flex align-items-center">
                                                                <p>Start Date 4th Nov..</p>
                                                                <p class="lt-sp">|</p>
                                                                <p>Johen doe</p>
                                                                <p class="lt-sp">|</p>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <p>English, Spanish</p>
                                                                <p class="lt-sp">|</p>
                                                                <span class="badge badge-success">Online</span>
                                                            </div>
                                                        </div>
                                                        <h3 class="mt-20 card-title">Photography</h3>
                                                        <p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
                                                    </div>
                                                    <div class="card-footer justify-content-between d-flex align-items-center">
                                                        <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                        <span>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star-half text-warning"></i>
                                                            <span class="text-muted ms-2">(42)</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card rounded-0">
                                            <div class="d-lg-flex">
                                                <div class="position-relative w-lg-400">
                                                    <a href="#">
                                                        <img class="" src="../images/front-end-img/courses/1.jpg" alt="Card image cap">
                                                    </a>
                                                    <div class="position-absolute r-10 t-10">
                                                        <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
                                                        <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
                                                    </div>
                                                </div>
                                                <div class="mb-0 card no-border no-shadow w-p100">
                                                    <div class="card-body">
                                                        <div class="cour-stac d-lg-flex align-items-center text-fade">
                                                            <div class="d-flex align-items-center">
                                                                <p>Start Date 4th Nov..</p>
                                                                <p class="lt-sp">|</p>
                                                                <p>Johen doe</p>
                                                                <p class="lt-sp">|</p>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <p>English, Spanish</p>
                                                                <p class="lt-sp">|</p>
                                                                <span class="badge badge-success">Online</span>
                                                            </div>
                                                        </div>
                                                        <h3 class="mt-20 card-title">Manegement</h3>
                                                        <p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
                                                    </div>
                                                    <div class="card-footer justify-content-between d-flex align-items-center">
                                                        <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                        <span>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star-half text-warning"></i>
                                                            <span class="text-muted ms-2">(42)</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card rounded-0">
                                            <div class="d-lg-flex">
                                                <div class="position-relative w-lg-400">
                                                    <a href="#">
                                                        <img class="" src="../images/front-end-img/courses/2.jpg" alt="Card image cap">
                                                    </a>
                                                    <div class="position-absolute r-10 t-10">
                                                        <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
                                                        <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
                                                    </div>
                                                </div>
                                                <div class="mb-0 card no-border no-shadow w-p100">
                                                    <div class="card-body">
                                                        <div class="cour-stac d-lg-flex align-items-center text-fade">
                                                            <div class="d-flex align-items-center">
                                                                <p>Start Date 4th Nov..</p>
                                                                <p class="lt-sp">|</p>
                                                                <p>Johen doe</p>
                                                                <p class="lt-sp">|</p>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <p>English, Spanish</p>
                                                                <p class="lt-sp">|</p>
                                                                <span class="badge badge-success">Online</span>
                                                            </div>
                                                        </div>
                                                        <h3 class="mt-20 card-title">Networking</h3>
                                                        <p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
                                                    </div>
                                                    <div class="card-footer justify-content-between d-flex align-items-center">
                                                        <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                        <span>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star-half text-warning"></i>
                                                            <span class="text-muted ms-2">(42)</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card rounded-0">
                                            <div class="d-lg-flex">
                                                <div class="position-relative w-lg-400">
                                                    <a href="#">
                                                        <img class="" src="../images/front-end-img/courses/8.jpg" alt="Card image cap">
                                                    </a>
                                                    <div class="position-absolute r-10 t-10">
                                                        <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
                                                        <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
                                                    </div>
                                                </div>
                                                <div class="mb-0 card no-border no-shadow w-p100">
                                                    <div class="card-body">
                                                        <div class="cour-stac d-lg-flex align-items-center text-fade">
                                                            <div class="d-flex align-items-center">
                                                                <p>Start Date 4th Nov..</p>
                                                                <p class="lt-sp">|</p>
                                                                <p>Johen doe</p>
                                                                <p class="lt-sp">|</p>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <p>English, Spanish</p>
                                                                <p class="lt-sp">|</p>
                                                                <span class="badge badge-dark">Offline</span>
                                                            </div>
                                                        </div>
                                                        <h3 class="mt-20 card-title">Security</h3>
                                                        <p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
                                                    </div>
                                                    <div class="card-footer justify-content-between d-flex align-items-center">
                                                        <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                        <span>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star-half text-warning"></i>
                                                            <span class="text-muted ms-2">(42)</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card rounded-0">
                                            <div class="d-lg-flex">
                                                <div class="position-relative w-lg-400">
                                                    <a href="#">
                                                        <img class="" src="../images/front-end-img/courses/6.jpg" alt="Card image cap">
                                                    </a>
                                                    <div class="position-absolute r-10 t-10">
                                                        <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
                                                        <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
                                                    </div>
                                                </div>
                                                <div class="mb-0 card no-border no-shadow w-p100">
                                                    <div class="card-body">
                                                        <div class="cour-stac d-lg-flex align-items-center text-fade">
                                                            <div class="d-flex align-items-center">
                                                                <p>Start Date 4th Nov..</p>
                                                                <p class="lt-sp">|</p>
                                                                <p>Johen doe</p>
                                                                <p class="lt-sp">|</p>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <p>English, Spanish</p>
                                                                <p class="lt-sp">|</p>
                                                                <span class="badge badge-dark">Offline</span>
                                                            </div>
                                                        </div>
                                                        <h3 class="mt-20 card-title">Language</h3>
                                                        <p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
                                                    </div>
                                                    <div class="card-footer justify-content-between d-flex align-items-center">
                                                        <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                        <span>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star-half text-warning"></i>
                                                            <span class="text-muted ms-2">(42)</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card rounded-0">
                                            <div class="d-lg-flex">
                                                <div class="position-relative w-lg-400">
                                                    <a href="#">
                                                        <img class="" src="../images/front-end-img/courses/7.jpg" alt="Card image cap">
                                                    </a>
                                                    <div class="position-absolute r-10 t-10">
                                                        <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
                                                        <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
                                                    </div>
                                                </div>
                                                <div class="mb-0 card no-border no-shadow w-p100">
                                                    <div class="card-body">
                                                        <div class="cour-stac d-lg-flex align-items-center text-fade">
                                                            <div class="d-flex align-items-center">
                                                                <p>Start Date 4th Nov..</p>
                                                                <p class="lt-sp">|</p>
                                                                <p>Johen doe</p>
                                                                <p class="lt-sp">|</p>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <p>English, Spanish</p>
                                                                <p class="lt-sp">|</p>
                                                                <span class="badge badge-warning">Upcoming</span>
                                                            </div>
                                                        </div>
                                                        <h3 class="mt-20 card-title">Computer</h3>
                                                        <p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
                                                    </div>
                                                    <div class="card-footer justify-content-between d-flex align-items-center">
                                                        <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                        <span>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star-half text-warning"></i>
                                                            <span class="text-muted ms-2">(42)</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card rounded-0">
                                            <div class="d-lg-flex">
                                                <div class="position-relative w-lg-400">
                                                    <a href="#">
                                                        <img class="" src="../images/front-end-img/courses/11.jpg" alt="Card image cap">
                                                    </a>
                                                    <div class="position-absolute r-10 t-10">
                                                        <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
                                                        <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
                                                    </div>
                                                </div>
                                                <div class="mb-0 card no-border no-shadow w-p100">
                                                    <div class="card-body">
                                                        <div class="cour-stac d-lg-flex align-items-center text-fade">
                                                            <div class="d-flex align-items-center">
                                                                <p>Start Date 4th Nov..</p>
                                                                <p class="lt-sp">|</p>
                                                                <p>Johen doe</p>
                                                                <p class="lt-sp">|</p>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <p>English, Spanish</p>
                                                                <p class="lt-sp">|</p>
                                                                <span class="badge badge-warning">Upcoming</span>
                                                            </div>
                                                        </div>
                                                        <h3 class="mt-20 card-title">Law</h3>
                                                        <p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
                                                    </div>
                                                    <div class="card-footer justify-content-between d-flex align-items-center">
                                                        <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                        <span>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star-half text-warning"></i>
                                                            <span class="text-muted ms-2">(42)</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-payments" role="tabpanel" aria-labelledby="pills-payments-tab">
                                        <h4 class="mb-0 box-title">
                                            Payment Method
                                        </h4>
                                        <hr>
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#debit-card" role="tab"><span class="hidden-sm-up"><i class="fa fa-cc"></i></span> <span class="hidden-xs-down">Debit Card</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#paypal" role="tab"><span class="hidden-sm-up"><i class="fa fa-paypal"></i></span> <span class="hidden-xs-down">Paypal</span></a> </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content tabcontent-border">
                                            <div class="tab-pane active" id="debit-card" role="tabpanel">
                                                <div class="p-30">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-12">
                                                            <form>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1" class="form-label">CARD NUMBER</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                                                        <input type="text" class="form-control" id="exampleInputuname" placeholder="Card Number"> </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-7">
                                                                            <div class="form-group">
                                                                                <label class="form-label">EXPIRATION DATE</label>
                                                                                <input type="text" class="form-control" name="Expiry" placeholder="MM / YY" required=""> </div>
                                                                            </div>
                                                                            <div class="col-5 pull-right">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">CV CODE</label>
                                                                                    <input type="text" class="form-control" name="CVC" placeholder="CVC" required=""> </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <label class="form-label">NAME OF CARD</label>
                                                                                        <input type="text" class="form-control" name="nameCard" placeholder="NAME AND SURNAME"> </div>
                                                                                    </div>
                                                                                </div>
                                                                                <button class="btn btn-success">Make Payment</button>
                                                                            </form>
                                                                        </div>
                                                                        <div class="col-lg-5 col-md-6 col-12">
                                                                            <h3 class="mt-10 box-title">General Info</h3>
                                                                            <h2><i class="fa fa-cc-visa text-info"></i>
                                                                                <i class="fa fa-cc-mastercard text-danger"></i>
                                                                                <i class="fa fa-cc-discover text-success"></i>
                                                                                <i class="fa fa-cc-amex text-warning"></i>
                                                                            </h2>
                                                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.</p>
                                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.  </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="paypal" role="tabpanel">
                                                                <div class="p-30">
                                                                    You can pay your money through paypal, for more info <a href="">click here</a><br><br>
                                                                    <button class="btn btn-primary"><i class="fa fa-cc-paypal"></i> Pay with Paypal</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive mt-30">
                                                            <table class="table table-striped">
                                                                <thead>
                                                                    <tr class="bg-dark">
                                                                        <th>Invoice ID</th>
                                                                        <th>Category</th>
                                                                        <th>Timings</th>
                                                                        <th>Fees</th>
                                                                        <th>Duration</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>#1548348</td>
                                                                        <td>Computer Science</td>
                                                                        <td>8:45 am- 9:45 am</td>
                                                                        <td>$479</td>
                                                                        <td>6 Months</td>
                                                                        <td>
                                                                            <a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
                                                                            <a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>#154872</td>
                                                                        <td>It Networking</td>
                                                                        <td>8:45 am- 9:45 am</td>
                                                                        <td>$479</td>
                                                                        <td>6 Months</td>
                                                                        <td>
                                                                            <a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
                                                                            <a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>#84575</td>
                                                                        <td>Medical</td>
                                                                        <td>8:45 am- 9:45 am</td>
                                                                        <td>$479</td>
                                                                        <td>6 Months</td>
                                                                        <td>
                                                                            <a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
                                                                            <a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>#84575</td>
                                                                        <td>IT & Software</td>
                                                                        <td>8:45 am- 9:45 am</td>
                                                                        <td>$479</td>
                                                                        <td>6 Months</td>
                                                                        <td>
                                                                            <a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
                                                                            <a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>#42518</td>
                                                                        <td>Programming Language</td>
                                                                        <td>8:45 am- 9:45 am</td>
                                                                        <td>$479</td>
                                                                        <td>6 Months</td>
                                                                        <td>
                                                                            <a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
                                                                            <a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>#845962</td>
                                                                        <td>Technology</td>
                                                                        <td>8:45 am- 9:45 am</td>
                                                                        <td>$479</td>
                                                                        <td>6 Months</td>
                                                                        <td>
                                                                            <a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
                                                                            <a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>#12548</td>
                                                                        <td>Business</td>
                                                                        <td>8:45 am- 9:45 am</td>
                                                                        <td>$479</td>
                                                                        <td>6 Months</td>
                                                                        <td>
                                                                            <a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
                                                                            <a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>#452185</td>
                                                                        <td>UI Design</td>
                                                                        <td>8:45 am- 9:45 am</td>
                                                                        <td>$479</td>
                                                                        <td>6 Months</td>
                                                                        <td>
                                                                            <a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
                                                                            <a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>#1548348</td>
                                                                        <td>General</td>
                                                                        <td>8:45 am- 9:45 am</td>
                                                                        <td>$479</td>
                                                                        <td>6 Months</td>
                                                                        <td>
                                                                            <a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
                                                                            <a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>#845457</td>
                                                                        <td>Graphic design</td>
                                                                        <td>8:45 am- 9:45 am</td>
                                                                        <td>$479</td>
                                                                        <td>6 Months</td>
                                                                        <td>
                                                                            <a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
                                                                            <a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-calendar" role="tabpanel" aria-labelledby="pills-calendar-tab">
                                                        <h4 class="mb-0 box-title">
                                                            Calendar
                                                        </h4>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div id="calendar"></div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="box no-border no-shadow">
                                                                    <div class="box-header with-border">
                                                                        <h4 class="box-title">Draggable Events</h4>
                                                                    </div>
                                                                    <div class="p-0 box-body">
                                                                        <!-- the events -->
                                                                        <div id="external-events">
                                                                            <div class="external-event m-15 bg-primary" data-class="bg-primary"><i class="fa fa-hand-o-right"></i>Lunch</div>
                                                                            <div class="external-event m-15 bg-warning" data-class="bg-warning"><i class="fa fa-hand-o-right"></i>Go home</div>
                                                                            <div class="external-event m-15 bg-info" data-class="bg-info"><i class="fa fa-hand-o-right"></i>Do homework</div>
                                                                            <div class="external-event m-15 bg-success" data-class="bg-success"><i class="fa fa-hand-o-right"></i>Work on UI design</div>
                                                                            <div class="external-event m-15 bg-danger" data-class="bg-danger"><i class="fa fa-hand-o-right"></i>Sleep tight</div>
                                                                        </div>
                                                                        <div class="my-20 event-fc-bt mx-15">
                                                                            <!-- checkbox -->
                                                                            <div class="checkbox">
                                                                                <input id="drop-remove" type="checkbox">
                                                                                <label for="drop-remove" class="form-label">
                                                                                    Remove after drop
                                                                                </label>
                                                                            </div>
                                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#add-new-events" class="my-10 btn btn-success w-p100">
                                                                                <i class="ti-plus"></i> Add New Event
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        @include('themes.aksataedu.partials.employe')
                        @endsection
