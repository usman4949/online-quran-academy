@extends('login_template.layout')
@section('main_content')
<section class="signup">
    <div class="container">
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            <p>{{ session()->get('success') }}</p>
        </div>
        <script>
            setTimeout(function() {
                window.location.href = '/login';
            }, 5000); // 5000 milliseconds = 5 seconds
        </script>
        @else
        <a href="{{ url('/') }}">
            <span class="bi bi-arrow-left" style="font-size: 20px; color: #0f5a20;">Back</span>
        </a>
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Sign up</h2>
                <form class="register-form" id="register-form" action="{{ url('signup') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name"><i class="fa fa-user text-success"></i></label>
                        <input type="text" name="username" id="name" placeholder="Your Name" value="{{ old('username') }}" required />
                        @error('username')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="fa fa-envelope text-success"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}" required />
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="fa fa-lock text-success"></i></label>
                        <input type="password" name="password" id="pass" placeholder="Password" required />
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="re-pass"><i class="fa fa-lock text-success"></i></label>
                        <input type="password" name="confirmpassword" id="re_pass" placeholder="Repeat your password" required />
                        @error('confirmpassword')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone"><i class="fa fa-phone text-success"></i></label>
                        <input type="text" name="phone_number" id="phone" placeholder="Your Phone No." value="{{ old('phone_number') }}" required />
                        @error('phone_number')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <input type="hidden" name="role_id" value="1">
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="{{asset('assets/images/signup/signup.png') }}" alt="sing up image"></figure>
                <a href="{{ url('/login') }}" class="signup-image-link">I am already a member</a>
            </div>
            @endif
        </div>
    </div>
</section>
@endsection
