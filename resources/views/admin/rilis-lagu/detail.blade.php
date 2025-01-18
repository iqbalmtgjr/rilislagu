@extends('layouts.admin.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Rilis Lagu</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        {{-- <div class="card-header">
                            <h3 class="card-title">Berita</h3>
                        </div> --}}
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Nama Artis</th>
                                    <td>{{ $data->nama_artis_utama }}</td>
                                </tr>
                                <tr>
                                    <th>Judul Lagu</th>
                                    <td>{{ $data->judul_rilisan }}</td>
                                </tr>
                                <tr>
                                    <th>Tipe Rilis</th>
                                    <td>{{ $data->tipe_rilisan }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Karya</th>
                                    <td>{{ $data->jenis_karya }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Artis Utama</th>
                                    <td>{{ $data->nama_artis_utama }}</td>
                                </tr>
                                <tr>
                                    <th>URL Spotify Utama</th>
                                    <td>{{ $data->url_spotify_utama }}</td>
                                </tr>
                                <tr>
                                    <th>URL Apple Music Artis Utama</th>
                                    <td>{{ $data->url_apple_music_artis_utama }}</td>
                                </tr>
                                <tr>
                                    <th>Artis Featuring</th>
                                    <td>{{ $data->artis_featuring }}</td>
                                </tr>
                                <tr>
                                    <th>URL Spotify Artis Featuring</th>
                                    <td>{{ $data->url_spotify_artis_featuring }}</td>
                                </tr>
                                <tr>
                                    <th>URL Apple Music Artis Featuring</th>
                                    <td>{{ $data->url_apple_music_artis_featuring }}</td>
                                </tr>
                                <tr>
                                    <th>Artwork</th>
                                    <td>{{ $data->artwork }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Rilis</th>
                                    <td>{{ \Carbon\Carbon::parse($data->tanggal_rilis)->format('d-m-Y') }}</td>
                                </tr>
                                <tr>
                                    <th>Genre Musik</th>
                                    <td>{{ $data->genre_musik }}</td>
                                </tr>
                                <tr>
                                    <th>Sub Genre</th>
                                    <td>{{ $data->sub_genre }}</td>
                                </tr>
                                <tr>
                                    <th>Lagu Tanpa Vocal</th>
                                    <td>{{ $data->lagu_tanpa_vocal ? 'Ya' : 'Tidak' }}</td>
                                </tr>
                                <tr>
                                    <th>Bahasa Judul</th>
                                    <td>{{ $data->bahasa_judul }}</td>
                                </tr>
                                <tr>
                                    <th>Bahasa Lirik</th>
                                    <td>{{ $data->bahasa_lirik }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Label</th>
                                    <td>{{ $data->nama_label }}</td>
                                </tr>
                                <tr>
                                    <th>File Lagu</th>
                                    <td>{{ $data->file_lagu }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Pencipta</th>
                                    <td>{{ $data->nama_pencipta }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Komposer</th>
                                    <td>{{ $data->nama_komposer }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Pemegang Hak Cipta</th>
                                    <td>{{ $data->nama_pemegang_hak_cipta }}</td>
                                </tr>
                                <tr>
                                    <th>UPC</th>
                                    <td>{{ $data->upc }}</td>
                                </tr>
                                <tr>
                                    <th>Additional Credits</th>
                                    <td>{{ $data->additional_credits }}</td>
                                </tr>
                                <tr>
                                    <th>Konten Dewasa</th>
                                    <td>{{ $data->konten_dewasa ? 'Ya' : 'Tidak' }}</td>
                                </tr>
                                <tr>
                                    <th>Tambahan Lirik File</th>
                                    <td>{{ $data->tambahan_lirik_file }}</td>
                                </tr>
                                <tr>
                                    <th>Detik Mulai</th>
                                    <td>{{ $data->detik_mulai }}</td>
                                </tr>
                                <tr>
                                    <th>Saya Adalah</th>
                                    <td>{{ $data->saya_adalah }}</td>
                                </tr>
                                <tr>
                                    <th>URL Sosial Media Artis</th>
                                    <td>{{ $data->url_sosial_media_artis }}</td>
                                </tr>
                                <tr>
                                    <th>URL Web Artis</th>
                                    <td>{{ $data->url_web_artis }}</td>
                                </tr>
                                <tr>
                                    <th>Kota Asal</th>
                                    <td>{{ $data->kota_asal }}</td>
                                </tr>
                                <tr>
                                    <th>No HP</th>
                                    <td>{{ $data->no_hp }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Layanan</th>
                                    <td>{{ $data->jenis_layanan }}</td>
                                </tr>
                                <tr>
                                    <th>Upload KTP</th>
                                    <td>{{ $data->upload_ktp }}</td>
                                </tr>
                                <tr>
                                    <th>Jasa Tambahan</th>
                                    <td>{{ $data->jasa_tambahan }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{ $data->status == 1 ? 'Rilis' : 'Belum Rilis' }}</td>
                                </tr>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="text-left mb-3 mt-3">
                        <a href="{{ url('submit') }}" class="btn btn-secondary"><i
                                class="fas fa-arrow-left mr-2"></i>Kembali</a>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
