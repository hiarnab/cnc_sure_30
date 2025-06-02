<!DOCTYPE html>
<html lang="en">

@include('layouts.frontend.partials.head')



<body class="font-sans-variable">
    @include('layouts.frontend.partials.navbar')
    <main class="min-h-screen bg-gray-50 container mx-auto px-4 py-8">

        {{-- Flash Messages --}}

        @yield('content')


    </main>
</body>

</html>
