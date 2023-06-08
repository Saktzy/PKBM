<x-front>
    <div class="banner-area banner-area-2" style="background-image: url('{{ url('public/') }}assets/img/banner/2.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 align-self-center">
                    <div class="banner-inner style-white text-center text-lg-left">
                        <h6 class="b-animate-1 sub-title">SELAMAT DATANG DI</h6>
                        <h1 class="b-animate-2 title">WEBSITE PKBM KABUPATEN KETAPANG</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PENGUMUMAN -->
    <div class="events-area pd-top-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-11">
                    <div class="section-title text-center">
                        <h6 class="sub-title double-line">HOME</h6>
                        <h2 class="title">PENGUMUMAN</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="row">
                    @foreach ($list_beranda as $beranda)
                        <div class="col-lg-6">
                            <div class="single-blog-inner style-border">
                                <div class="thumb">
                                    <img src="{{ url("public/$beranda->foto") }}" alt="img">
                                </div>
                                <div class="details">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-user"></i> BY ADMIN</li>
                                        <li><i
                                                class="fa fa-calendar-check-o"></i>{{ $beranda->created_at->format('d F Y') }}
                                        </li>
                                    </ul>
                                    <h3 class="title"><a href="blog-details.html">{{ $beranda->nama }}</a>
                                    </h3>
                                    <p>{!! substr(nl2br($beranda->deskripsi), 0, 250) !!}</p>
                                    <a class="read-more-text" href="blog-details.html">READ MORE <i
                                            class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-front>
