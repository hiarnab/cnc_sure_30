@extends('layouts.frontend.app')
@section('title', 'Home Page')
@push('styles')
    <style>
        .top_possition {
            position: relative;
            top: 50px;
        }

        .bg-white {
            background-color: #fff !important;
        }
    </style>
@endpush
@section('content')
    <section class="py-5 bg-white top_possition">
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


@endsection
