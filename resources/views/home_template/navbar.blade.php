<!-- Topbar start -->
<div class="container-fluid fixed-top">
    <nav class="navbar navbar-light navbar-expand-lg py-3">
        <a href="{{ url('/') }}" class="navbar-brand">
            <h2 class="px-4">Online<span class="text-success">Madrasah</span></h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars text-success"></span>
        </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
            <div class="navbar-nav ms-lg-auto mx-xl-auto">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ url('cources') }}"
                    class="nav-item nav-link {{ request()->is('cources') ? 'active' : '' }}">Courses</a>
                <a href="{{ url('teachers') }}"
                    class="nav-item nav-link {{ request()->is('teachers') ? 'active' : '' }}">Teachers</a>
                <a href="{{ url('/contact') }}"
                    class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                    <a href="{{ url('/products') }}"
                    class="nav-item nav-link {{ request()->is('products') ? 'active' : '' }}">Products</a>
                <a href="{{ url('/read_quran') }}"
                    class="nav-item nav-link {{ request()->is('read_quran') ? 'active' : '' }}">Read Quran</a>
            </div>
            <a href="" class="btn btn-success  d-none d-xl-inline-block">Donate</a>
            <div class="h-100 d-inline-flex align-items-center">
                @guest
                <a href="{{ route('login') }}" class="text-dark ps-4"><i class="fa fa-lock me-1"></i> User
                    login</a>
                @else
                <div class="dropdown">
                    <a href="#" class="text-dark ps-4 dropdown-toggle" id="userMenu" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user me-1"></i> Account
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
                        <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="get" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                @endguest
            </div>
        </div>
    </nav>
</div>