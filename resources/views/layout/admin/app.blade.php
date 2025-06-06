<!doctype html>
<html lang="en">

@include('layout.admin.partials.head')

<body>
    {{-- <script src="{{ asset('admin/js/demo-theme.min.js?1684106062') }}"></script> --}}
    <div class="page">
        @include('layout.admin.partials.sidebar')
        @yield('content')
        @include('layout.admin.partials.footer')
    </div>
    <!-- Libs JS -->

    {{-- <script src="{{ asset('assets/js/demo-theme.min.js?1692870487') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js?1692870487') }}" defer></script>
    <script src="{{ asset('assets/libs/jsvectormap/dist/js/jsvectormap.min.js?1692870487') }}" defer></script>
    <script src="{{ asset('assets/libs/jsvectormap/dist/maps/world.js?1692870487') }}" defer></script>
    <script src="{{ asset('assets/libs/jsvectormap/dist/maps/world-merc.js?1692870487') }}" defer></script>
    <!-- Tabler Core -->
    <script src="{{ asset('assets/js/tabler.min.js?1692870487') }}" defer></script>
    <script src="{{ asset('assets/js/demo.min.js?1692870487') }}" defer></script> --}}
    @stack('js')
</body>

</html>
