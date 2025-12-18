<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('frontend.partials.head')
    @yield('css')
</head>
<body>
@yield('content')
@include('frontend.partials.footer_script')
@yield('script')
</body>
</html>
