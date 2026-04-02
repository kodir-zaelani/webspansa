<section class="bg-white py-50">
    <div class="mx-5 container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <h2 class="mb-10">Tentang Kami</h2>
                <h4 class="fw-400">{{$global_option ? $global_option->tagline : 'Belajar Terus menenus'}}</h4>
                <p class="fs-16">{!!$global_option->description ? $global_option->description : 'Description not available' !!}</p>
            </div>
            <div class="col-lg-6 col-12 position-relative">
                <div class="popup-vdo mt-30 mt-md-0">
                    <img src="{{$global_option->bg_headerThumbUrl ? $global_option->bg_headerThumbUrl : asset('uploads/images/no_image.png')}}" class="rounded img-fluid h-350" alt="">
                    <a href="{{$global_option->video }}" class="popup-youtube play-vdo-bt waves-effect waves-circle btn btn-circle btn-primary btn-lg"><i class="mdi mdi-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@push('scripts-utils')
    <script src="{{ asset('') }}assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('') }}assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>
@endpush
