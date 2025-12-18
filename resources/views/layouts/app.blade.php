<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('frontend.partials.head')
   <style>
       @yield('css')
   </style>
</head>
<body>
@include('frontend.partials.header')
@yield('content')
@include('frontend.partials.footer')
@include('frontend.partials.footer_script')
@yield('script')
<script>
    @foreach (session('flash_notification', collect())->toArray() as $message)
    toastr.{!! $message['level'] !!}("{{ $message['message'] }}");
    @endforeach
    @foreach ($errors->all() as $message)
    toastr.error("{{ $message }}");
    @endforeach
    @if(session()->has('error'))
    toastr.error("{{ session()->get('error') }}");
    @endif
</script>
</body>
</html>
