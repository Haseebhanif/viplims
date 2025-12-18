<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('frontend.partials.head')
    @yield('css')
</head>
<body>
@include('frontend.partials.header')
<div class="wrapper ">
    <div class="main-panel" id="main-panel">
        <!-- Navbar -->

       @yield('content')

      @include('frontend.partials.footer')

    </div>
</div>
@include('partials.footer_script')
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
