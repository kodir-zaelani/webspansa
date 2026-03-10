@extends('layouts.front')
@section('title', 'Kontak kami')
@section('content')
<section id="contact" class="contact section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Kontak Kami</h2>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{$global_option->map_url}}" target="_blank"><i class="bi bi-geo-alt"></i></a>
                    <h3>Alamat</h3>
                    <span class="px-2">{{$global_option->address}}</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-telephone"></i>
                    <h3>Telepon</h3>
                    <p>{{$global_option->phone}}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-envelope"></i>
                    <h3>Email</h3>
                    <p>{{$global_option->email}}</p>
                </div>
            </div>
        </div>

        <div class="pt-5 row">
            <div class="col-12">
                <div class="card" data-aos="fade-up" data-aos-delay="500">
                    <div class="card-body">
                        <iframe src="{{$global_option->maps}}" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
