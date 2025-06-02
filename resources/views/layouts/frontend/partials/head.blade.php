<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    @stack('styles')


    {{-- dont touch this section --}}
    

{{-- dont touch this section --}}

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))) @vite(['resources/css/app.css', 'resources/js/app.js'])
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
    
    {{-- end dont touch this section --}}
 
</head>
