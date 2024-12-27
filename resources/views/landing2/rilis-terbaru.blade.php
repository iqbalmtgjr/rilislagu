@extends('layouts.landing2.master')

@section('content')
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-50 flex-md-row-reverse">
                <div class="col-md-12">
                    <div class="box-about">
                        <div class="box-about-title-wrap">
                            <h2 class="box-about-mega-title">Rilis Lagu</h2>
                            <h2 class="box-about-title">Rilis Terbaru</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <iframe style="border-radius:12px"
                                    src="https://open.spotify.com/embed/playlist/6C4bAVnlrPRqOjFyhbSkxM?utm_source=generator&theme=0"
                                    width="100%" height="500" frameBorder="0" allowfullscreen=""
                                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                                    loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
