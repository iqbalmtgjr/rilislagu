@include('layouts.landing2.header')
@include('layouts.landing2.navbar')

{{-- <section class="breadcrumbs-custom bg-image context-dark"
    style="background-image: url(landing2/images/bg-breadcrumbs-02-1920x480.jpg);">
    <div class="container">
        <h2 class="breadcrumbs-custom-title">About</h2>
    </div>
    <ul class="breadcrumbs-custom-path">
        <li><a href="index.html">Home</a></li>
        <li class="active">About</li>
    </ul>
</section> --}}
<section class="section section-lg bg-default">
    <div class="container">
        <div class="row row-50 flex-md-row-reverse">
            <div class="col-md-6 text-center">
                <div class="box-image-1"><img src="{{ asset('') }}landing2/images/Rilis.png" alt=""
                        width="468" height="276" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-about">
                    <div class="box-about-title-wrap">
                        <h2 class="box-about-mega-title">Rilis Lagu</h2>
                        <h2 class="box-about-title">About</h2>
                    </div>
                    <p>
                        We are music lovers! <br><br>

                        Kami adalah agregator, pemasar, dan distributor, you can name it! dan kami melayani siapapun,
                        entah itu Artist atau Record Label Independent yang senang menunjukkan talenta dan bakat kepada
                        dunia. <br><br>


                        Revolusi dalam industri musik digital membawa dampak yang sangat siginifikan. Bayangkan,
                        sekarang musik dapat diunggah dengan satu klik tombol saja, namun kami yakin ini belum cukup.
                        Kami percaya bahwa artis berhak untuk didengarkan di seluruh dunia. Oleh karena itu kami
                        membantu artis dalam distribusi musik, produksi, agregasi dan streaming.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.landing2.footer')
