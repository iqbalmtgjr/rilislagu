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
                                    class="button button-modern button-custom-size-1" href="#">Submit</a></div>
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
                                    class="button button-modern button-custom-size-1" href="#">Cek Sekarang</a>
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
                                    class="button button-modern button-custom-size-1" href="#">Jadikan hak
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

<section class="parallax-container section-lg text-center"
    data-parallax-img="landing2/images/bg-home1-01-1920x1000.png">
    <div class="parallax-content">
        <div class="container">
            <h6 class="text-gray-600">Trident Festival in Duchonka, slovakia - June 26, 2019</h6>
            <h2>featured event</h2>
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="post-event">
                        <div class="countdown" data-type="until" data-time="17 Aug 2019 00:00"></div><img
                            src="landing2/images/events-02-571x313.jpg" alt="" width="571"
                            height="156" /><a class="button button-primary button-lg" href="#">buy
                            tickets</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-lg bg-default text-center">
    <div class="container">
        <h6 class="text-gray-600">latest videos from me and my colleagues</h6>
        <h2>recent videos</h2>
        <!--Bootstrap tabs-->
        <div class="tabs-custom tabs-vertical tabs-video" id="tabs-2">
            <!--Tab panes-->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tabs-2-1">
                    <div class="entry-video embed-responsive embed-responsive-16by9">
                        <iframe width="886" height="668" src="//www.youtube.com/embed/4gRjnaitguQ"
                            allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="tab-pane fade" id="tabs-2-2">
                    <div class="entry-video embed-responsive embed-responsive-16by9">
                        <iframe width="886" height="668" src="//www.youtube.com/embed/mfMR-URQl80"
                            allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="tab-pane fade" id="tabs-2-3">
                    <div class="entry-video embed-responsive embed-responsive-16by9">
                        <iframe width="886" height="668" src="//www.youtube.com/embed/xweHsBLcqp4"
                            allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="tab-pane fade" id="tabs-2-4">
                    <div class="entry-video embed-responsive embed-responsive-16by9">
                        <iframe width="886" height="668" src="//www.youtube.com/embed/V3pPMUmIxAc"
                            allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="tab-pane fade" id="tabs-2-5">
                    <div class="entry-video embed-responsive embed-responsive-16by9">
                        <iframe width="886" height="668" src="//www.youtube.com/embed/N1DEOCUujUg"
                            allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
            <div class="scroll-wrap">
                <!--Nav tabs-->
                <ul class="nav nav-tabs">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-2-1"
                            data-toggle="tab">
                            <div class="nav-video">
                                <figure class="nav-video-figure"><img src="landing2/images/video-01-140x81.jpg"
                                        alt="" width="140" height="40" />
                                </figure>
                                <h6 class="nav-video-title">Armin van Buuren Live at Tomorrowland 2015</h6>
                            </div>
                        </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-2-2"
                            data-toggle="tab">
                            <div class="nav-video">
                                <figure class="nav-video-figure"><img src="landing2/images/video-02-140x81.jpg"
                                        alt="" width="140" height="40" />
                                </figure>
                                <h6 class="nav-video-title">Juicy M - Live at MEO Sudoeste Festival</h6>
                            </div>
                        </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-2-3"
                            data-toggle="tab">
                            <div class="nav-video">
                                <figure class="nav-video-figure"><img src="landing2/images/video-03-140x81.jpg"
                                        alt="" width="140" height="40" />
                                </figure>
                                <h6 class="nav-video-title">Armin van Buuren feat. Angel Taylor - Make It Right
                                </h6>
                            </div>
                        </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-2-4"
                            data-toggle="tab">
                            <div class="nav-video">
                                <figure class="nav-video-figure"><img src="landing2/images/video-04-140x81.jpg"
                                        alt="" width="140" height="40" />
                                </figure>
                                <h6 class="nav-video-title">Armin Only crew taking over Sydney! Armin Only VLOG
                                </h6>
                            </div>
                        </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-2-5"
                            data-toggle="tab">
                            <div class="nav-video">
                                <figure class="nav-video-figure"><img src="landing2/images/video-05-140x81.jpg"
                                        alt="" width="140" height="40" />
                                </figure>
                                <h6 class="nav-video-title">Armin Only crew taking over San Francisco!</h6>
                            </div>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section" data-lightgallery="group">
    <div class="row no-gutters">
        <div class="col-lg-3 col-sm-6">
            <div class="thumbnail-classic"><a class="thumbnail-classic-figure" data-lightgallery="item"
                    href="images/image-original-01-1200x800.jpg"><img src="landing2/images/home1-05-480x350.jpg"
                        alt="" width="480" height="175" /></a>
                <div class="thumbnail-classic-caption">
                    <h5 class="thumbnail-classic-title">Dream Village</h5>
                    <time class="thumbnail-classic-time" datetime="2019-09-19">Sep 19, 2019</time>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="thumbnail-classic"><a class="thumbnail-classic-figure" data-lightgallery="item"
                    href="images/image-original-02-1200x800.jpg"><img src="landing2/images/home1-06-480x350.jpg"
                        alt="" width="480" height="175" /></a>
                <div class="thumbnail-classic-caption">
                    <h5 class="thumbnail-classic-title">ULTRA MUSIC FESTIVAL</h5>
                    <time class="thumbnail-classic-time" datetime="2019-09-19">Sep 19, 2019</time>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="thumbnail-classic"><a class="thumbnail-classic-figure" data-lightgallery="item"
                    href="images/image-original-03-1200x800.jpg"><img src="landing2/images/home1-07-480x350.jpg"
                        alt="" width="480" height="175" /></a>
                <div class="thumbnail-classic-caption">
                    <h5 class="thumbnail-classic-title">electric Zoo</h5>
                    <time class="thumbnail-classic-time" datetime="2019-09-19">Sep 19, 2019</time>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="thumbnail-classic"><a class="thumbnail-classic-figure" data-lightgallery="item"
                    href="images/image-original-04-1200x800.jpg"><img src="landing2/images/home1-08-480x350.jpg"
                        alt="" width="480" height="175" /></a>
                <div class="thumbnail-classic-caption">
                    <h5 class="thumbnail-classic-title">life in color festival</h5>
                    <time class="thumbnail-classic-time" datetime="2019-09-19">Sep 19, 2019</time>
                </div>
            </div>
        </div>
    </div>
</section>

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
<section class="parallax-container parallax-overlay-01" data-parallax-img="landing2/images/bg-footer-1920x1285.jpg">
    <div class="parallax-content">
        <div class="section-sm prefooter-custom">
            <div class="container">
                <div class="row row-30">
                    <div class="col-lg-6">
                        <div class="google-map-container google-map-container-custom-1" data-center="new york, USA"
                            data-zoom="5"
                            data-styles="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#444444&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:45}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#46bcec&quot;},{&quot;visibility&quot;:&quot;on&quot;}]}]">
                            <div class="google-map"></div>
                            <ul class="google-map-markers">
                                <li data-location="Bayfront Park, Miami, USA" data-description="ULTRA MUSIC FESTIVAL"
                                    data-icon="landing2/images/gmap_marker-1.png"
                                    data-icon-active="landing2/images/gmap_marker-1.png"></li>
                                <li data-location="Brooklyn, New York, United States" data-description="CLUB CULTURAL"
                                    data-icon="landing2/images/gmap_marker-2.png"
                                    data-icon-active="landing2/images/gmap_marker-2.png"></li>
                                <li data-location="Hamilton Township Pennsylvania, United States"
                                    data-description="A summer story" data-icon="landing2/images/gmap_marker-3.png"
                                    data-icon-active="landing2/images/gmap_marker-3.png"></li>
                                <li data-location="Montgomery Veterans Park / Arboretum, Harlingen Road, United States"
                                    data-description="EXPO CENTER TRENciN"
                                    data-icon="landing2/images/gmap_marker-4.png"
                                    data-icon-active="landing2/images/gmap_marker-4.png"></li>
                                <li data-location="West Milford New Jersey, USA"
                                    data-description="WKND FESTIVAL BALTICS"
                                    data-icon="landing2/images/gmap_marker-5.png"
                                    data-icon-active="landing2/images/gmap_marker-5.png"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3>tour dates</h3>
                        <div class="box-event-wrap scroll-wrap">
                            <div class="box-event novi-bg">
                                <div class="box-event-date-wrap">
                                    <h3 class="box-event-date-day">25</h3>
                                    <p class="box-event-date-month">feb</p>
                                </div>
                                <div class="box-event-text-wrap">
                                    <h5 class="box-event-text-title"><a href="#">ULTRA MUSIC
                                            FESTIVAL</a></h5>
                                    <ul class="box-event-text-location">
                                        <li>Miami</li>
                                        <li>USA</li>
                                    </ul>
                                </div>
                                <div class="box-event-button-wrap"><a class="button button-outline button-sm"
                                        href="#">buy tickets</a></div>
                            </div>
                            <div class="box-event novi-bg">
                                <div class="box-event-date-wrap">
                                    <h3 class="box-event-date-day">12</h3>
                                    <p class="box-event-date-month">mar</p>
                                </div>
                                <div class="box-event-text-wrap">
                                    <h5 class="box-event-text-title"><a href="#">edc orlando</a></h5>
                                    <ul class="box-event-text-location">
                                        <li>Tinkler Field</li>
                                        <li>Orlando</li>
                                        <li>USA</li>
                                    </ul>
                                </div>
                                <div class="box-event-button-wrap"><a class="button button-outline button-sm"
                                        href="#">buy tickets</a></div>
                            </div>
                            <div class="box-event novi-bg">
                                <div class="box-event-date-wrap">
                                    <h3 class="box-event-date-day">24</h3>
                                    <p class="box-event-date-month">apr</p>
                                </div>
                                <div class="box-event-text-wrap">
                                    <h5 class="box-event-text-title"><a href="#">Electric zoo</a></h5>
                                    <ul class="box-event-text-location">
                                        <li>Randall’s Island Park</li>
                                        <li>New York</li>
                                        <li>USA</li>
                                    </ul>
                                </div>
                                <div class="box-event-button-wrap"><a class="button button-outline button-sm"
                                        href="#">buy tickets</a></div>
                            </div>
                            <div class="box-event novi-bg">
                                <div class="box-event-date-wrap">
                                    <h3 class="box-event-date-day">17</h3>
                                    <p class="box-event-date-month">jul</p>
                                </div>
                                <div class="box-event-text-wrap">
                                    <h5 class="box-event-text-title"><a href="#">Nocturnal
                                            Wonderland</a></h5>
                                    <ul class="box-event-text-location">
                                        <li>Glen Helen National Park</li>
                                        <li>USA</li>
                                    </ul>
                                </div>
                                <div class="box-event-button-wrap"><a class="button button-outline button-sm"
                                        href="#">buy tickets</a></div>
                            </div>
                            <div class="box-event novi-bg">
                                <div class="box-event-date-wrap">
                                    <h3 class="box-event-date-day">18</h3>
                                    <p class="box-event-date-month">aug</p>
                                </div>
                                <div class="box-event-text-wrap">
                                    <h5 class="box-event-text-title"><a href="#">Coachella</a></h5>
                                    <ul class="box-event-text-location">
                                        <li>Empire Polo Club</li>
                                        <li>Indio</li>
                                        <li>USA</li>
                                    </ul>
                                </div>
                                <div class="box-event-button-wrap"><a class="button button-outline button-sm"
                                        href="#">buy tickets</a></div>
                            </div>
                            <div class="box-event novi-bg">
                                <div class="box-event-date-wrap">
                                    <h3 class="box-event-date-day">12</h3>
                                    <p class="box-event-date-month">OCT</p>
                                </div>
                                <div class="box-event-text-wrap">
                                    <h5 class="box-event-text-title"><a href="#">Let It Roll</a></h5>
                                    <ul class="box-event-text-location">
                                        <li>Milovice</li>
                                        <li>Czech Republic</li>
                                    </ul>
                                </div>
                                <div class="box-event-button-wrap"><a class="button button-outline button-sm"
                                        href="#">buy tickets</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.landing2.footer')
