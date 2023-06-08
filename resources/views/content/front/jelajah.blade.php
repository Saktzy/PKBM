<x-front>

    <x-front.layout.navhead judul="JELAJAHI" />

    <!-- blog area start -->
    <div class="blog-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 col-md-11">
                    <div class="section-title style-white text-center">
                        <h2 class="title">Belajar dari sumber lain </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($list_jelajah as $jelajah)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-inner style-border">
                            <div class="thumb"
                                style="float: none; clear: both; width: 100%; position: relative; padding-bottom: 56.25%; padding-top: 25px; height: 0; ">
                                <iframe width="770" height="440" src="{{ url($jelajah->link) }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
                            </div>
                            <div class="details">
                                <h5 class="title"><a href="#">{{ $jelajah->nama }}</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $list_jelajah->links('components.front.page.pagination') }}
            </div>
        </div>
    </div>
    <!-- blog area end -->

</x-front>
