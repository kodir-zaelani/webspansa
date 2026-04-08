@if ($global_statistics->count())
<section class="py-50 bg-img countnm-bx d-xl-block d-lg-block d-md-block d-none" style="background-image: url({{ $global_option->bg_statisticUrl ? $global_option->bg_statisticUrl : '/assets/uploads/images/no_image.png' }})" data-overlay="7" data-aos="fade-up">
    <div class="container">
        <div class="row">
            @foreach ($global_statistics as $item)
            <div class="col-lg-3 col-md-6 col-12">
                <div class="text-center">
                    <div class="mx-auto text-center border-white w-80 h-80 l-h-100 ">
                        <span class="text-white fs-40 ">
                            {!! $item->icon !!}
                        </span>
                    </div>
                    <h1 class="my-10 text-white countnm fw-300">{{$item->amount}}</h1>
                    <div class="text-white ">{{$item->title}}</div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
@endif
