<div class="box">
    <div class="box">
        <div class="box-header bg-primary">
            <h4 class="box-title"><strong>{{ __('Prestasi') }}</strong></h4>
            <div class="box-controls pull-right">
                <a class="btn btn-sm btn-danger">{{ __('Semua')}}</a>
            </div>
        </div>
        <div class="box-body">
            <div class="widget">
                @forelse ($global_performances as $item)
                <div class="clearfix recent-post">
                    <div class="recent-post-image">
                        <img class="img-fluid bg-primary-light" src="{{$item->imageThumbUrl ? $item->imageThumbUrl : asset('uploads/images/default-image.png')}}" alt="">
                    </div>
                    <div class="recent-post-info">
                        <a href="#" title="{{$item->title}}">{{Str::limit($item->title, 40)}}</a>
                        <span><i class="fa fa-calendar-o"></i> {{ $item->created_at->format('F j, Y') }}</span>
                    </div>
                </div>
                @empty
                <p>No performance available.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
