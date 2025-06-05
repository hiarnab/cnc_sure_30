@extends('layout.frontend.app')
@section('title', 'Sure 30')

@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('resourcescss/home.css') }}"> --}}
    @vite(['resources/css/home.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
@endpush

@section('content')
    <section class=" hero_section ">
        <div class="container ">
            <div class="row align-items-center">
                <!-- Left content -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class=" fw-bold font-size_title">SURE 30</h2>
                    <h4 class=" hero_title">Become a Future WBCS Officer</h4>

                      @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    
                    <p class=" text-color fs-5">
                        A 360° WBCS preparation - residential coaching, expert faculty, and a disciplined campus life
                        developed to help you become a future civil servant.
                    </p>
                    {{-- <p class="fw-bold text-danger">🏆 Limited Seats Available</p> --}}

                    <button class="btn counselling_btn my-3 ">Free Counselling </button>


                </div>
                <div class="col-lg-2 d-none d-lg-block  ">

                    {{-- <img src="{{ asset('assect/image/hero_img.webp') }}" class="img-fluid hero-img" alt="Hero Image"> --}}

                </div>
                <!-- Form -->
                <div class="col-lg-4">
                    <div class="registration-form form_sec">
                        <form action="{{ route('admission.store') }}" method="POST">
                            @csrf
                            <h2 class=" text-center fw-bold ">Admission Enquiry</h2>
                            <h5>Get up to 50% scholarship*</h5>

                            <div class="form-group">
                                <input type="text" class="form-control item @error('name') is-invalid @enderror"
                                    id="fullName" name="name" placeholder="Full Name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control item @error('phone') is-invalid @enderror"
                                    id="mobileNumber" name="phone" placeholder="Mobile Number"
                                    value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control item @error('email') is-invalid @enderror"
                                    id="emailId" name="email" placeholder="Email ID" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control item @error('pincode') is-invalid @enderror"
                                    id="pincode" name="pincode" placeholder="Area Pincode" value="{{ old('pincode') }}">
                                @error('pincode')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group d-flex justify-content-center align-items-center flex-column">
                                <button type="submit" class="btn btn-block create-account w-75">Apply Now</button>
                                <p style="font-size: 0.7rem;" class=" text-center mt-2" style="color:gray">By clicking
                                    submit button you are agreeing to <a
                                        href="https://careerandcourses.com/legal/privacy-policy"> Privacy Policy</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class=" bg-color">
        <div class="container mt-4 py-5">
            <div class="text-center mb-3">
                <h1 class="hero_title_01 ">Top WBCS Residential Coaching in Kolkata </h1>
            </div>
            <div>
                <p class="font_size_about mb-3 fs-5 text-blance">
                    At Career & Courses, we believe that West Bengal deserves passionate and capable civil servants, and we
                    are here to help you become one. We are not just a coaching centre. We are a launchpad for serious WBCS
                    aspirants who are ready to transform their dreams into reality.
                </p>
                <p class=" font_size_about m-0 fs-5 text-blance">
                    We admit <span class="fw-bold">only 30 committed learners per batch </span> — because we believe true
                    mentorship requires time, attention, and accountability. Our Residential WBCS Coaching Centre in Kolkata
                    is built for one single purpose: To create a focused, distraction-free environment where aspirants are
                    trained, guided, and transformed into officers.

                </p>


            </div>
        </div>
    </section>
    <section class=" bg-white">
        <div class="container mt-4 py-5">
            <div class="text-center mb-3 ">
                <h2 class="hero_title_01">Why Choose Us for WBCS Coaching? </h2>
            </div>
            <div>
                <p class="font_size_about mb-3 fs-5 text-blance text-center">
                    At Career & Courses, we offer a structured residential ecosystem that shapes ordinary aspirants into
                    extraordinary officers.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex">
                            <div class="d-flex align-items-center mb-2 me-2">
                                <i class="fa-solid fa-calendar-days icon"></i>
                            </div>
                            <div>
                                <h5 class="card-title mb-0">12-Months Programme</h5>
                                <p class="card-text">Residential Programme with complete guidance.</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex">
                            <div class="d-flex align-items-center mb-2 me-2">
                                <i class="fa-solid fa-chalkboard-user icon"></i>
                            </div>
                            <div>
                                <h5 class="card-title">Experienced Faculty</h5>
                                <p class="card-text">Learn from expert mentors and subject specialists.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex">
                            <div class="d-flex align-items-center mb-2 me-2">
                                <i class="fa-solid fa-comments icon"></i>
                            </div>
                            <div>
                                <h5 class="card-title">Mock Tests & Feedback</h5>
                                <p class="card-text">Regular evaluation and feedback to track progress.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex">
                            <div class="d-flex align-items-center mb-2 me-2">
                                <i class="fas fa-route icon"></i>
                            </div>
                            <div>
                                <h5 class="card-title">Structured Routine</h5>
                                <p class="card-text">Disciplined schedule designed for success.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex">
                            <div class="d-flex align-items-center mb-2 me-2">

                                <i class="fas fa-language icon"></i>
                            </div>
                            <div>

                                <h5 class="card-title">Language Focus</h5>
                                <p class="card-text">Special focus on Bengali & English paper preparation.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex">
                            <div class="d-flex align-items-center mb-2 me-2">
                                <i class="fas fa-graduation-cap icon"></i>
                            </div>
                            <div>
                                <h5 class="card-title">Interview Training</h5>
                                <p class="card-text">Dedicated training for personality development and interviews.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="text-center pt-3 mt-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                    Apply Now
                </button>
            </div>
            <div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title fw-bold" id="enquiryModalLabel">Admission Enquiry</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="fullName" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="fullName" name="fullName"
                                        placeholder="Enter your name" required>
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
    <section class="bg-color ">
        <div class="container mt-4 py-5 ">
            <div class="text-center  mb-3">
                <h2 class="hero_title_01"> Disciplined Campus Life</h2>
            </div>
            <div>
                <p class=" font_size_about mb-3 fs-5 text-blance text-center">
                    We don’t just teach — we train you to live like a future WBCS officer.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex">
                            <div class="d-flex align-items-center mb-2 me-2">
                                <i class="fa-solid fa-hotel icon"></i>
                            </div>
                            <div>
                                <h5 class="card-title">Safe & Secure</h5>
                                <p class="card-text">Separate Hostels for Boys and Girls</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex">
                            <div class="d-flex align-items-center mb-2 me-2">
                                <i class="fa-solid fa-utensils icon"></i>
                            </div>
                            <div>
                                <h5 class="card-title">Health & Nutrition</h5>
                                <p class="card-text">Nutritious Meals and Healthcare</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex">
                            <div class="d-flex align-items-center mb-2 me-2">
                                <i class="fas fa-balance-scale icon"></i>
                            </div>
                            <div>
                                <h5 class="card-title">Balanced Lifestyle Support</h5>
                                <p class="card-text">Regular Fitness & Meditation Sessions</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex">
                            <div class="d-flex align-items-center mb-2 me-2">
                                <i class="fas fa-ban icon"></i>
                            </div>
                            <div>
                                <h5 class="card-title">Discipline</h5>
                                <p class="card-text">Mobile Restriction During Study Hours</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=" bg-white ">
        <div class="container mt-4 py-5">
            <div class="text-center mb-3">
                <h2 class="hero_title_01">Students & Parents Reviews</h2>
            </div>
            <div class="row text-center mb-3">
                <div class="col-md-3 mb-3 mb-md-0">
                    <div class="card">
                        <div class="card-body py-4 mt-2">

                            <h5 class="font-weight-bold"> Rajdeep Saha</h5>

                            <ul class="list-unstyled d-flex justify-content-center">
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star-half-alt fa-sm text-info"></i>
                                </li>
                            </ul>
                            <p class="mb-2">
                                <i class="fas fa-quote-left pe-2"></i>From daily routine to mock interviews, everything at
                                Career & Courses was structured like an officer’s life. That mindset helped me clear the
                                WBCS on my first attempt. This place truly shapes civil servants.

                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                    <div class="card">
                        <div class="card-body py-4 mt-2">

                            <h5 class="font-weight-bold">Sudipta Das</h5>

                            <ul class="list-unstyled d-flex justify-content-center">
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                            </ul>
                            <p class="mb-2">
                                <i class="fas fa-quote-left pe-2"></i>Career & Courses gave me more than just coaching —
                                they gave me clarity, discipline, and confidence. Living on campus kept me focused every
                                single day. Thanks to their guidance, I’ve cracked WBCS and joined Group B services.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3  mb-md-0">
                    <div class="card">
                        <div class="card-body py-4 mt-2">

                            <h5 class="font-weight-bold">Ananya Mukherjee</h5>

                            <ul class="list-unstyled d-flex justify-content-center">
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="far fa-star fa-sm text-info"></i>
                                </li>
                            </ul>
                            <p class="mb-2">
                                <i class="fas fa-quote-left pe-2"></i>My daughter is now a WBCS officer, and I credit
                                Career & Courses for building her from the ground up. The disciplined campus life, expert
                                teachers, and constant mentorship changed her life.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-0  ">
                    <div class="card">
                        <div class="card-body py-4 mt-2">

                            <h5 class="font-weight-bold">Dipak Roy</h5>

                            <ul class="list-unstyled d-flex justify-content-center">
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="far fa-star fa-sm text-info"></i>
                                </li>
                            </ul>
                            <p class="mb-2">
                                <i class="fas fa-quote-left pe-2"></i>We trusted Career & Courses when they said they take
                                only 30 students seriously. That personal attention helped my son succeed in WBCS. Today,
                                our entire family is proud and grateful.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class=" bg-color">
        <div class="container mt-4 py-5 ">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="text-center  ">
                        <h2 class="fw-bold text-primary">FAQs</h2>
                    </div>
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                                    What is the duration of the WBCS residential course?
                                </button>
                            </h3>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    The course is designed for 12 months, covering Prelims, Mains, and Interview stages with
                                    integrated study, test series, and mentorship.

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                    How many students are admitted per batch?
                                </button>
                            </h3>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We take only 30 students per batch to ensure personal attention, focused mentorship, and
                                    a disciplined learning environment.

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                    Is the coaching completely residential?
                                </button>
                            </h3>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, it’s a fully residential programme with separate hostels for boys and girls.
                                    Students stay on campus for focused and distraction-free preparation.

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                    Where is the campus located?
                                </button>
                            </h3>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our WBCS residential campus is located in Barrackpore, Kolkata- 700121, easily
                                    accessible
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection

@push('scripts')
@endpush
