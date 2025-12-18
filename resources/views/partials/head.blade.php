<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Favicon -->
<link type="image/x-icon" href="{{ asset(\App\Models\GeneralSetting::first()->favicon) }}" rel="shortcut icon" />

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/docs.theme.min.css') }}" rel="stylesheet">
<link href="{{ asset('fonts/stylesheet.css') }}" rel="stylesheet">

<link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('css/toastr.css')}}" rel="stylesheet">
<link href="{{asset('css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{asset('css/responsive.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<script src="https://unpkg.com/vue/dist/vue.js"></script>
<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
