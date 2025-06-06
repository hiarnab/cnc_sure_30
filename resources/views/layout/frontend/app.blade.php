<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')

    <title>
        @yield('title', 'WBCS Coaching | Sure 30')
    </title>
    <link rel="icon" type="image/x-icon" href="/assets/image/CNC_LOGO.webp">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))) @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/tabler-icons.css'])
    @else
        @php
            $manifestPath = public_path('build/manifest.json');
            $manifest = file_exists($manifestPath) ? json_decode(file_get_contents($manifestPath), true) : [];
            $assets = collect($manifest)->pluck('file')->filter();
        @endphp @foreach ($assets as $asset)
            @php $filePath = mix('build/' . $asset); @endphp @if (str_ends_with($asset, '.css'))
                <link rel="stylesheet" href="{{ $filePath }}">
            @elseif (str_ends_with($asset, '.js') || str_ends_with($asset, '.vue'))
                <script src="{{ $filePath }}" defer></script>
            @elseif (in_array(pathinfo($asset, PATHINFO_EXTENSION), ['ttf', 'woff', 'woff2', 'eot']))
                <link rel="stylesheet" href="{{ $filePath }}">
            @endif
        @endforeach
    @endif

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
