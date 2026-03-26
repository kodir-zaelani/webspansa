<section id="stats" class="stats section light-background">

    <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
            @foreach ($statistics as $item)

            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                {!! $item->icon !!}
                <div class="stats-item">
                    <span data-purecounter-start="0" data-purecounter-end="{{$item->amount}}" data-purecounter-duration="0" class="purecounter">{{$item->amount}}</span>
                    <p>{{$item->title}}</p>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>
