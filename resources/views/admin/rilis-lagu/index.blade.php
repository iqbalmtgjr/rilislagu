@extends('layouts.admin.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Rilis Lagu</h1>
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
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="1%">No</th>
                                        <th>Perilis</th>
                                        <th>Judul Lagu</th>
                                        <th>Genre</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->user->name }}</td>
                                            <td>{{ $item->judul_rilisan }}</td>
                                            <td>{{ $item->genre_musik }}</td>
                                            <td>
                                                @if ($item->status == 1)
                                                    <span class="badge badge-success">Rilis</span>
                                                @else
                                                    <span class="badge badge-warning">Belum Rilis</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ $item->url_play }}" target="_blank"
                                                    class="btn btn-info btn-sm"><i class="fas fa-play"></i></a>

                                                <a href="{{ route('rilis.show', $item->id) }}"
                                                    class="btn btn-success btn-sm">Lihat</a>
                                                <button data-id="{{ $item->id }}"
                                                    class="btn btn-danger btn-sm hapus">Hapus</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    {{-- @include('admin.pengguna.edit') --}}
@endsection
@push('header')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('') }}admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('') }}admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('') }}admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush
@push('footer')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('') }}admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('') }}admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('') }}admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('') }}admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('') }}admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('') }}admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('') }}admin/plugins/jszip/jszip.min.js"></script>
    <script src="{{ asset('') }}admin/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('') }}admin/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('') }}admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('') }}admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('') }}admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(function() {
            $('#example2').DataTable();
        });
    </script>

    <script>
        $('.hapus').click(function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            let url = '{{ route('pengguna.destroy', ':id') }}';
            url = url.replace(':id', id);

            Swal.fire({
                title: "Apakah anda yakin",
                text: "Ingin menghapus pengguna ini?",
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
    </script>
@endpush
