 <section id="hero" class="hero section dark-background">
    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        @foreach ($sliders as $key => $item)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
            <img src="{{ $item->imageUrl }}" alt="" style="max-width: 100%">
            <div class="carousel-container">
                {{-- <h4>{{ $item->title }}</h4> --}}
                {{-- <p>{{$item->excerpt}}</p> --}}
                {{-- <a href="#featured-services" class="btn-get-started">Get Started</a> --}}
            </div>
        </div>
        @endforeach

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

    </div>

</section>
