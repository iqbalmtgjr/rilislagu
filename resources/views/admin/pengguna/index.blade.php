@extends('layouts.admin.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kelola Pengguna</h1>
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
                            <div class="row">
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#tambah"
                                    class="btn btn-primary btn-sm mb-3 float-right ml-auto">+
                                    Tambah Pengguna</a>
                            </div>
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="1%">No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>
                                                @if ($item->role == 'admin')
                                                    <span class="badge badge-success">Admin</span>
                                                @else
                                                    <span class="badge badge-info">User</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" data-toggle="modal"
                                                    data-id="{{ $item->id }}" data-target="#edit"
                                                    class="btn btn-success btn-sm edit">Edit</a>
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
    @include('admin.pengguna.tambah')
    @include('admin.pengguna.edit')
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
