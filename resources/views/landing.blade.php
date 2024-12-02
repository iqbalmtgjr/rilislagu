@include('layouts.landing.header')
<!-- slider section -->
<section class=" slider_section position-relative">

    <div class="slider_bg-container">

    </div>
    <div class="slider-container">

        <div class="detail-box">
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="sr-only">Next</span>
            </a>
            <h1>
                Karya Mu <br>
                Aset Mu
            </h1>
            <p>
                Dengan merilis karyamu secara digital maka karya tersebut berkesempatan untuk dapat didengar
                dalam skala yang luas dan global. Maksimalkan potensi value karyamu menjadi aset digital abadi
            </p>
            <div>
                <a href="{{ url('login') }}" class="slider-link">
                    SUBMIT SEKARANG
                </a>
            </div>
        </div>
        <div class="img-box">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img src="{{ asset('') }}landing/images/hero.png" alt="">
                    </div>
                    <div class="carousel-item active">
                        <img src="{{ asset('') }}landing/images/hero2.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('') }}landing/images/slider-img.jpg" alt="">
                    </div>
                </div>

            </div>

        </div>
    </div>

</section>
<!-- end slider section -->
</div>

<!-- about section -->
<section id="about" class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="detail-box">
                    {{-- <h6>
                            Tentang Kami
                        </h6> --}}
                    <div class="custom_heading-container">
                        <h2>
                            Tentang Kami
                        </h2>
                        <hr>
                    </div>
                    <p>
                        Rilislagu.id adalah publisher yang membantu mendistribusikan karya lagu dan musikmu untuk
                        dapat tayang di Digital Service Provider agar dapat menjangkau pendengar dengan skala yang
                        luas
                    </p>
                    <div>
                        <a href="">
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="{{ asset('') }}landing/images/about-img.png" alt="">
                </div>
            </div>
        </div>

    </div>
</section>


<!-- end about section -->

<!-- service section -->

<section class="service_section layout_padding">
    <div class="container">
        <div class="d-flex flex-column align-items-end">
            <div class="custom_heading-container">
                <hr>
                <h2>
                    Layanan Kami
                </h2>

            </div>
            <p>
                Kami akan melayani karya anda dengan kualitas terbaik
            </p>
        </div>
    </div>
    <div class="container">
        <div class="service_container layout_padding2">
            <div class="box">
                <div class="img-box">
                    <img src="{{ asset('') }}landing/images/s-1.png" alt="" class="img-1">
                    <img src="{{ asset('') }}landing/images/s1-blue.png" alt="" class="img-2">
                </div>
                <div class="name">
                    <h6>
                        Harga Terjangkau
                    </h6>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="{{ asset('') }}landing/images/s-2.png" alt="" class="img-1">
                    <img src="{{ asset('') }}landing/images/s2-blue.png" alt="" class="img-2">
                </div>
                <div class="name">
                    <h6>
                        Royalty Untuk Mu Lebih Besar
                    </h6>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="{{ asset('') }}landing/images/s-3.png" alt="" class="img-1">
                    <img src="{{ asset('') }}landing/images/s3-blue.png" alt="" class="img-2">
                </div>
                <div class="name">
                    <h6>
                        Proses Cepat
                    </h6>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="{{ asset('') }}landing/images/s-5.png" alt="" class="img-1">
                    <img src="{{ asset('') }}landing/images/s5-blue.png" alt="" class="img-2">
                </div>
                <div class="name">
                    <h6>
                        100+ Platform Music
                    </h6>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="read-btn">
            <a href="">
                Read More
            </a>
        </div> --}}
</section>

<!-- end service section -->

<!-- portfolio section -->

{{-- <section class="portfolio_section">
        <div class="container">
            <div class="custom_heading-container">
                <h2>
                    Portfolio
                </h2>
                <hr>
            </div>
            <p>
                There are many variations of passages of Lorem Ipsum available, but the majority
            </p>
            <div class="layout_padding2-top">
                <div class="row">
                    <div class="col-md-4">
                        <div class="img-box">
                            <img src="{{ asset('') }}landing/images/p-1.jpg" alt="">
                            <a href="">
                                <img src="{{ asset('') }}landing/images/link.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="img-box">
                            <img src="{{ asset('') }}landing/images/p-2.jpg" alt="">
                            <a href="">
                                <img src="{{ asset('') }}landing/images/link.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="img-box">
                            <img src="{{ asset('') }}landing/images/p-3.jpg" alt="">
                            <a href="">
                                <img src="{{ asset('') }}landing/images/link.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="img-box">
                            <img src="{{ asset('') }}landing/images/p-4.jpg" alt="">
                            <a href="">
                                <img src="{{ asset('') }}landing/images/link.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="img-box">
                            <img src="{{ asset('') }}landing/images/p-5.jpg" alt="">
                            <a href="">
                                <img src="{{ asset('') }}landing/images/link.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="img-box">
                            <img src="{{ asset('') }}landing/images/p-6.jpg" alt="">
                            <a href="">
                                <img src="{{ asset('') }}landing/images/link.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

<!-- end portfolio section -->
<!-- news section -->

<section class="news_section layout_padding">
    <div class="container">
        <div class="d-flex flex-column align-items-end">
            <div class="custom_heading-container">
                <hr>
                <h2>
                    Berita Terbaru
                </h2>

            </div>
            <p>
                Ini merupakan berita terbaru saat ini
            </p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('') }}landing/images/n-1.jpg" alt="">
                    </div>
                    <div class="action-box">
                        <div class="action">
                            <a href="">
                                <img src="{{ asset('') }}landing/images/like.png" alt="">
                            </a>
                            <a href="">
                                <img src="{{ asset('') }}landing/images/comment.png" alt="">
                            </a>
                            <a href="">
                                <img src="{{ asset('') }}landing/images/share.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <h4>
                            elements good design
                        </h4>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content
                            of a page when
                            looking at its layout. The point of using Lorem
                        </p>
                        <div>
                            <a href="">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('') }}landing/images/n-2.jpg" alt="">
                    </div>
                    <div class="action-box">
                        <div class="action">
                            <a href="">
                                <img src="{{ asset('') }}landing/images/like.png" alt="">
                            </a>
                            <a href="">
                                <img src="{{ asset('') }}landing/images/comment.png" alt="">
                            </a>
                            <a href="">
                                <img src="{{ asset('') }}landing/images/share.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <h4>
                            elements good design
                        </h4>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content
                            of a page when
                            looking at its layout. The point of using Lorem
                        </p>
                        <div>
                            <a href="">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('') }}landing/images/n-3.png" alt="">
                    </div>
                    <div class="action-box">
                        <div class="action">
                            <a href="">
                                <img src="{{ asset('') }}landing/images/like.png" alt="">
                            </a>
                            <a href="">
                                <img src="{{ asset('') }}landing/images/comment.png" alt="">
                            </a>
                            <a href="">
                                <img src="{{ asset('') }}landing/images/share.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <h4>
                            elements good design
                        </h4>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content
                            of a page when
                            looking at its layout. The point of using Lorem
                        </p>
                        <div>
                            <a href="">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end news section -->

<!-- subscribe section -->

<section class="subscribe_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>
                    {{-- subscribe our <br>
                        <span>
                            Newsletter
                        </span> --}}
                    Sudah Saatnya Karyamu Didengarkan
                    Dunia!
                </h2>
            </div>
            {{-- <div class="col-md-8">
                    <form action="">
                        <input type="text" placeholder="Enter your email">
                        <button>
                            Subscribe
                        </button>
                    </form>
                </div> --}}
        </div>
    </div>
</section>

<!-- end subscribe section -->

<!-- client section -->

{{-- <section class="client_section layout_padding">
        <div class="container">
            <div class="custom_heading-container">
                <h2>
                    What is Say Our Clients
                </h2>
                <hr>
            </div>
            <div class="client_container layout_padding-top">
                <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="box">
                                <div class="detail-box">
                                    <p>
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page
                                        when
                                        looking at its layout. The point of using Lorem Ipsum is that it has a
                                        more-or-less normal
                                        distribution of
                                        letters, It is a long established fact that a reader will be distracted by the
                                        readable content of a
                                        page
                                        when looking at its layout. The point of using Lorem Ipsum is that it has a
                                        more-or-less normal
                                        distribution of letters,
                                    </p>
                                </div>
                                <div class="client-id">
                                    <div class="img-box">
                                        <img src="{{ asset('') }}landing/images/client.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h5>
                                            readable content
                                        </h5>
                                        <h6>
                                            designer
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="detail-box">
                                    <p>
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page
                                        when
                                        looking at its layout. The point of using Lorem Ipsum is that it has a
                                        more-or-less normal
                                        distribution of
                                        letters, It is a long established fact that a reader will be distracted by the
                                        readable content of a
                                        page
                                        when looking at its layout. The point of using Lorem Ipsum is that it has a
                                        more-or-less normal
                                        distribution of letters,
                                    </p>
                                </div>
                                <div class="client-id">
                                    <div class="img-box">
                                        <img src="{{ asset('') }}landing/images/client.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h5>
                                            readable content
                                        </h5>
                                        <h6>
                                            designer
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="detail-box">
                                    <p>
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page
                                        when
                                        looking at its layout. The point of using Lorem Ipsum is that it has a
                                        more-or-less normal
                                        distribution of
                                        letters, It is a long established fact that a reader will be distracted by the
                                        readable content of a
                                        page
                                        when looking at its layout. The point of using Lorem Ipsum is that it has a
                                        more-or-less normal
                                        distribution of letters,
                                    </p>
                                </div>
                                <div class="client-id">
                                    <div class="img-box">
                                        <img src="{{ asset('') }}landing/images/client.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h5>
                                            readable content
                                        </h5>
                                        <h6>
                                            designer
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample2Controls" role="button"
                        data-slide="prev">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample2Controls" role="button"
                        data-slide="next">
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
    </section> --}}
<!-- end client section -->

<!-- contact section -->

<section class="contact_section layout_padding-bottom">
    <div class="container">
        <div class="d-flex flex-column align-items-end">
            <div class="custom_heading-container">
                <hr>
                <h2>
                    Kontak Kami
                </h2>
            </div>
        </div>
        {{-- <div class="layout_padding-top layout_padding2-bottom">
                <div class="row">
                    <div class="col-md-7">
                        <form action="">
                            <div class="contact_form-container">
                                <div>
                                    <div>
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div>
                                        <input type="email" placeholder="Email">
                                    </div>
                                    <div>
                                        <input type="text" placeholder="Phone Number">
                                    </div>
                                    <div class="">
                                        <input type="text" placeholder="Message" class="message_input">
                                    </div>
                                    <div class="mt-5">
                                        <button type="submit">
                                            send
                                        </button>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                    <div class="col-md-5">
                        <div class="map-box">
                            <div id="map">
                                <div class="map-responsive">
                                    <iframe
                                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                                        width="600" height="300" frameborder="0" style="border:0; width: 100%;"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        <div class="contact_items">

            {{-- <a href=""> --}}
            <div class="item ">
                <div class="img-box box-2">

                </div>
                <div class="detail-box">
                    <p>
                        +62 87747544031
                    </p>
                </div>
            </div>
            {{-- </a> --}}
            {{-- <a href=""> --}}
            <div class="item ">
                <div class="img-box box-3">

                </div>
                <div class="detail-box">
                    <p>
                        admin@rilislagu.id
                    </p>
                </div>
            </div>
            {{-- </a> --}}
            {{-- <a href=""> --}}
            {{-- <div class="item ">
                    <div class="img-box box-1">

                    </div>
                    <div class="detail-box">
                        <p>
                            t will be distracted by the readable
                        </p>
                    </div>
                </div> --}}
            {{-- </a> --}}
        </div>
    </div>
</section>
<!-- end contact section -->
@include('layouts.landing.footer')
