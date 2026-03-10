<div class="tags-widget widget-item">
    <h3 class="widget-title">Tags</h3>
    <ul>
        @foreach ($tags as $item)
        <li><a href="#">{{ $item->title }}</a></li>
        @endforeach
    </ul>
</div>
