<!doctype html>
<html lang="en" dir="ltr">
@include('home_template.head')
<body>
    <main>
        <!-- Top Header -->
        @yield('main_content')
        <!-- Footer Start -->
        @include('home_template.footer')
        <!--end footer-->
    </main>
    @include('home_template.script')
</body>
</html>