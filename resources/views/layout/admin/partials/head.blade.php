<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @yield('meta')

    <title>@yield('title', 'WBCS Coaching | Sure 30')</title>
    <link rel="icon" href="/assets/image/CNC_LOGO.webp" type="image/x-icon" />

    <!-- Fonts (unchanged) -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        @yield('meta')

        <title>@yield('title', 'WBCS Coaching | Sure 30')</title>
        <link rel="icon" href="/assets/image/CNC_LOGO.webp" type="image/x-icon" />

        <!-- Fonts (unchanged) -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        {{-- ─── VITE ASSETS ─────────────────────────────── --}}
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/backend.css', 'resources/js/backend.js'])
        @else
            @php
                $manifestPath = public_path('build/manifest.json');
                $manifest = file_exists($manifestPath) ? json_decode(file_get_contents($manifestPath), true) : [];
                $assets = collect($manifest)->pluck('file')->filter();
            @endphp

            @foreach ($assets as $asset)
                @php $filePath = asset('build/' . $asset); @endphp

                @if (str_ends_with($asset, '.css') && str_starts_with($asset, 'assets/backend-'))
                    <link rel="stylesheet" href="{{ $filePath }}" />
                @elseif ((str_ends_with($asset, '.js') || str_ends_with($asset, '.vue')) && str_starts_with($asset, 'assets/backend-'))
                    <script src="{{ $filePath }}" defer></script>
                @endif
            @endforeach
        @endif

        @stack('styles')
    </head>

    @stack('styles')
</head>
