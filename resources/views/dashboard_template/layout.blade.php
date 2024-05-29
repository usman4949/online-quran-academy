<!doctype html>
<html lang="en" dir="ltr">
@include('dashboard_template.head')

<body>
@include('dashboard_template.header')

@include('dashboard_template.sidebar')
    <main>
        @yield('main_content')
    </main>
    @include('dashboard_template.script')
</body>

</html>
