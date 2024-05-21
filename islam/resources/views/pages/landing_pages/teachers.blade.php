@extends('home_template.layout')

@section('main_content')

<!-- Spinner Start -->
<div id="spinner"
    class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-success" role="status"></div>
</div>

<!-- Hero Start -->
<div class="container-fluid hero-teacher">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-teacher-inner animated zoomIn">
                    <p class="fs-4 text-dark">Welcome To Our Islamic Online Madrasah </p>
                    <h5 class="display-1 mb-5 text-success">Online Quran Academy</h5>
                    <a href="" class="btn btn-success py-3 px-5" data-toggle="modal" data-target="#exampleModal"
                        data-whatever="@mdo">Quick Join Us</a>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">Respected Instructors</h5>
        <div class="row">
            <!-- Teacher 01 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center"
                                    style="background-image: url('assets/images/background/testimonial-one_bg.png'); background-size: cover;">
                                    <div class="profile-img-container">
                                        <img class="profile-img" src="{{ asset('assets/images/review/1.png') }}"
                                            alt="card image">
                                    </div>
                                    <h5 class="card-title">Alemaa Fatima Sultana Sahiba</h5>
                                    <p class="card-text">This is basic card with image on top, title, description and
                                        button.</p>
                                    <div class="ratings text-primary">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="backside">
                            <div class="card"
                                style="background-image: url('assets/images/background/pattern-2.png'); background-size: cover;">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and
                                        button.This is basic card with image on top, title, description and button.This
                                        is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fabb fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fabb fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fabb fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fabb fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Teacher 02 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center"
                                    style="background-image: url('assets/images/background/testimonial-one_bg.png'); background-size: cover;">
                                    <div class="profile-img-container">
                                        <img class="profile-img" src="{{ asset('assets/images/review/2.png') }}"
                                            alt="card image">
                                    </div>
                                    <h5 class="card-title">Mufti Gulam Sarwar Saain</h5>
                                    <p class="card-text">This is basic card with image on top, title, description and
                                        button.</p>
                                    <div class="ratings text-primary">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="backside">
                            <div class="card"
                                style="background-image: url('assets/images/background/pattern-2.png'); background-size: cover;">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and
                                        button.This is basic card with image on top, title, description and button.This
                                        is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fab fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fab fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Teacher 03 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center"
                                    style="background-image: url('assets/images/background/testimonial-one_bg.png'); background-size: cover;">
                                    <div class="profile-img-container">
                                        <img class="profile-img" src="{{ asset('assets/images/review/3.png') }}"
                                            alt="card image">
                                    </div>
                                    <h5 class="card-title">Mufti Farhan Ali Qadri Sarkar</h5>
                                    <p class="card-text">This is basic card with image on top, title, description and
                                        button.</p>
                                    <div class="ratings text-primary">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card"
                                style="background-image: url('assets/images/background/pattern-2.png'); background-size: cover;">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and
                                        button.This is basic card with image on top, title, description and button.This
                                        is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fab fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fab fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Teacher 04 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center"
                                    style="background-image: url('assets/images/background/testimonial-one_bg.png'); background-size: cover;">
                                    <div class="profile-img-container">
                                        <img class="profile-img" src="{{ asset('assets/images/review/4.png') }}"
                                            alt="card image">
                                    </div>
                                    <h5 class="card-title">Mufti Imran Habib Saain</h5>
                                    <p class="card-text">This is basic card with image on top, title, description and
                                        button.</p>
                                    <div class="ratings text-primary">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="backside">
                            <div class="card"
                                style="background-image: url('assets/images/background/pattern-2.png'); background-size: cover;">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and
                                        button.This is basic card with image on top, title, description and button.This
                                        is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fab fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fab fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Teacher 05 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center"
                                    style="background-image: url('assets/images/background/testimonial-one_bg.png'); background-size: cover;">
                                    <div class="profile-img-container">
                                        <img class="profile-img" src="{{ asset('assets/images/review/5.png') }}"
                                            alt="card image">
                                    </div>
                                    <h5 class="card-title">Mufti Furqan Khan Saain</h5>
                                    <p class="card-text">This is basic card with image on top, title, description and
                                        button.</p>
                                    <div class="ratings text-primary">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="backside">
                            <div class="card"
                                style="background-image: url('assets/images/background/pattern-2.png'); background-size: cover;">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and
                                        button.This is basic card with image on top, title, description and button.This
                                        is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fab fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fab fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Teacher 06 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center"
                                    style="background-image: url('assets/images/background/testimonial-one_bg.png'); background-size: cover;">
                                    <div class="profile-img-container">
                                        <img class="profile-img" src="{{ asset('assets/images/review/6.png') }}"
                                            alt="card image">
                                    </div>
                                    <h5 class="card-title">Muhammad Usman Sajjad Bubber</h5>
                                    <p class="card-text">This is basic card with image on top, title, description and
                                        button.</p>
                                    <div class="ratings text-primary">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="backside">
                            <div class="card"
                                style="background-image: url('assets/images/background/pattern-2.png'); background-size: cover;">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and
                                        button.This is basic card with image on top, title, description and button.This
                                        is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fab fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fab fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection