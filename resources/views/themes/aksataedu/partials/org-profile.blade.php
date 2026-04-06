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
                @include('themes.aksataedu.greetings.main-greeting')
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
