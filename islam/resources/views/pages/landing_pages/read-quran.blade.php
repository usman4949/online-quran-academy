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

<div class="container">
    <div id="read_quran"></div>
</div>
@endsection
