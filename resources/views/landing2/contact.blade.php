@include('layouts.landing2.header')
@include('layouts.landing2.navbar')

{{-- <section class="breadcrumbs-custom bg-image context-dark"
    style="background-image: url(landing2/images/bg-breadcrumbs-02-1920x480.jpg);">
    <div class="container">
        <h2 class="breadcrumbs-custom-title">Contact</h2>
    </div>
    <ul class="breadcrumbs-custom-path">
        <li><a href="/">Home</a></li>
        <li class="active">About</li>
    </ul>
</section> --}}
<section class="section section-lg bg-default">
    <div class="container">
        <section class="section section-md bg-default">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-about">
                            <div class="box-about-title-wrap">
                                <h2 class="box-about-mega-title">Rilis Lagu</h2>
                                <h2 class="box-about-title">Contact Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-50 justify-lg-content-center row-custom-border">
                    <div class="col-lg-6 col-md-6">
                        <div class="box-icon-classic">
                            <div class="icon novi-icon icon-primary icon-lg fl-bigmug-line-cellphone55"></div>
                            <h5 class="box-icon-classic-title">Whatsapp</h5>
                            <ul class="box-icon-classic-list">
                                <li><a href="tel:#">+62-877-475–44031</a></li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-6">
                        <div class="box-icon-classic">
                            <div class="icon novi-icon icon-primary icon-lg fl-bigmug-line-big104"></div>
                            <h5 class="box-icon-classic-title">Alamat</h5>
                            <ul class="box-icon-classic-list">
                                <li><a href="#">6036 Richmond hwy., <br> Alexandria, VA, 2230</a></li>
                            </ul>
                        </div>
                    </div> --}}
                    <div class="col-lg-6 col-md-6">
                        <div class="box-icon-classic">
                            <div class="icon novi-icon icon-primary icon-md fl-bigmug-line-email64"></div>
                            <h5 class="box-icon-classic-title">e-mails</h5>
                            <ul class="box-icon-classic-list">
                                <li><a href="mailto:#">terokamusikamedia.corp@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Mailform-->
        <section class="section section-lg bg-default">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <h3>Hubungi Kami</h3>
                        <p class="text-gray-600">Silakan meninggalkan pesan atau bertanya menggunakan form di bawah
                            ini.</p>
                    </div>
                </div>
                <!--RD Mailform-->
                <form class="rd-form rd-mailform text-left" data-form-output="form-output-global"
                    data-form-type="contact" method="post" action="{{ route('contact.store') }}">
                    @csrf
                    <div class="row row-40">
                        <div class="col-lg-4">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-name">Nama</label>
                                <input class="form-input" id="contact-name" type="text" name="nama">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-phone">No Whatsapp</label>
                                <input class="form-input" id="contact-phone" type="text" name="no_whatsapp">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-email">E-Mail</label>
                                <input class="form-input" id="contact-email" type="email" name="email">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-message">Pesan</label>
                                <textarea class="form-input" id="contact-message" name="message"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-wrap">
                                <button class="button button-primary" type="submit">Kirim Pesan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</section>

@include('layouts.landing2.footer')
