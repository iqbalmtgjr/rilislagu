@extends('layouts.landing2.master')

@section('content')
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-50 flex-md-row-reverse">
                <div class="col-md-12">
                    <div class="box-about">
                        <div class="box-about-title-wrap">
                            <h2 class="box-about-mega-title">Rilis Lagu</h2>
                            <h2 class="box-about-title">{{ $data->judul }}</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div style="display: flex; justify-content: center;">
                                    <img src="{{ asset('admin/berita/gambar/' . $data->gambar) }}" alt=""
                                        class="img-fluid" style="width: 50%;">
                                </div>
                                <p>
                                    {!! $data->isi !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    {{-- <section class="portfolio_section layout_padding">
        <div class="container">
            <div class="custom_heading-container">
                <h2>
                    {{ $data->judul }}
                </h2>
                <hr>
            </div>
            <p>
                {{ $data->created_at->format('d-M-Y') }}
            </p>
            <div class="detail-box">
                <div style="display: flex; justify-content: center;">
                    <img src="{{ asset('admin/berita/gambar/' . $data->gambar) }}" alt="" class="img-fluid"
                        style="width: 50%;">
                </div>
                <p>
                    {!! $data->isi !!}
                </p>
            </div>
        </div>
        </div>
        </div>
    </section> --}}
@endsection
