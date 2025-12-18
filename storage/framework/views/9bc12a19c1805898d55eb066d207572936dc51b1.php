<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<title><?php echo $__env->yieldContent('meta_title', config('app.name', 'Laravel')); ?></title>
<meta name="description" content="<?php echo $__env->yieldContent('meta_description'); ?>" />

<!-- Scripts -->
<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
<!-- Favicon -->
<link type="image/x-icon" href="<?php echo e(asset(\App\Models\GeneralSetting::first()->favicon)); ?>" rel="shortcut icon" />


<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo config('app.url');?>">
<meta property="og:title" content="<?php echo $__env->yieldContent('meta_title', config('app.name', 'Laravel')); ?>">
<meta property="og:description" content="">
<meta property="og:image" content="">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="<?php echo config('app.url');?>">
<meta property="twitter:title" content="<?php echo $__env->yieldContent('meta_title', config('app.name', 'Laravel')); ?>">
<meta property="twitter:description" content="">
<meta property="twitter:image" content="">

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->

<meta name="google-site-verification" content="1ekxf_V75hB2w4v1sCXR1OpMa2U7UOzhQL2hq27LfSE" />

<link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/toastr.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/responsive.bootstrap4.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/animate.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/style.css?nocache')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/owl.carousel.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/docs.theme.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('fonts/stylesheet.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/sweetalert.min.css')); ?>" rel="stylesheet">

<script type='text/javascript'>
    window.smartlook||(function(d) {
        var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
        var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
        c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
    })(document);
    smartlook('init', '6f66bdb25e8f6d090131926a5e5895243f378bdf');
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-90J1LMNY4M"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-90J1LMNY4M');
</script>
<?php /**PATH /home/saasthemes/public_html/domains/viplims.com/resources/views/frontend/partials/head.blade.php ENDPATH**/ ?>