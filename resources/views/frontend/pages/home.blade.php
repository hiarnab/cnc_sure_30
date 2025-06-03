@extends('layout.frontend.app')
@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('resourcescss/home.css') }}"> --}}
    @vite(['resources/css/home.css'])
@endpush

@section('content')

 <section class="py-5 bg-white hero_section top_possition ">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left content -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="text-primary fw-bold">SURE 30</h2>
                    <h4 class="fw-semibold">Become a Future WBCS Officer</h4>
                    <p class="text-muted">
                        A 360° WBCS preparation - residential coaching, expert faculty, and a disciplined campus life
                        developed to help you become a future civil servant.
                    </p>
                    <p class="fw-bold text-danger">🏆 Limited Seats Available</p>
                    <button class="btn btn-outline-primary">Free Counselling</button>
                </div>

                <!-- Form -->
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Admission Enquiry</h5>
                            <form>
                                <div class="mb-3">
                                    <label for="fullName" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="fullName" placeholder="Enter your name"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="mobileNumber" class="form-label">Mobile Number</label>
                                    <input type="tel" class="form-control" id="mobileNumber"
                                        placeholder="Enter mobile number" required>
                                </div>
                                <div class="mb-3">
                                    <label for="emailId" class="form-label">Email ID</label>
                                    <input type="email" class="form-control" id="emailId"
                                        placeholder="Enter email address" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pincode" class="form-label">Area Pincode</label>
                                    <input type="text" class="form-control" id="pincode"
                                        placeholder="Enter area pincode" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- <div class="hero_section">
        <form class="mb-5">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button>
    </div> --}}

    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
