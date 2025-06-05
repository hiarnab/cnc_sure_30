<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')

    <title>
        @yield('title', 'WBCS Coaching | Sure 30')
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->

    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/footer.css' ,'resources/css/header.css'])
 
    @stack('styles')


</head>

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
