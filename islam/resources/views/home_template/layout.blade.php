<!doctype html>
<html lang="en" dir="ltr">
@include('home_template.head')
<body>
    <main>
        <!-- Top Header -->
        @yield('main_content')
        <!-- Footer Start -->
        @if(!Request::is('signup'))
            @include('home_template.footer')
        @endif
        <!--end footer-->
    </main>
    @include('home_template.script')
</body>
</html>
