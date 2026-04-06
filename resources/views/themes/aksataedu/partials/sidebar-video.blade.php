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
                    <a href="#" title="{{$item->title}}" class="pb-0 text-center box bg-img py-50 pull-up" href="javascript:void(0)" style="background-image: url({{ $item->imageUrl ? $item->imageUrl : '/uploads/images/logo/' . $global_option->logo }})">
						<div class="pb-0 box-body">
							<span class="badge badge-primary">Video</span>
						</div>
						<div class="box-body py-15 bg-black-70 rounded-0">
							<h4 class="text-white">{{$item->title}}</h4>
						</div>
					</a>
                </div>
                @empty
                <p>No videos available.</p>
                @endforelse
            </div>
        </div>
    </div>
