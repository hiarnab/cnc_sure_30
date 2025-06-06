<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layout.frontend.partials.head')

<body>
    <header class="fixed-top" style="background-color: #fff">
        @include('layout.frontend.partials.header')
    </header>
    <main>
        @yield('content')
    </main>
    @include('layout.frontend.partials.footer')
    @stack('scripts')
</body>

</html>
