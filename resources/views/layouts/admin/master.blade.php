@include('layouts.admin.header')

@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    @yield('content')
</div>
<!-- /.content-wrapper -->
@include('layouts.admin.footer')
