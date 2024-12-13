@include('layouts.landing2.header')
@include('layouts.landing2.navbar')

<section class="section section-xl bg-default text-center">
    <div class="container">
        {{-- <h6 class="text-gray-600">from my blog</h6> --}}
        <h2>Artikel Terbaru</h2>
        <div class="row row-125">
            @foreach ($berita as $item)
                <div class="col-md-6 col-lg-4">
                    <article class="post-classic">
                        <figure class="post-classic-figure"><a href="#"><img
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

@include('layouts.landing2.footer')
