@include('layouts.landing2.header')
@include('layouts.landing2.navbar')
<!--Swiper-->
<section class="section swiper-container swiper-slider swiper-slider-1" data-loop="true" data-autoplay="3892"
    data-simulate-touch="false">
    <div class="swiper-wrapper text-center">
        <div class="swiper-slide context-dark" data-slide-bg="{{ asset('/') }}landing2/images/home1-01-1920x950.jpg">
            <div class="swiper-slide-caption section-md">
                <div class="container">
                    <div class="row justify-content-lg-center">
                        <div class="col-lg-8">
                            <h5 data-caption-animate="fadeInUp" data-caption-delay="100">Rilis karyamu di
                                Rilislagu.id</h5>
                            <h1 data-caption-animate="fadeInUp" data-caption-delay="200">Submit Sekarang</h1>
                            <div class="button-wrap" data-caption-animate="fadeInUp" data-caption-delay="300"><a
                                    class="button button-modern button-custom-size-1" href="/login">Submit</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide context-dark" data-slide-bg="landing2/images/home1-02-1920x950.jpg">
            <div class="swiper-slide-caption section-md">
                <div class="container">
                    <div class="row justify-content-lg-center">
                        <div class="col-lg-8">
                            <h5 data-caption-animate="fadeInUp" data-caption-delay="100">Cek rilisan terbaru
                                di sini</h5>
                            <h1 data-caption-animate="fadeInUp" data-caption-delay="200">Rilisan Kami</h1>
                            <div class="button-wrap" data-caption-animate="fadeInUp" data-caption-delay="300"><a
                                    class="button button-modern button-custom-size-1" href="/rilisan-terbaru">Cek
                                    Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide context-dark" data-slide-bg="landing2/images/home1-03-1920x950.jpg">
            <div class="swiper-slide-caption section-md">
                <div class="container">
                    <div class="row justify-content-lg-center">
                        <div class="col-lg-8">
                            <h5 data-caption-animate="fadeInUp" data-caption-delay="100">Biarkan karyamu
                                dinikmati orang banyak</h5>
                            <h1 data-caption-animate="fadeInUp" data-caption-delay="200">Karya Mu <br> Aset Mu
                            </h1>
                            <div class="button-wrap" data-caption-animate="fadeInUp" data-caption-delay="300"><a
                                    class="button button-modern button-custom-size-1" href="/login">Jadikan hak
                                    cipta</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Swiper Pagination-->
    <div class="swiper-pagination"></div>
</section>

{{-- Kenapa RIlis lagu --}}
<section class="parallax-container parallax-overlay-01" data-parallax-img="landing2/images/kenapa-rilis-lagu.png">
    <div class="parallax-content">
        <div class="section-sm prefooter-custom">
            <div class="container">
                {{-- <div class="row"> --}}
                <h2 class="text-center">Kenapa harus submit di Rilislagu.id?</h2>
                {{-- </div> --}}
                <div class="row row-30">
                    <div class="cell-xs-10 col-md-6 col-lg-3">
                        <article class="box-minimal">
                            <div class="box-minimal-icon fas fa-money"></div>
                            <div class="box-minimal-text">
                                <h5>Harga Lebih Flesibel</h5>
                                <p>Kami menawarkan harga layanan yang dapat dipilih sesuai dengan kebutuhan rilis lagu
                                    dan musik mu
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="cell-xs-10 col-md-6 col-lg-3">
                        <article class="box-minimal">
                            <div class="box-minimal-icon fas fa-bar-chart"></div>
                            <div class="box-minimal-text">
                                <h5 class="box-minimal-title">Royalty Untuk Mu Lebih Besar</h5>
                                <p>Kami memberikan royalti yang lebih besar untuk artis dan label yang bergabung dan
                                    merilis karyanya di Rilislagu.id
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="cell-xs-10 col-md-6 col-lg-3">
                        <article class="box-minimal">
                            <div class="box-minimal-icon fas fa-bolt"></div>
                            <div class="box-minimal-text">
                                <h5 class="box-minimal-title">Proses Cepat</h5>
                                <p>Kami memberikan kemudahan dan kecepatan proses untuk rilis lagu dan musik Anda
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="cell-xs-10 col-md-6 col-lg-3">
                        <article class="box-minimal">
                            <div class="box-minimal-icon fl-bigmug-line-headphones32"></div>
                            <div class="box-minimal-text">
                                <h5 class="box-minimal-title">150+ Platform Music</h5>
                                <p>Kami menawarkan layanan yang dapat membantu klien untuk mengunggah musiknya ke
                                    150+ platform music yang terkemuka dunia
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="parallax-container section-lg text-center"
    data-parallax-img="landing2/images/bg-home1-01-1920x1000.png">
    <div class="parallax-content">
        <div class="container">
            {{-- <h6 class="text-gray-600">Trident Festival in Duchonka, slovakia - June 26, 2019</h6> --}}
            <h2>Playlist Rilis Lagu</h2>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <!-- <div class="embed-responsive embed-responsive-16by9"> -->
                    <iframe style="border-radius:12px"
                        src="https://open.spotify.com/embed/playlist/6C4bAVnlrPRqOjFyhbSkxM?utm_source=generator&theme=0"
                        width="100%" height="500" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Langkah-langkah --}}
<section class="section parallax-container parallax-overlay-01 py-5"
    data-parallax-img="landing2/images/kenapa-rilis-lagu.png">
    <div class="parallax-content">
        <div class="section-sm prefooter-custom">
            <div class="container">
                <h2 class="text-center">Tahapan untuk Submit Music <br> di Rilislagu.id</h2>
                <div class="row row-30">
                    <div class="col-md-6 col-lg-4">
                        <article class="box-minimal">
                            <div class="box-minimal-icon fas fa-user"></div>
                            <div class="box-minimal-text">
                                <h5>Buat Akun</h5>
                                <p>Daftarkan akun semudah dengan cara login menggunakan gmail.</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <article class="box-minimal">
                            <div class="box-minimal-icon fas fa-upload"></div>
                            <div class="box-minimal-text">
                                <h5>Unggah Lagu & Isi Informasi</h5>
                                <p>Inilah kesempatan Anda untuk mengunggah musik Anda dengan cepat dan merilisnya ke
                                    seluruh dunia. Apple Music, Spotify, iTunes, Amazon, dan 150+ toko digital agar lagu
                                    Anda terus diputar.</p>
                            </div>
                        </article>
                    </div>
                    {{-- <div class="col-md-6 col-lg-3">
                        <article class="box-minimal">
                            <div class="box-minimal-icon fas fa-edit"></div>
                            <div class="box-minimal-text">
                                <h5>Isi Informasi</h5>
                                <p>Lengkapi informasi yang diperlukan untuk mempublikasikan lagu Anda.</p>
                            </div>
                        </article>
                    </div> --}}
                    <div class="col-md-6 col-lg-4">
                        <article class="box-minimal">
                            <div class="box-minimal-icon fas fa-check"></div>
                            <div class="box-minimal-text">
                                <h5>Verifikasi & Rilis</h5>
                                <p>Tunggu verifikasi dan rilisan lagu Anda akan segera tayang.</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Artikel --}}
<section class="section section-xl bg-default text-center">
    <div class="container">
        {{-- <h6 class="text-gray-600">from my blog</h6> --}}
        <h2>Artikel Terbaru</h2>
        <div class="row row-125">
            @foreach ($berita as $item)
                <div class="col-md-6 col-lg-4">
                    <article class="post-classic">
                        <figure class="post-classic-figure"><a href="{{ route('berita.show', $item->slug) }}"><img
                                    src="{{ asset('') }}admin/berita/gambar/{{ $item->gambar }}" alt=""
                                    width="346" height="130" /></a></figure>
                        <div class="post-classic-content">
                            <time class="post-classic-time" datetime="{{ $item->created_at->format('Y-m-d') }}">
                                {{ $item->created_at->format('d M, Y') }}
                            </time>
                            <h5 class="post-classic-title"><a href="#">{{ $item->judul }}</a></h5><a
                                class="post-classic-link" href="{{ route('berita.show', $item->slug) }}">baca
                                selengkapnya</a>
                        </div>
                    </article>
                </div>
            @endforeach
            {{-- <div class="col-md-6 col-lg-4">
                <article class="post-classic">
                    <figure class="post-classic-figure"><a href="#"><img
                                src="landing2/images/post-classic-02-346x260.jpg" alt="" width="346"
                                height="130" /></a></figure>
                    <div class="post-classic-content">
                        <time class="post-classic-time" datetime="2019-09-19">Sep 19, 2019</time>
                        <h5 class="post-classic-title"><a href="#">Bring your favorite artist to your
                                city!</a></h5><a class="post-classic-link" href="#">read more</a>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-4">
                <article class="post-classic">
                    <figure class="post-classic-figure"><a href="#"><img
                                src="landing2/images/post-classic-03-346x260.jpg" alt="" width="346"
                                height="130" /></a></figure>
                    <div class="post-classic-content">
                        <time class="post-classic-time" datetime="2019-09-19">Sep 19, 2019</time>
                        <h5 class="post-classic-title"><a href="#">New single: ‘rave on’ (raverz 2019
                                anthem)</a></h5><a class="post-classic-link" href="#">read more</a>
                    </div>
                </article>
            </div> --}}
        </div>
    </div>
</section>

{{-- platform music --}}
<section class="section parallax-container py-5" data-parallax-img="landing2/images/kenapa-rilis-lagu.png">
    <div class="parallax-content">
        <div class="container">
            <div class="marquee">
                <div class="row">
                    <div class="col-md-12">
                        <div class="marquee__inner">
                            <div class="marquee__content">
                                @foreach (['apple', 'spotify', 'amazon', 'tidal', 'facebook', 'tiktok', 'vevo', 'napster', 'youtube', 'resso', 'deezer', 'pandora', 'instagram'] as $platform)
                                    <img style="margin-right: 20px;"
                                        src="{{ asset('logo_platform/' . $platform . '.webp') }}" alt=""
                                        width="200" height="50" />
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .marquee {
                    white-space: nowrap;
                    overflow: hidden;
                }

                .marquee__inner {
                    display: inline-block;
                    animation: marquee 20s linear infinite alternate;
                }

                @keyframes marquee {
                    from {
                        transform: translateX(20%);
                    }

                    to {
                        transform: translateX(-150%);
                    }
                }
            </style>
        </div>
</section>

{{-- <style>
    .marquee {
        white-space: nowrap;
        overflow: hidden;
    }

    .marquee__inner,
    .marquee__inner_right {
        display: inline-block;
    }

    .marquee__inner {
        animation: marquee 20s linear infinite;
    }

    .marquee__inner_right {
        animation: marquee-right 20s linear infinite;
    }

    @keyframes marquee {
        from {
            transform: translateX(100%);
        }

        to {
            transform: translateX(-100%);
        }
    }

    @keyframes marquee-right {
        from {
            transform: translateX(-100%);
        }

        to {
            transform: translateX(100%);
        }
    }
</style> --}}

@include('layouts.landing2.footer')
