<div class="box h-360 d-xl-block d-lg-block d-md-block d-none">
    <div class="box-body">
        <h4 class="box-title text-primary">Sambutan</h4>
        <hr class="my-15">
        <div class="card rounded-0 no-border no-shadow">
            <div class="d-lg-flex">
                @if ($greeting != null)
                <div class="pt-30 position-relative w-lg-400">
                    <a href="#"  title="{{$greeting->title}}">
                        <img class="" src="{{$greeting->imageThumbUrl}}" alt="Card image cap">
                    </a>
                    <div class="pt-45 entry-button">
                        <a href="{{route('greeting.all')}}" class="btn btn-success btn-sm ">Sambutan lainnya..</a>
                    </div>
                </div>
                <div class="mb-0 card no-border no-shadow w-p100">
                    <div class="pt-0 mt-0 card-body ">
                        <h3 class="mt-20 card-title"><a href="{{route('greeting.detail', $greeting->slug)}}" title="{{$greeting->title}}">{{Str::limit($greeting->title, 40)}}</a></h3>
                            {!! Str::limit($greeting->content, 300) !!}
                        <div class="entry-button">
                            <a href="{{route('greeting.detail', $greeting->slug)}}" class="btn btn-primary btn-sm">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
                @else
                Belum Ada sambutan yang tersedia.
                @endif
            </div>
        </div>
    </div>
</div>
<div class="box d-xl-none d-lg-none d-md-none d-block">
    <div class="position-relative w-lg-400">
        <img class="box-img-top" src="{{$greeting->imageThumbUrl}}" alt="Card image cap">
        <div class="position-absolute r-10 t-10">
            <span class="badge badge-info">Sambutan</span>
        </div>
    </div>
    <div class="box-body">
        <h4 class="box-title justify-content-between d-flex align-items-center">{{$greeting->title}}</h4>
        <p class="box-text">
            {{Str::limit($greeting->content, 200)}}
        </p>
    </div>
    <div class="box-footer justify-content-between d-flex align-items-center">
        <div class="d-flex fs-18 fw-600">
            <a href="{{route('greeting.all')}}" class="btn btn-success btn-sm ">Sambutan lainnya..</a>
        </div>
        <span>
            <a href="{{route('greeting.detail', $greeting->slug)}}" class="btn btn-primary btn-sm">Baca selengkapnya</a>
        </span>
    </div>
</div>
