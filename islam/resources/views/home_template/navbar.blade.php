<!-- Topbar start -->
<div class="container-fluid fixed-top">
    <div class="container topbar d-none d-lg-block">
        <div class="topbar-inner">
            <div class="row gx-0">
                <!-- Contact Links -->
                <div class="col-lg-7 text-start">
                    <div class="h-100 d-inline-flex align-items-center me-4">
                        <span class="fa fa-phone-alt me-2 phone-icon"></span>
                        <a href="#" class="text-dark"><span>+92 331 734 4949</span></a>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center">
                        <span class="far fa-envelope me-2 envelope-icon"></span>
                        <a href="#" class="text-dark"><span>khanusman8685@gmail.com</span></a>
                    </div>
                </div>
                <!-- Social Media Links -->
                <div class="col-lg-5 text-end">
                    <div class="h-100 d-inline-flex align-items-center">
                        <span class="text-dark">Follow:</span>
                        <a class="btn-link px-2" href=""><i class="fab fa-facebook"></i></a>
                        <a class="btn-link px-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn-link px-2" href=""><i class="fab fa-linkedin"></i></a>
                        <a class="btn-link px-2" href=""><i class="fab fa-instagram"></i></a>
                        <a href="{{ route('signup') }}" class="text-dark ps-4"><i class="fa fa-lock me-1"></i> User login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-light navbar-expand-lg py-3">
            <a href="{{url('/')}}" class="navbar-brand">
                <h1 class="mb-0">Online<span class="text-success">Madrasah</span> </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-success"></span>
            </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                <div class="navbar-nav ms-lg-auto mx-xl-auto">
                    <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                    <a href="{{ url('cources') }}" class="nav-item nav-link {{ request()->is('cources') ? 'active' : '' }}">Courses</a>
                    <a href="{{ url('teachers') }}" class="nav-item nav-link {{ request()->is('teachers') ? 'active' : '' }}">Teachers</a>
                    <a href="{{ url('/contact') }}" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                    <a href="{{ url('/read_quran') }}" class="nav-item nav-link {{ request()->is('read_quran') ? 'active' : '' }}">Read Quran</a>
                </div>
                <a href="" class="btn btn-success py-2 px-4 d-none d-xl-inline-block">Donate</a>
            </div>
        </nav>
    </div>
</div>
