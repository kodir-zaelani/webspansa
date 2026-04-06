<div class="box">
    <div class="box-header bg-primary">
        <h4 class="box-title"><strong>Kategori Berita</strong></h4>
    </div>
    <div class="pt-1 box-body">
        <div class="clearfix widget">
            <div class="media-list media-list-divided">
                @foreach ($postcategories as $item)
                @if ($item->posts->count() != 0)
                <a class="px-0 pb-0 media media-single" href="{{ route('news.category', $item->slug) }}" title="{{$item->title}}">
                    <span class="title ms-0">{{ $item->title }}</span>
                    <span class="mx-0 badge badge-secondary-light">{{ $item->posts->count() }}</span>
                </a>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
