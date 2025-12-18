<?php
    $generalsetting = \App\Models\GeneralSetting::first();
?>

<?php if(Route::currentRouteName() == 'index'): ?>
    <?php $pages = "home" ?>
<?php else: ?>
    <?php $pages = "" ?>
<?php endif; ?>

<header class="top-header wow fadeInDown <?php echo e($pages); ?>" id="app" data-wow-duration="1000ms">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg top-nav " id="navbar_top" role="navigation">
                <div class="container">
                    <a class="navbar-brand text-uppercase pt-1 pb-0" href="<?php echo e(route('index')); ?>">
                        <?php if($generalsetting->logo !=null): ?>
                            <img src="<?php echo e(asset($generalsetting->logo)); ?>" alt="logo" width="140px;">
                        <?php else: ?>
                            <img src="<?php echo e(asset('images/viplims-logo.svg')); ?>" alt="logo" width="140px;">
                        <?php endif; ?>
                    </a>
                    <button class="navbar-toggler border-0" type="button" data-toggle="collapse"
                            data-target="#mobilenavbar">
                        &#9776;
                    </button>

                    <div class="collapse navbar-collapse mt-0 " id="mobilenavbar">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"><a href="<?php echo e(route('index')); ?>" class="nav-link sub-menu sub-menu-drop">home</a>
                            </li>
                            <?php if(empty(auth()->id())): ?>
                                <li class="nav-item"><a href="<?php echo e(route('user.registration')); ?>" class="nav-link">Try For Free</a></li>
                            <?php else: ?>
                                <li class="nav-item"><a href="<?php echo e(route('donation')); ?>" class="nav-link">Try For Free</a></li>
                            <?php endif; ?>
                            <li class="nav-item"><a href="<?php echo e(route('contact_us')); ?>" class="nav-link">contact us</a></li>
                        </ul>

                        <ul class="nav navbar-nav ml-auto right-sec">

                            
                            <?php if(auth()->guard()->check()): ?>
                                <li class="nav-item dropdown">
                                    <a href="#" id="dashboard_dropdown"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                       class="try-btn ml-3 ">
                                        <?php echo e(auth()->user()->first_name.' '.auth()->user()->last_name); ?> <i
                                            class="fa fa-angle-down" aria-hidden="true"></i> </a>

                                    <div
                                        class="dropdown-menu user-dashboard-min-sec dropdown-list dropdown-menu-right shadow fadeInDown wow"
                                        data-wow-duration="1000ms" aria-labelledby="dashboard_dropdown">
                                        <a class="dropdown-item  border-0 pl-2 pr-2 "
                                           href="<?php echo e(route('dashboard')); ?>">
                                            <i class="fa fa-dashboard" aria-hidden="true"></i>
                                             User Dashboard
                                        </a>
                                        <?php if(auth()->user()->user_type=='admin'): ?>
                                            <a class="dropdown-item  border-0 pl-2 pr-2 "
                                               href="<?php echo e(route('admin.dashboard')); ?>">
                                                <i class="fa fa-dashboard" aria-hidden="true"></i>
                                                 Admin Dashboard
                                            </a>
                                        <?php endif; ?>
                                        <a class="dropdown-item  border-0 pl-2 pr-2 "
                                           href="<?php echo e(route('user.edit',auth()->id())); ?>">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                            Edit Profile
                                        </a>
                                        <hr class="m-0">
                                        <a class="dropdown-item border-0 pl-2 pr-2" href="<?php echo e(route('logout')); ?>">
                                            <i class="fas fa-sign-out-alt"></i>
                                            Log Out
                                        </a>
                                    </div>
                                </li>

                            <?php else: ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('login')); ?>">Log in</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('user.registration')); ?>" class="try-btn ml-3">Try for free </a>
                                </li>
                            <?php endif; ?>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<?php /**PATH /home/saasthemes/public_html/domains/viplims.com/resources/views/frontend/partials/header.blade.php ENDPATH**/ ?>