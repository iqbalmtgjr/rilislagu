@extends('layouts.admin.master')

@push('header')
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('') }}admin/plugins/summernote/summernote-bs4.min.css">
@endpush
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Artikel</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/kelola-berita">Kelola Artikel</a></li>
                        <li class="breadcrumb-item active">Tambah Artikel</li>
                    </ol>
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
                            <div class="col-md-12">
                                <div class="card card-outline card-info">
                                    {{-- <div class="card-header">
                                        <h3 class="card-title">
                                            Summernote
                                        </h3>
                                    </div> --}}
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <form action="{{ url('/kelola-berita/post') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="judul">Judul</label>
                                                <input type="text"
                                                    class="form-control @error('judul') is-invalid  @enderror"
                                                    name="judul" id="judul" placeholder="Masukkan Judul"
                                                    value="{{ old('judul') }}">

                                                @error('judul')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="summernote">Isi</label>
                                                <textarea class="form-control @error('isi') is-invalid  @enderror" name="isi" id="summernote">{{ old('isi') }}</textarea>
                                                @error('isi')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="gambar">Gambar</label>
                                                <input type="file"
                                                    class="form-control @error('gambar') is-invalid @enderror"
                                                    name="gambar" placeholder="" value="{{ old('gambar') }}">

                                                @error('gambar')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group text-right mt-3">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@push('footer')
    <!-- Summernote -->
    <script src="{{ asset('') }}admin/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote({
                height: 300
            })

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>
@endpush
