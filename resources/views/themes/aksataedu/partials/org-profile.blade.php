<section class="py-50">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="box position-sticky t-100 h-360">
                    <div class="text-center box-body">
                        <h4 class="box-title text-primary">Pimpinan</h4>
                        <hr class="my-15">
                        <div class="mt-20">
                            <img src="{{asset('')}}uploads/images/users/P08cOJAJRHE5bXzdswxpwOClClAlJc0Dc71AvQwY.jpg" width="180" class="rounded bg-primary-light" alt="user">
                            <h5 class="mt-20 mb-0">Prof. Dr. Abdul Kodir Zaelani, ST., M.Si</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-4 col-12">
                <div class="box h-360">
                    <div class="box-body">
                        <h4 class="box-title text-primary">Sambutan</h4>
                        <hr class="my-15">
                        <div class="card rounded-0 no-border no-shadow">
                            <div class="d-lg-flex">
                                <div class="pt-30 position-relative w-lg-400">
                                    <a href="#"  title="{{$greeting->title}}">
                                        <img class="" src="{{$greeting->imageThumbUrl}}" alt="Card image cap">
                                    </a>
                                    <div class="pt-45 entry-button">
                                        <a href="#" class="btn btn-success btn-sm ">Sambutan lainnya..</a>
                                    </div>
                                </div>
                                <div class="mb-0 card no-border no-shadow w-p100">
                                    <div class="pt-0 mt-0 card-body ">
                                        <h3 class="mt-20 card-title"><a href="http://example.com" title="{{$greeting->title}}">{{Str::limit($greeting->title, 40)}}</a></h3>
                                        <p class="card-text">
                                            {!! Str::limit($greeting->content, 300) !!}
                                        </p>
                                        <div class="entry-button">
                                            <a href="#" class="btn btn-primary btn-sm">Baca selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12 h-400">
                    @include('themes.aksataedu.partials.sidebar-announcement')
            </div>
        </div>
    </div>
</section>

@push('scripts-utils')
<script src="{{ asset('') }}assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('') }}assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>
@endpush
