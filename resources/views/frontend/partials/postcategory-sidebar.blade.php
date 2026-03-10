<div class="categories-widget widget-item">
    <h3 class="widget-title">Kategori</h3>
    <ul class="mt-3">
        @foreach ($postcategories as $item)
        <li><a href="#">{{ $item->title }} <span>({{ $item->posts->count() }})</span></a></li>
        @endforeach
    </ul>
</div>
