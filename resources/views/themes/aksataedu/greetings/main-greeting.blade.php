<div class="box h-360">
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
                        <p class="card-text">
                            {!! Str::limit($greeting->content, 300) !!}
                        </p>
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
