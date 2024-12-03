<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description"
        content="Rilislagu.id adalah website yang menawarkan bantuan untuk merilis lagu ke berbagai platform musik digital seperti Spotify, Apple Music, Joox, TikTok dan lain-lain. Kami akan membantu Anda dalam proses distribusi musik Anda agar dapat didengar oleh masyarakat luas." />
    <meta name="author" content="" />

    <title>Rilis Lagu</title>

    <link rel="shortcut icon" href="{{ asset('') }}rilislagu.png" type="image/x-icon">

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}landing/css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('') }}landing/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('') }}landing/css/responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{-- <img src="{{ asset('') }}landing/images/logo.png" alt=""> --}}
                        <img src="{{ asset('') }}rilislagu.png" alt="">
                        <span>
                            Rilis Lagu
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('/') }}">Beranda <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">Tentang Kami </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/layanan-kami">Layanan Kami </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/paket-harga">Paket Harga</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/artikel">Artikel </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('login') }}">Login</a>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="quote_btn-container  d-flex justify-content-center">
                            <a href="https://wa.me/6287747544031?text=halo admin rilis lagu" target="_blank">
                                <img src="{{ asset('') }}landing/images/call.png" alt="">
                                +62 87747544031
                            </a>
                            <a href="">
                                <span>
                                    @
                                </span>
                                admin@rilislagu.id
                            </a>
                        </div> --}}
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
