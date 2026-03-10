<section class="main-banner">
    <div class="container ">
        <div class="row">
            <div class="col-lg-2 col-md-2 header-logo">
                <div class="main-banner-logo">
                    @if ($global_option->logo)
                    <img src="{{ $global_option->ImageUrl }}">
                    @endif
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <div class="main-banner-content">
                    <h2>{!! $global_option->webname !!}</h2>
                    <h4 class="text-yellow">{!! $global_option->tagline !!}</h4>
                    <span><strong><i class="fas fa-envelope"></i> {{ $global_option->email }}</strong></span>
                </div>
            </div>
        </div>
    </div>
</section>
