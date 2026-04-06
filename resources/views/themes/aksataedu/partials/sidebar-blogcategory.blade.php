<div class="box">
    <div class="box-header bg-primary">
        <h4 class="box-title"><strong>Kategori Blog</strong></h4>
    </div>
    <div class="pt-1 box-body">
        <div class="clearfix widget">
            <div class="media-list media-list-divided">
                @forelse ($blogcategories as $item)
                @if ($item->blogs->count() != 0)
                <a class="px-0 pb-0 media media-single" href="{{route('blog.category', $item->slug) }}" title="{{$item->title}}">
                    <span class="title ms-0">{{ $item->title }}</span>
                    <span class="mx-0 badge badge-secondary-light">{{ $item->blogs->count() }}</span>
                </a>
                @endif
                @empty
                <p>No blog categories available.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
