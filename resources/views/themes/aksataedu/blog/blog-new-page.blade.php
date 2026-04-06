@if ($global_blog->count())
<section class="bg-light py-50" data-aos="fade-up">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="text-center col-lg-12 col-12">
                <h1 class="mb-15">Blog Terbaru</h1>
                <hr class="w-200 bgi-info">
            </div>
        </div>
        <div class="row mt-30">
            @forelse ($global_blog as $item)

            <div class="col-lg-3 col-md-6 col-12">
                <div class="card pull-up h-450">
                    <a href="#">
                        <img class="card-img-top" src="{{ $item->image_thumb_url ? $item->image_thumb_url : '/uploads/images/logo/' . $global_option->logo }}" alt="Card image cap">
                    </a>
                    <div class="position-absolute r-10 t-10">
                        <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
                        <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><a href="{{ route('blog.detail', $item->slug) }}">{{ Str::limit($item->title, 75) }}</a></h4>
                        <p class="card-text">{!! Str::limit($item->content, 100) !!}</p>
                        <div class="d-flex align-items-center mb-30">
                            <div class="me-15">
                                <img src="{{ asset('assets/images/front-end-img/avatar/1.jpeg') }}" class="avatar avatar-lg rounded10" alt="">
                            </div>
                            <div class="d-flex flex-column fw-500">
                                <a href="#" class="mb-1 text-dark hover-primary fs-16">Johen Kothari</a>
                                <span class="text-fade fs-12">Software Engineer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <p>No blog posts available.</p>
            @endforelse

            <div class="text-center col-12">
                <a href="#" class="mx-auto btn btn-primary">Tampilkan semua</a>
            </div>
        </div>
    </div>
</section>
@endif
