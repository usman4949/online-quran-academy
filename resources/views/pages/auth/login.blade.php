@extends('login_template.layout')
@section('main_content')

<section class="signup">
    <div class="container">
        <a href="{{ url('/') }}">
            <span class="bi bi-arrow-left" style="font-size: 20px; color: #0f5a20;">Back</span>
        </a>
        <div class="signup-content">
            <div class="signup-image">
                <figure><img src="{{asset('assets/images/signup/login.png') }}" alt="sing up image"></figure>
                <a href="{{ url('/signup') }}" class="signup-image-link">Create a new account</a>
            </div>
            <div class="signup-form">
                <h2 class="form-title">User Login</h2>
                <!-- ***** Error Message Of login ***** -->
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                <!-- ***** Login Form ***** -->
                <form class="register-form" id="register-form" action="{{ url('login') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="email"><i class="fa fa-envelope text-success"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}" />
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="fa fa-lock text-success"></i></label>
                        <input type="password" name="password" id="pass" placeholder="Password" />
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Login" />
                    </div>
                </form>
                <div class="social-login">
                    <span class="social-label">Or login with:</span>
                    <ul class="socials">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
