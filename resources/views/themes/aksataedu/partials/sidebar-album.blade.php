    <div class="box">
        <div class="box-header bg-primary">
            <h4 class="box-title"><strong>{{ __('Galeri Foto') }}</strong></h4>
            <div class="box-controls pull-right">
                <a class="btn btn-sm btn-danger">{{ __('Semua')}}</a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                @forelse ($global_albums as $item)
                @if ($item->fotos->count())
                <div class="px-1 py-1 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <a href="#" title="{{$item->title}}">
                        <img src="{{ $item->imageUrl ? $item->imageUrl : '/uploads/images/logo/' . $global_option->logo }}" class="pt-1 rounded img-fluid pull-up" alt="..." style="max-height: 100%">
                    </a>
                </div>
                @endif
                @empty
                <p>No albums available.</p>
                @endforelse
            </div>
        </div>
    </div>
