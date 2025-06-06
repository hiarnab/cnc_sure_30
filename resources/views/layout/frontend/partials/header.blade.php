<div class="container">
    <nav class="navbar navbar-expand-lg " >
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#" >
                <img src="{{ asset('assets/image/C&C Sure 30 Logo.webp') }}" alt="logo" height="70">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="mainNavbar">
                <ul class="navbar-nav ms-auto">
                      {{-- <li class="nav-item">
                        <a class="nav-link active" href="{{ route('login') }}">Login</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/#why') }}">Why Choose Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/#review')  }}">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  data-bs-toggle="modal" data-bs-target="#enquiryModal">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
