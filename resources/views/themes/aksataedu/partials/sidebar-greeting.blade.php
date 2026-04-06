<div class="box">
    <div class="box">
        <div class="box-header bg-primary">
            <h4 class="box-title"><strong>Sambutan</strong></h4>
            <div class="box-controls pull-right">
                <a href="{{route('greeting.all')}}" class="btn btn-sm btn-danger">{{ __('Semua')}}</a>
            </div>
        </div>
        <div class="box-body">
            <div class="widget">
                @forelse ($global_greeting as $item)
                <div class="clearfix recent-post">
                    <div class="recent-post-image">
                        <img class="img-fluid bg-primary-light" src="{{$item->imageThumbUrl ? $item->imageThumbUrl : asset('uploads/images/default-image.png')}}" alt="">
                    </div>
                    <div class="recent-post-info">
                        <a href="{{ route('greeting.detail', $item->slug) }}" title="{{$item->title}}">{{Str::limit($item->title, 40)}}</a>
                        <span><i class="fa fa-calendar-o"></i> {{$item->publishedat}}</span>
                    </div>
                </div>
                @empty
                <p>No agenda available.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
