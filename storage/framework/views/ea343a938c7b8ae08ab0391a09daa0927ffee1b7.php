<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<title><?php echo e(config('app.name', 'Laravel')); ?></title>

<!-- Scripts -->
<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Favicon -->
<link type="image/x-icon" href="<?php echo e(asset(\App\Models\GeneralSetting::first()->favicon)); ?>" rel="shortcut icon" />

<!-- Styles -->
<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

<link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/animate.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/owl.carousel.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/docs.theme.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('fonts/stylesheet.css')); ?>" rel="stylesheet">

<link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/toastr.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/responsive.bootstrap4.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
<script src="https://unpkg.com/vue/dist/vue.js"></script>
<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
<?php /**PATH /home/saasthemes/public_html/domains/viplims.com/resources/views/partials/head.blade.php ENDPATH**/ ?>