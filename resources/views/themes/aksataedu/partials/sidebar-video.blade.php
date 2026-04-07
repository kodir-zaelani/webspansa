    <div class="box">
        <div class="box-header bg-primary">
            <h4 class="box-title"><strong>{{ __('Galeri Video') }}</strong></h4>
            <div class="box-controls pull-right">
                <a class="btn btn-sm btn-danger">{{ __('Semua')}}</a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                @forelse ($global_videos as $item)
                <div class="px-1 py-1 col-md-12 col-sm-12">
                    <div class="box bg-img pull-up" style="background-image: url({{ $item->imageUrl ? $item->imageUrl : '/uploads/images/logo/' . $global_option->logo }})">
                        <div class=" box-body">
                            <a href="{{$item->video}}" title="{{$item->title}}" class="text-center btn btn-circle btn-primary popup-youtube play-vdo-bt"  >
                                <i class="mdi mdi-play"></i>
                            </a>
                        </div>
                        <div class="py-10 box-body mt-80 bg-black-70 rounded-0">
                            <h4 class="text-white">{{ Str::limit($item->title, 75) }}</h4>
                        </div>
                    </div>
                </div>
                @empty
                <p>No videos available.</p>
                @endforelse
            </div>
        </div>
    </div>
