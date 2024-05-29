<!doctype html>
<html lang="en" dir="ltr">
@include('home_template.head')

<body>
@include('home_template.navbar')
    <main>
        @yield('main_content')
    </main>
    @include('home_template.footer')

    @include('home_template.script')
</body>

</html>
