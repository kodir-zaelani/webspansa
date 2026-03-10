 <div class="recent-posts-widget widget-item">
    <h3 class="widget-title">Berita Terbaru</h3>
    @foreach ($berita_terbaru as $item)
    <div class="post-item">
        <img src="{{$item->imageThumbUrl}}" alt="" class="flex-shrink-0">
        <div>
            <h4><a href="{{ route('news.detail', $item->slug) }}" title="{{$item->title}}">{{Str::limit($item->title, 40)}}</a></h4>
            <time datetime="2026-01-01">{{ \Carbon\Carbon::parse($item->created_at)->format('j F Y') }}</time>
        </div>
    </div>
    @endforeach
</div>
