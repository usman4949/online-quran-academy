@extends('home_template.layout')

@section('main_content')

<!-- <marquee behavior="scroll" direction="left" class="text-success">Welcome to our Online Quran Academy</marquee> -->

<!-- Spinner Start -->
<div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-success" role="status"></div>
</div>

<!-- Hero Start -->
<div class="container-fluid hero-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-header-inner animated zoomIn">
                    <p class="fs-4 text-dark">Welcome To Our Islamic Online Madrasah </p>
                    <h5 class="display-1 mb-5 text-success">Online Quran Academy</h5>
                    <a href="" class="btn btn-success py-3 px-5" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Quick Join Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Satrt -->
<div class="container-fluid about py-5">
    <div class="mx-auto text-center mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
        <p class="fs-5 text-uppercase text-success">About Our Quran Academy</p>
        <h1>Asia Largest Madrasah</h1>
    </div>
    <div class="container py-5">
        <div class="row g-5 mb-5">
            <div class="col-xl-6">
                <div class="row g-4">
                    <div class="col-6">
                        <img src="{{ asset('assets/images/about-1.jpg') }}" class="img-fluid h-100 wow zoomIn" data-wow-delay="0.1s" alt="image">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('assets/images/about-2.jpg') }}" class="img-fluid pb-3 wow zoomIn" data-wow-delay="0.1s" alt="image">
                        <img src="{{ asset('assets/images/about-3.jpg') }}" class="img-fluid pt-3 wow zoomIn" data-wow-delay="0.1s" alt="image">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <div class="ps-3 d-flex align-items-center justify-content-start">
                            <span><i class="fa fa-eye text-success fa-4x mb-5 pb-2"></i></span>
                            <div class="ms-4">
                                <h5>Our Vision</h5>
                                <p>Learn quick Quran class</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ps-3 d-flex align-items-center justify-content-start">
                            <span><i class="fa fa-flag text-success fa-4x mb-5 pb-2"></i></span>
                            <div class="ms-4">
                                <h5>Our Mission</h5>
                                <p>ISO certified Islamic Institute</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-light p-3 mb-4">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-3">
                            <img src="img/about-child.jpg" class="img-fluid rounded-circle" alt="image">
                        </div>
                        <div class="col-9">
                            <p class="mb-0">We welcome our users to Online Quran teaching services where we are
                                offering multiple Islamic as well as character building and life reformation courses
                                as per the teachings of Sharia.</p>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md-6">
                        <p class="mb-2"><i class="fa fa-check text-success me-3"></i>Charity & Donation</p>
                        <p class="mb-0"><i class="fa fa-check text-success me-3"></i>Parent Education</p>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-2"><i class="fa fa-check text-success me-3"></i>Hadith & Sunnah</p>
                        <p class="mb-0"><i class="fa fa-check text-success me-3"></i>Mosque Development</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center bg-success py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row g-4 align-items-center">
                <div class="col-lg-2">
                    <i class="fa fa-mosque fa-5x text-light"></i>
                </div>
                <div class="col-lg-7 text-center text-lg-start">
                    <h1 class="mb-0 text-light">Every Muslim Needs To Realise The Importance Of The "Pillar" Of
                        Islam</h1>
                </div>
                <div class="col-lg-3">
                    <a href="" class="btn btn-light py-2 px-4">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Activities Start -->
<div class="container-fluid activities py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <p class="fs-5 text-uppercase text-success">WHAT WE OFFER</p>
            <h1 class="display-6">We Offer Effective Arabic & Quran Services</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-6 col-xl-4">
                <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-mosque fa-4x text-dark"></i>
                    <div class="ms-4">
                        <h4>Online Quran Classes</h4>
                        <p class="mb-4">This class focuses mainly on Qur’an memorisation and revision of surahs that
                            have already.
                        </p>
                        <a href="" class="btn btn-success px-3">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-donate fa-4x text-dark"></i>
                    <div class="ms-4">
                        <h4>Charity & Donation</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet elit. Donec tempus eros vel dolor mattis aliquam.
                        </p>
                        <a href="" class="btn btn-success px-3">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-quran fa-4x text-dark"></i>
                    <div class="ms-4">
                        <h4>Tafseer Course</h4>
                        <p class="mb-4">This class focuses mainly on Qur’an memorisation and revision of surahs that
                            have already.
                        </p>
                        <a href="" class="btn btn-success px-3">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-book fa-4x text-dark"></i>
                    <div class="ms-4">
                        <h4>We Value Our Students</h4>
                        <p class="mb-4">This class focuses mainly on Qur’an memorisation and revision of surahs that
                            have already.
                        </p>
                        <a href="" class="btn btn-success px-3">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-book-open fa-4x text-dark"></i>
                    <div class="ms-4">
                        <h4>Parent Education</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet elit. Donec tempus eros vel dolor mattis aliquam.
                        </p>
                        <a href="" class="btn btn-success px-3">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-hands fa-4x text-dark"></i>
                    <div class="ms-4">
                        <h4>Help Orphans</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet elit. Donec tempus eros vel dolor mattis aliquam.
                        </p>
                        <a href="" class="btn btn-success px-3">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Events Start -->
<div class="container-fluid event py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <p class="fs-5 text-uppercase text-success">We Have Reached Over</p>
            <h1 class="display-3">Alhamdulillah</h1>
        </div>
        <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.1s">
            <div class="col-lg-6 pb-5">
                <div class="ms-3">
                    <h4 class="mb-3">Top Ratings On Trustpilot</h4>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                    <a href="#" class="btn btn-success px-3">Read More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="overflow-hidden mb-5">
                    <img src="{{ asset('assets/images/events-1.jpg') }}" class="img-fluid w-50" alt="image">
                </div>
            </div>
        </div>
        <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.3s">
            <div class="col-12 col-lg-4">
                <div class="overflow-hidden mb-5">
                    <img src="{{ asset('assets/images/events-2.jpg') }}" class="img-fluid w-100" alt="image">
                </div>
            </div>
            <div class="col-9 col-lg-6 pb-5">
                <div class="ms-3">
                    <h4 class="mb-3">Currently Active Students</h4>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                    <a href="#" class="btn btn-success px-3">Read More</a>
                </div>
            </div>
        </div>
        <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.5s">
            <div class="col-9 col-lg-6 pb-5">
                <div class="ms-3">
                    <h4 class="mb-3">Pass Out Students</h4>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                    <a href="#" class="btn btn-success px-3">Read More</a>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="overflow-hidden mb-5">
                    <img src="{{ asset('assets/images/events-3.jpg') }}" class="img-fluid w-100" alt="image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sermon Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <p class="fs-5 text-uppercase text-success">WHY TO CHOOSE US</p>
            <h1 class="display-4">Why Choose Our Islamic Institute</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-6 col-xl-4">
                <div class="sermon-item wow fadeIn" data-wow-delay="0.1s">
                    <div class="overflow-hidden p-4 pb-0">
                        <img src="{{ asset('assets/images/icons/expert.png') }}" style="max-width: 50%;" alt="image">
                    </div>
                    <div class="p-4">
                        <h4 class="m-3">Expert Instructors</h4>
                        <p class="mb-0">Learn from knowledgeable and experienced scholars dedicated to providing authentic Islamic education.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="sermon-item wow fadeIn" data-wow-delay="0.3s">
                    <div class="overflow-hidden p-4 pb-0">
                        <img src="{{ asset('assets/images/icons/resume.png') }}" style="max-width: 50%;" alt="image">
                    </div>
                    <div class="p-4">
                        <h4 class="m-3">Comprehensive Curriculum</h4>
                        <p class="mb-0">Explore a comprehensive curriculum covering diverse topics, from Quranic studies to Islamic jurisprudence.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="sermon-item wow fadeIn" data-wow-delay="0.5s">
                    <div class="overflow-hidden p-4 pb-0">
                        <img src="{{ asset('assets/images/icons/community-approach.png') }}" style="max-width: 50%;" alt="image">
                    </div>
                    <div class="p-4">
                        <h4 class="m-3">Community-Centric Approach</h4>
                        <p class="mb-0">Join a supportive learning community fostering spiritual growth and mutual respect.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center bg-success py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="row g-4 align-items-center">
            <div class="col-lg-2">
                <i class="fa fa-mosque fa-5x text-white"></i>
            </div>
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="mb-0 text-light">Do not let Shaitan delay you from starting
                    to learn your deen.</h1>
            </div>
            <div class="col-lg-3">
                <a href="" class="btn btn-light py-2 px-4">Quick Start Now</a>
                <!-- <a href="" class="btn btn-light py-2 px-4">Quick Start Now</a> -->
            </div>
        </div>
    </div>
</div>
<!-- Team Start -->
<div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <p class="fs-5 text-uppercase text-success">Our Team</p>
            <h1 class="display-3">Meet Our Organizer</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-xl-5">
                <div class="team-img wow zoomIn" data-wow-delay="0.1s">
                    <img src="{{asset('assets/images/usman.png')}}" alt="image" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-8 col-xl-7">
                <div class="team-item wow fadeIn" data-wow-delay="0.1s">
                    <h1>Muhammad Usman</h1>
                    <h5 class="fw-normal fst-italic text-success mb-4">President</h5>
                    <p class="mb-4">"As the CEO of my Online Quran Academy, I'm deeply committed to providing a
                        nurturing and inclusive online platform for students to explore and deepen their
                        understanding of Islam. Beyond just teaching the Quran, my mission is to instill
                        values that shape character, fostering a holistic approach to learning that goes
                        beyond rote memorization. I firmly believe in the power of education to transform
                        lives, and I'm constantly exploring innovative methods to ensure that learning
                        remains accessible, interactive, and meaningful for all students, regardless of
                        their backgrounds or circumstances. My goal is to empower individuals to not only
                        acquire knowledge but also to apply it in their daily lives, promoting personal
                        growth, empathy, and positive contributions to society."</p>
                    <!-- Course Features -->
                    <ul class="list-unstyled features">
                        <li>
                            <i class="fas fa-clock"></i>
                            <strong>Since Working:</strong> 4 Years
                        </li>
                        <li>
                            <i class="fas fa-user"></i>
                            <strong>Current Joined Students:</strong> 23
                        </li>
                        <li>
                            <i class="fas fa-user-check"></i>
                            <strong>Total Certified Students:</strong> 79
                        </li>
                        <li>
                            <strong>Profile Rating:</strong>
                            <span class="rating-stars">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star-half-alt text-primary"></i>
                            </span>
                            (4.5)
                        </li>
                    </ul>
                    <div class="team-icon d-flex pb-4 mb-4 border-bottom border-success">
                        <span class="text-dark fw-bold fs-5">Follow Me:</span>
                        <a class="btn-link px-2" href=""><i class="fab fa-facebook"></i></a>
                        <a class="btn-link px-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn-link px-2" href=""><i class="fab fa-linkedin"></i></a>
                        <a class="btn-link px-2" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Testiminial Start -->
<div class="container-fluid testimonial py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <p class="fs-5 text-uppercase text-success">Testimonial</p>
            <h1 class="display-3">What People Say About Islam</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.1s">
            <div class="testimonial-item">
                <div class="d-flex mb-3">
                    <div class="position-relative">
                        <img src="{{ asset('assets/images/review/1.png') }}" alt="image">
                        <div class="btn-md-square bg-success rounded-circle position-absolute" style="top: 25px; left: -25px;">
                            <i class="fa fa-quote-left text-dark"></i>
                        </div>
                    </div>
                    <div class="ps-3 my-auto ">
                        <h5 class="mb-0">Full Name</h5>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="d-flex">
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                    </div>
                    <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do tempor ut labore et dolore
                        magna aliqua. Ut enim ad minim quis.</p>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="d-flex mb-3">
                    <div class="position-relative">
                        <img src="{{ asset('assets/images/review/2.png') }}" alt="image">
                        <div class="btn-md-square bg-success rounded-circle position-absolute" style="top: 25px; left: -25px;">
                            <i class="fa fa-quote-left text-dark"></i>
                        </div>
                    </div>
                    <div class="ps-3 my-auto ">
                        <h5 class="mb-0">Full Name</h5>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="d-flex">
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                    </div>
                    <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do tempor ut labore et dolore
                        magna aliqua. Ut enim ad minim quis.</p>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="d-flex mb-3">
                    <div class="position-relative">
                        <img src="{{ asset('assets/images/review/3.png') }}" alt="image">
                        <div class="btn-md-square bg-success rounded-circle position-absolute" style="top: 25px; left: -25px;">
                            <i class="fa fa-quote-left text-dark"></i>
                        </div>
                    </div>
                    <div class="ps-3 my-auto ">
                        <h5 class="mb-0">Full Name</h5>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="d-flex">
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                    </div>
                    <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do tempor ut labore et dolore
                        magna aliqua. Ut enim ad minim quis.</p>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="d-flex mb-3">
                    <div class="position-relative">
                        <img src="{{ asset('assets/images/review/4.png') }}" alt="image">
                        <div class="btn-md-square bg-success rounded-circle position-absolute" style="top: 25px; left: -25px;">
                            <i class="fa fa-quote-left text-dark"></i>
                        </div>
                    </div>
                    <div class="ps-3 my-auto ">
                        <h5 class="mb-0">Full Name</h5>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="d-flex">
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                    </div>
                    <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do tempor ut labore et dolore
                        magna aliqua. Ut enim ad minim quis.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- Modal Close Button -->
            <div class="modal-header d-flex justify-content-end">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class=" modal-body">
                <!-- Login and Register Buttons-->
                <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active bg-success" id="tab-login" data-mdb-pill-init href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Log in</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="tab-register" data-mdb-pill-init href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">Sign up</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- Login Form -->
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                        <form>
                            <!-- Social Media Links -->
                            <div class="text-center mb-3">
                                <p>Sign up with:</p>
                                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-facebook"></i>
                                </button>
                                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>
                                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>
                                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>
                            <p class="text-center">or:</p>
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="loginName">Email or username</label>
                                <input type="email" id="loginName" class="form-control" />
                            </div>
                            <!-- Password input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="loginPassword">Password</label>
                                <input type="password" id="loginPassword" class="form-control" />
                            </div>
                            <!-- Remember and forget password layout -->
                            <div class="row mb-4">
                                <div class="col-md-6 d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check mb-3 mb-md-0">
                                        <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                                        <label class="form-check-label" for="loginCheck"> Remember me </label>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex justify-content-center">
                                    <!-- Simple link -->
                                    <a href="#!">Forgot password?</a>
                                </div>
                            </div>
                            <!-- Submit button -->
                            <div class="text-center">
                                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-block mb-4">Log in</button>
                            </div>
                        </form>
                    </div>
                    <!-- Signup Form -->
                    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                        <form id="signupForm" action="{{ url('signup') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- Social Media Links -->
                            <div class="text-center mb-3">
                                <p>Sign up with:</p>
                                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-facebook"></i>
                                </button>
                                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>
                                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>
                                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>
                            <p class="text-center">or:</p>
                            <!-- Username input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="registerUsername">Username</label>
                                <input type="text" id="registerUsername" name="username" class="form-control" />
                                @error('username')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="registerEmail">Email</label>
                                <input type="email" id="registerEmail" name="email" class="form-control" />
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Password input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="registerPassword">Password</label>
                                <input type="password" id="registerPassword" name="password" class="form-control" />
                                @error('password')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Repeat Password input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                                <input type="password" id="registerRepeatPassword" name="confirmpassword" class="form-control" />
                                @error('confirmpassword')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Phone Number input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="registerName">Phone No:</label>
                                <input type="text" id="registerName" name="phone_number" class="form-control" />
                                @error('phone_number')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked aria-describedby="registerCheckHelpText" />
                                <label class="form-check-label" for="registerCheck">
                                    I have read and agree to the terms
                                </label>
                            </div>
                            <!-- User Role Id -->
                            <input type="hidden" name="role_id" value="1">
                            <!-- Submit button -->
                            <div class="text-center">
                                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-block mb-4">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
