@extends('layouts.landing.master')

@section('content')
    <section class="news_section layout_padding">
        <div class="container">
            <div class="d-flex flex-column align-items-end">
                <div class="custom_heading-container">
                    <hr>
                    <h2>
                        Artikel Terbaru
                    </h2>

                </div>
                {{-- <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority
                </p> --}}
            </div>
            <div class="row">
                @foreach ($data as $item)
                    <div class="col-md-4">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('') }}admin/berita/gambar/{{ $item->gambar }}" alt="">
                            </div>
                            <div class="action-box">
                                {{-- <div class="action">
                                    <a href="">
                                        <img src="{{ asset('') }}landing/images/like.png" alt="">
                                    </a>
                                    <a href="">
                                        <img src="{{ asset('') }}landing/images/comment.png" alt="">
                                    </a>
                                    <a href="">
                                        <img src="{{ asset('') }}landing/images/share.png" alt="">
                                    </a>
                                </div> --}}
                            </div>
                            <div class="detail-box">
                                <h4>
                                    {{ $item->judul }}
                                </h4>
                                <p>
                                    {!! Str::limit(strip_tags($item->isi), 100) !!}
                                </p>
                                <div>
                                    <a href="{{ route('berita.show', $item->slug) }}">
                                        Baca Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
