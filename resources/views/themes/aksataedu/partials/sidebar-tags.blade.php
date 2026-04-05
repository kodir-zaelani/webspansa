<div class="box">
    <div class="box-header bg-primary">
        <h4 class="box-title"><strong>Tags</strong></h4>
    </div>
    <div class="box-body">
        <div class="widget">
            <div class="widget-tags">
                <ul class="list-unstyled">
                    @forelse ($tags as $item)
                    <li><a href="{{ route('news.tag', $item->slug) }}">{{ $item->title }}</a></li>
                    @empty
                    <p>No tags available.</p>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
