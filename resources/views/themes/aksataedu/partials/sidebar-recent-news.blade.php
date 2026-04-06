<div class="box">
    <div class="box">
        <div class="box-header bg-primary">
            <h4 class="box-title"><strong>Berita Terbaru</strong></h4>
        </div>
        <div class="box-body">
            <div class="widget">
                @forelse ($global_recentposts as $item)
                <div class="clearfix recent-post">
                    <div class="recent-post-image">
                        <img class="img-fluid bg-primary-light" src="{{$item->imageThumbUrl ? $item->imageThumbUrl : asset('uploads/images/default-image.png')}}" alt="">
                    </div>
                    <div class="recent-post-info">
                        <a href="{{ route('news.detail', $item->slug) }}" title="{{$item->title}}">{{Str::limit($item->title, 40)}}</a>
                        <span><i class="fa fa-calendar-o"></i> {{$item->datecreated}}</span>
                    </div>
                </div>
                @empty
                <p>No agenda available.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
