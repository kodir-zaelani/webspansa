<div class="search-widget widget-item">
    <h3 class="widget-title">Penelusuran Berita</h3>
    <form action="{{ route('post.search') }}" method="GET">
        <input type="text" name="search" placeholder="Cari data..." value="{{ request('search') ?? '' }}">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
</div>
