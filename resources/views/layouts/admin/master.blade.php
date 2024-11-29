@include('layouts.admin.header')

@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')
<main class="app-main"> <!--begin::App Content Header-->
    @yield('content')
    {{-- {{ isset($slot) ? $slot : null }} --}}
</main> <!--end::App Main--> <!--begin::Footer-->
@include('layouts.admin.footer')
