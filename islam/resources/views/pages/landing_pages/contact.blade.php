@extends('home_template.layout')

@section('main_content')

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
                    <h3 class="display-1 text-dark">Contact</h3>
                    <ol class="breadcrumb mb-0">
                        <h5>Feel Free to contact with us.</h5>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Contact Start -->
<div class="container-fluid contact py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <p class="fs-5 text-uppercase text-primary">Get In Touch</p>
            <h1 class="display-3">Contact For Any Queries</h1>
            <p class="mb-0">The contact form is currently inactive. Get a functional and working contact form with Ajax
                & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
        </div>
        <div class="row g-4 wow fadeIn p-5 text-center" data-wow-delay="0.3s">
    <div class="col-lg-4">
        <div class="info-box card">
            <i class="bi bi-geo-alt" style="font-size: 3rem; color: #ff6b6b;"></i>
            <h3 style="color: #333;">Address</h3>
            <p style="color: #777;">Bahria Town,<br>Phase 8, Awami 5</p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="info-box card">
            <i class="bi bi-telephone" style="font-size: 3rem; color: #6c5ce7;"></i>
            <h3 style="color: #333;">Call Us</h3>
            <p style="color: #777;">+92 331 7344949<br>+92 317 7668685</p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="info-box card">
            <i class="bi bi-envelope" style="font-size: 3rem; color: #1dd1a1;"></i>
            <h3 style="color: #333;">Email Us</h3>
            <p style="color: #777;">khanusman8685@gmail.com<br>khanusman4949@gmail.com</p>
        </div>
    </div>
</div>

        <div class="row g-4 wow fadeIn p-5" data-wow-delay="0.3s">
            <div class="col-sm-6">
                <input type="text" class="form-control bg-transparent p-3" placeholder="Your Name">
            </div>
            <div class="col-sm-6">
                <input type="email" class="form-control bg-transparent p-3" placeholder="Your Email">
            </div>
            <div class="col-12">
                <input type="text" class="form-control bg-transparent p-3" placeholder="Subject">
            </div>
            <div class="col-12">
                <textarea class="w-100 form-control bg-transparent p-3" rows="6" cols="10" placeholder="Your Message"></textarea>
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-primary border-0 py-3 px-5" type="button">Send Message</button>
            </div>
        </div>
    </div>
</div>

<!-- Contact Start -->
@endsection
