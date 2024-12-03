@extends('layouts.landing.master')

@section('content')
    <section class="portfolio_section layout_padding">
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
    </section>
@endsection
