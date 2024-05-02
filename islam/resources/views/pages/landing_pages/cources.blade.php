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
    <section class="wrapper">
        <div class="container-fostrap">
            <div>
                <img src="{{ asset('assets/images/background/ilm.png') }}" class="fostrap-logo" />
                <h1 class="heading">
                    Top Quranic Cources
                </h1>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <!-- Course No: 01 -->
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="#">
                                    <img src="{{ asset('assets/images/cource-card/19.png') }}" />
                                </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="#">Bootstrap 3 Carousel FadeIn Out Effect</a>
                                    </h4>
                                    <p class="">Tutorial to make a carousel bootstrap by adding more wonderful effect fadein ...</p>
                                    <!-- Course Features -->
                                    <ul class="list-unstyled features">
                                        <li>
                                            <i class="fas fa-dollar-sign"></i>
                                            <strong>Fee:</strong> $500
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i>
                                            <strong>Duration:</strong> 4 weeks
                                        </li>
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <strong>Current Joined Students:</strong> 50
                                        </li>
                                        <li>
                                            <i class="fas fa-user-check"></i>
                                            <strong>Certified Students:</strong> 30
                                        </li>
                                        <li>
                                            <strong>Rating:</strong>
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
                                </div>
                                <div class="card-read-more">
                                    <a href="#" class="btn btn-link btn-block">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Cource No: 02 -->
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="#">
                                    <img src="{{ asset('assets/images/cource-card/1.png') }}" />
                                </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="#"> Bootstrap 3 Carousel FadeIn Out Effect
                                        </a>
                                    </h4>
                                    <p class="">
                                        Tutorial to make a carousel bootstrap by adding more wonderful effect fadein ...
                                    </p>
                                    <!-- Course Features -->
                                    <ul class="list-unstyled features">
                                        <li>
                                            <i class="fas fa-dollar-sign"></i>
                                            <strong>Fee:</strong> $500
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i>
                                            <strong>Duration:</strong> 4 weeks
                                        </li>
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <strong>Current Joined Students:</strong> 50
                                        </li>
                                        <li>
                                            <i class="fas fa-user-check"></i>
                                            <strong>Certified Students:</strong> 30
                                        </li>
                                        <li>
                                            <strong>Rating:</strong>
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
                                </div>
                                <div class="card-read-more">
                                    <a href="#" class="btn btn-link btn-block">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Cource No: 03 -->
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="#">
                                    <img src="{{ asset('assets/images/cource-card/2.png') }}" />
                                </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="#"> Bootstrap 3 Carousel FadeIn Out Effect
                                        </a>
                                    </h4>
                                    <p class="">
                                        Tutorial to make a carousel bootstrap by adding more wonderful effect fadein ...
                                    </p>
                                    <!-- Course Features -->
                                    <ul class="list-unstyled features">
                                        <li>
                                            <i class="fas fa-dollar-sign"></i>
                                            <strong>Fee:</strong> $500
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i>
                                            <strong>Duration:</strong> 4 weeks
                                        </li>
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <strong>Current Joined Students:</strong> 50
                                        </li>
                                        <li>
                                            <i class="fas fa-user-check"></i>
                                            <strong>Certified Students:</strong> 30
                                        </li>
                                        <li>
                                            <strong>Rating:</strong>
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
                                </div>
                                <div class="card-read-more">
                                    <a href="#" class="btn btn-link btn-block">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Cource No: 04 -->
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="#">
                                    <img src="{{ asset('assets/images/cource-card/4.png') }}" />
                                </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="#"> Bootstrap 3 Carousel FadeIn Out Effect
                                        </a>
                                    </h4>
                                    <p class="">
                                        Tutorial to make a carousel bootstrap by adding more wonderful effect fadein ...
                                    </p>
                                    <!-- Course Features -->
                                    <ul class="list-unstyled features">
                                        <li>
                                            <i class="fas fa-dollar-sign"></i>
                                            <strong>Fee:</strong> $500
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i>
                                            <strong>Duration:</strong> 4 weeks
                                        </li>
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <strong>Current Joined Students:</strong> 50
                                        </li>
                                        <li>
                                            <i class="fas fa-user-check"></i>
                                            <strong>Certified Students:</strong> 30
                                        </li>
                                        <li>
                                            <strong>Rating:</strong>
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
                                </div>
                                <div class="card-read-more">
                                    <a href="#" class="btn btn-link btn-block">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Cource No: 05 -->
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="#">
                                    <img src="{{ asset('assets/images/cource-card/5.png') }}" />
                                </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="#"> Bootstrap 3 Carousel FadeIn Out Effect
                                        </a>
                                    </h4>
                                    <p class="">
                                        Tutorial to make a carousel bootstrap by adding more wonderful effect fadein ...
                                    </p>
                                    <!-- Course Features -->
                                    <ul class="list-unstyled features">
                                        <li>
                                            <i class="fas fa-dollar-sign"></i>
                                            <strong>Fee:</strong> $500
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i>
                                            <strong>Duration:</strong> 4 weeks
                                        </li>
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <strong>Current Joined Students:</strong> 50
                                        </li>
                                        <li>
                                            <i class="fas fa-user-check"></i>
                                            <strong>Certified Students:</strong> 30
                                        </li>
                                        <li>
                                            <strong>Rating:</strong>
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
                                </div>
                                <div class="card-read-more">
                                    <a href="#" class="btn btn-link btn-block">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Cource No: 06 -->
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="#">
                                    <img src="{{ asset('assets/images/cource-card/9.png') }}" />
                                </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="#"> Bootstrap 3 Carousel FadeIn Out Effect
                                        </a>
                                    </h4>
                                    <p class="">
                                        Tutorial to make a carousel bootstrap by adding more wonderful effect fadein ...
                                    </p>
                                    <!-- Course Features -->
                                    <ul class="list-unstyled features">
                                        <li>
                                            <i class="fas fa-dollar-sign"></i>
                                            <strong>Fee:</strong> $500
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i>
                                            <strong>Duration:</strong> 4 weeks
                                        </li>
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <strong>Current Joined Students:</strong> 50
                                        </li>
                                        <li>
                                            <i class="fas fa-user-check"></i>
                                            <strong>Certified Students:</strong> 30
                                        </li>
                                        <li>
                                            <strong>Rating:</strong>
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
                                </div>
                                <div class="card-read-more">
                                    <a href="#" class="btn btn-link btn-block">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Cource No: 07 -->
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="#">
                                    <img src="{{ asset('assets/images/cource-card/10.png') }}" />
                                </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="#"> Bootstrap 3 Carousel FadeIn Out Effect
                                        </a>
                                    </h4>
                                    <p class="">
                                        Tutorial to make a carousel bootstrap by adding more wonderful effect fadein ...
                                    </p>
                                    <!-- Course Features -->
                                    <ul class="list-unstyled features">
                                        <li>
                                            <i class="fas fa-dollar-sign"></i>
                                            <strong>Fee:</strong> $500
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i>
                                            <strong>Duration:</strong> 4 weeks
                                        </li>
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <strong>Current Joined Students:</strong> 50
                                        </li>
                                        <li>
                                            <i class="fas fa-user-check"></i>
                                            <strong>Certified Students:</strong> 30
                                        </li>
                                        <li>
                                            <strong>Rating:</strong>
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
                                </div>
                                <div class="card-read-more">
                                    <a href="#" class="btn btn-link btn-block">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Cource No: 08 -->
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="#">
                                    <img src="{{ asset('assets/images/cource-card/11.png') }}" />
                                </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="#"> Bootstrap 3 Carousel FadeIn Out Effect
                                        </a>
                                    </h4>
                                    <p class="">
                                        Tutorial to make a carousel bootstrap by adding more wonderful effect fadein ...
                                    </p>
                                    <!-- Course Features -->
                                    <ul class="list-unstyled features">
                                        <li>
                                            <i class="fas fa-dollar-sign"></i>
                                            <strong>Fee:</strong> $500
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i>
                                            <strong>Duration:</strong> 4 weeks
                                        </li>
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <strong>Current Joined Students:</strong> 50
                                        </li>
                                        <li>
                                            <i class="fas fa-user-check"></i>
                                            <strong>Certified Students:</strong> 30
                                        </li>
                                        <li>
                                            <strong>Rating:</strong>
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
                                </div>
                                <div class="card-read-more">
                                    <a href="#" class="btn btn-link btn-block">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Cource No: 09 -->
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="#">
                                    <img src="{{ asset('assets/images/cource-card/12.png') }}" />
                                </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="#"> Bootstrap 3 Carousel FadeIn Out Effect
                                        </a>
                                    </h4>
                                    <p class="">
                                        Tutorial to make a carousel bootstrap by adding more wonderful effect fadein ...
                                    </p>
                                    <!-- Course Features -->
                                    <ul class="list-unstyled features">
                                        <li>
                                            <i class="fas fa-dollar-sign"></i>
                                            <strong>Fee:</strong> $500
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i>
                                            <strong>Duration:</strong> 4 weeks
                                        </li>
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <strong>Current Joined Students:</strong> 50
                                        </li>
                                        <li>
                                            <i class="fas fa-user-check"></i>
                                            <strong>Certified Students:</strong> 30
                                        </li>
                                        <li>
                                            <strong>Rating:</strong>
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
                                </div>
                                <div class="card-read-more">
                                    <a href="#" class="btn btn-link btn-block">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
