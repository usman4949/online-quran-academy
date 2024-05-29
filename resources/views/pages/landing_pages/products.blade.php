@extends('home_template.layout')

@section('main_content')

<!-- Spinner Start -->
<div id="spinner"
    class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-success" role="status"></div>
</div>

<!-- Hero Start -->
<div class="container-fluid hero-cources">
    <div class="row">
        <div class="col-lg-6">
            <div class="hero-cources-inner animated zoomIn text-center">
                <h5 class="display-1 mb-5 text-success">Online Quran Academy</h5>
                <a href="{{ route('login') }}" class="btn btn-success py-2 px-5">Quick Join Us</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <section class="wrapper">
        <div class="container-fostrap">
            <div>
                <img src="{{ asset('assets/images/background/bismillah1.png') }}" class="fostrap-logo" />
                <h1 class="heading">
                    Top Islamic Products
                </h1>
            </div>
            <div class="content">
                <div class="container mydiv">
                    <div class="row justify-content-center mb-3">
                        <div class="col-md-12 col-xl-10">
                            <div class="card shadow-0 border rounded-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                            <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                                <img src="{{ asset('assets/images/products/tasbee.jpg') }}"
                                                    class="w-100" />
                                                <a href="#!">
                                                    <div class="hover-overlay">
                                                        <div class="mask"
                                                            style="background-color: rgba(253, 253, 253, 0.15);">
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <h5>Tasbhee</h5>
                                            <div class="d-flex flex-row">
                                                <div class="text-danger mb-1 me-2">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <span>310</span>
                                            </div>
                                            <div class="mt-1 mb-0 text-muted small">
                                                <span>100% cotton</span>
                                                <span class="text-primary"> • </span>
                                                <span>Light weight</span>
                                                <span class="text-primary"> • </span>
                                                <span>Best finish<br /></span>
                                            </div>
                                            <div class="mb-2 text-muted small">
                                                <span>Unique design</span>
                                                <span class="text-primary"> • </span>
                                                <span>For men</span>
                                                <span class="text-primary"> • </span>
                                                <span>Casual<br /></span>
                                            </div>
                                            <p class="text-truncate mb-4 mb-md-0">
                                                There are many variations of passages of Lorem Ipsum available,
                                                but the
                                                majority have suffered alteration in some form, by injected
                                                humour, or
                                                randomised words which don't look even slightly believable.
                                            </p>
                                        </div>
                                        <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                            <div class="d-flex flex-row align-items-center mb-1">
                                                <h4 class="mb-1 me-1">$13.99</h4>
                                                <span class="text-danger"><s>$20.99</s></span>
                                            </div>
                                            <h6 class="text-success">Free shipping</h6>
                                            <div class="d-flex flex-column mt-4">
                                                <button data-mdb-button-init data-mdb-ripple-init
                                                    class="btn btn-primary btn-sm" type="button">Details</button>
                                                <button data-mdb-button-init data-mdb-ripple-init
                                                    class="btn btn-outline-primary btn-sm mt-2" type="button">
                                                    Add to wishlist
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center mb-3">
                        <div class="col-md-12 col-xl-10">
                            <div class="card shadow-0 border rounded-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                            <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                                <img src="{{ asset('assets/images/products/romal.jpg') }}"
                                                    class="w-100" />
                                                <a href="#!">
                                                    <div class="hover-overlay">
                                                        <div class="mask"
                                                            style="background-color: rgba(253, 253, 253, 0.15);">
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <h5>Arabic Romal</h5>
                                            <div class="d-flex flex-row">
                                                <div class="text-danger mb-1 me-2">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <span>289</span>
                                            </div>
                                            <div class="mt-1 mb-0 text-muted small">
                                                <span>100% cotton</span>
                                                <span class="text-primary"> • </span>
                                                <span>Light weight</span>
                                                <span class="text-primary"> • </span>
                                                <span>Best finish<br /></span>
                                            </div>
                                            <div class="mb-2 text-muted small">
                                                <span>Unique design</span>
                                                <span class="text-primary"> • </span>
                                                <span>For men</span>
                                                <span class="text-primary"> • </span>
                                                <span>Casual<br /></span>
                                            </div>
                                            <p class="text-truncate mb-4 mb-md-0">
                                                There are many variations of passages of Lorem Ipsum available,
                                                but the
                                                majority have suffered alteration in some form, by injected
                                                humour, or
                                                randomised words which don't look even slightly believable.
                                            </p>
                                        </div>
                                        <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                            <div class="d-flex flex-row align-items-center mb-1">
                                                <h4 class="mb-1 me-1">$14.99</h4>
                                                <span class="text-danger"><s>$21.99</s></span>
                                            </div>
                                            <h6 class="text-success">Free shipping</h6>
                                            <div class="d-flex flex-column mt-4">
                                                <button data-mdb-button-init data-mdb-ripple-init
                                                    class="btn btn-primary btn-sm" type="button">Details</button>
                                                <button data-mdb-button-init data-mdb-ripple-init
                                                    class="btn btn-outline-primary btn-sm mt-2" type="button">
                                                    Add to wishlist
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-12 col-xl-10">
                            <div class="card shadow-0 border rounded-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                            <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                                <img src="{{ asset('assets/images/products/cap.jpg') }}"
                                                    class="w-100" />
                                                <a href="#!">
                                                    <div class="hover-overlay">
                                                        <div class="mask"
                                                            style="background-color: rgba(253, 253, 253, 0.15);">
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <h5>Islamic Cap</h5>
                                            <div class="d-flex flex-row">
                                                <div class="text-danger mb-1 me-2">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <span>145</span>
                                            </div>
                                            <div class="mt-1 mb-0 text-muted small">
                                                <span>100% cotton</span>
                                                <span class="text-primary"> • </span>
                                                <span>Light weight</span>
                                                <span class="text-primary"> • </span>
                                                <span>Best finish<br /></span>
                                            </div>
                                            <div class="mb-2 text-muted small">
                                                <span>Unique design</span>
                                                <span class="text-primary"> • </span>
                                                <span>For women</span>
                                                <span class="text-primary"> • </span>
                                                <span>Casual<br /></span>
                                            </div>
                                            <p class="text-truncate mb-4 mb-md-0">
                                                There are many variations of passages of Lorem Ipsum available,
                                                but the
                                                majority have suffered alteration in some form, by injected
                                                humour, or
                                                randomised words which don't look even slightly believable.
                                            </p>
                                        </div>
                                        <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                            <div class="d-flex flex-row align-items-center mb-1">
                                                <h4 class="mb-1 me-1">$17.99</h4>
                                                <span class="text-danger"><s>$25.99</s></span>
                                            </div>
                                            <h6 class="text-success">Free shipping</h6>
                                            <div class="d-flex flex-column mt-4">
                                                <button data-mdb-button-init data-mdb-ripple-init
                                                    class="btn btn-primary btn-sm" type="button">Details</button>
                                                <button data-mdb-button-init data-mdb-ripple-init
                                                    class="btn btn-outline-primary btn-sm mt-2" type="button">
                                                    Add to wishlist
                                                </button>
                                            </div>
                                        </div>
                                    </div>
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