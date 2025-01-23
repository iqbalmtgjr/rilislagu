@extends('layouts.admin.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">My Release</h1>
                    {{-- <a href="#" data-toggle="popover" title="Popover Header" data-placement="top"
                        data-content="Some content inside the popover">Toggle popover</a> --}}
                </div>
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
                    {{-- <div class="card"> --}}
                    {{-- <div class="card-header">
                            <h3 class="card-title">Submit Lagu</h3>
                        </div> --}}
                    <!-- /.card-header -->
                    {{-- <div class="card-body"> --}}
                    <center>
                        {{-- <div class="row"> --}}
                        {{-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                            data-target="#modal-tambah">
                            Submit Lagu Sekarang
                        </button> --}}
                        <a href="{{ url('/submit/create') }}" class="btn btn-primary btn-lg">Submit Lagu Sekarang</a>
                        {{-- </div> --}}
                    </center>

                    <hr>
                    @if ($data->count() > 0)
                        {{-- <div class="row">
                                    <div class="col-12">
                                        <center>
                                            <h1><strong>List Lagu Anda</strong></h1>
                                        </center>
                                    </div>
                                </div> --}}
                        <div class="row">
                            @foreach ($data as $item)
                                <div class="col-md-3 col-sm-6 col-6">
                                    <div class="card" style="width:100%; margin:20px 0 24px 0">
                                        <img class="card-img-top" src="{{ asset('files/artwork/' . $item->artwork) }}"
                                            alt="image"
                                            style="width:100%; @media only screen and (max-width: 600px) {width: 150px;}">
                                        <div class="card-body text-center">
                                            <h2 class="card-title" style="font-size: 18px">
                                                {{ $item->judul_rilisan }}</h2>
                                            <p class="card-text">
                                                @if ($item->status == 1)
                                                    <span class="badge badge-success">RILIS</span>
                                                @else
                                                    <span class="badge badge-warning">BELUM RILIS</span>
                                                @endif
                                            </p>
                                            <div class="d-flex justify-content-center">
                                                <a href="{{ route('submit.show', $item->id) }}" class="btn btn-info btn-sm"
                                                    target="_blank"><i class="fas fa-eye"></i></a>
                                                <a href="{{ $item->url_play }}" target="_blank"
                                                    class="btn btn-success btn-sm ml-2"><i class="fas fa-play"></i></a>
                                                <button data-id="{{ $item->id }}" class="btn btn-danger btn-sm ml-2"><i
                                                        class="fas fa-trash"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="alert alert-info" role="alert">
                            Belum ada submit lagu
                        </div>
                    @endif
                    {{-- </div> --}}
                    <!-- /.card-body -->
                    {{-- </div> --}}
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @include('admin.submitlagu.tambah')
@endsection
@push('header')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('') }}admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('') }}admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('') }}admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush
@push('footer')
    <script>
        $(document).ready(function() {
            $('[data-toggle="popover"]').popover({
                html: true,
                content: function() {
                    return $(this).attr('data-content');
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $('.hapus').click(function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            let url = '{{ route('submit.destroy', ':id') }}';
            url = url.replace(':id', id);

            Swal.fire({
                title: "Apakah anda yakin",
                text: "Ingin menghapus berita ini?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, hapus ini!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Dihapus!",
                        text: "Data berhasil dihapus.",
                        icon: "success"
                    });
                    window.location.href = url;
                }
            });
        });

        $('.status_publish').click(function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            let url = '{{ route('berita.status', ':id') }}';
            url = url.replace(':id', id);

            Swal.fire({
                title: "Apakah anda yakin",
                text: "Ingin ubah ke draft?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Diubah!",
                        text: "Status berhasil diubah.",
                        icon: "success"
                    });
                    window.location.href = url;
                }
            });
        });

        $('.status_draft').click(function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            let url = '{{ route('berita.status', ':id') }}';
            url = url.replace(':id', id);

            Swal.fire({
                title: "Apakah anda yakin",
                text: "Ingin ubah ke publish?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Diubah!",
                        text: "Status berhasil diubah.",
                        icon: "success"
                    });
                    window.location.href = url;
                }
            });
        });
    </script>
@endpush
