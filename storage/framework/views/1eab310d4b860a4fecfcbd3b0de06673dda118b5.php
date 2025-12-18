<?php $__env->startSection('content'); ?>

    <?php if($generalsetting->h_img == 0): ?>
    <section class="slider-sec-min">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 slide-text">
                    <h1 class="<?php if(empty($generalsetting->heading_colour)): ?> text-white <?php endif; ?> " data-wow-duration="1000ms" <?php if(!empty($generalsetting->heading_colour)): ?> style="color: <?php echo e($generalsetting->heading_colour); ?>  " <?php endif; ?> >Laboratory Information,
                        Management System.</h1>
                    <p class="<?php if(empty($generalsetting->text_colour)): ?> text-white <?php endif; ?> " data-wow-duration="1500ms" <?php if(!empty($generalsetting->text_colour)): ?> style="color: <?php echo e($generalsetting->text_colour); ?>  " <?php endif; ?>>Manage your lab productively along making your digital interference easy and widely accessible
                    </p>
                    <a class="slider-button " <?php if(!empty($generalsetting->button_colour)): ?> style="color: <?php echo e($generalsetting->button_colour); ?>;border-color: <?php echo e($generalsetting->button_colour); ?>  " <?php endif; ?> data-wow-duration="1500ms" href="<?php echo e(route('user.registration')); ?>">Try
                        for free</a>
                    <?php if(Auth::id()==null): ?>
                        <a class="slider-button " <?php if(!empty($generalsetting->button_colour)): ?> style="color: <?php echo e($generalsetting->button_colour); ?>;border-color: <?php echo e($generalsetting->button_colour); ?>  " <?php endif; ?> data-wow-duration="2000ms" href="<?php echo e(route('tryforfree')); ?>">
                            Donate & Try
                        </a>
                    <?php else: ?>
                        <a class="slider-button " <?php if(!empty($generalsetting->button_colour)): ?> style="color: <?php echo e($generalsetting->button_colour); ?>;border-color: <?php echo e($generalsetting->button_colour); ?>  " <?php endif; ?> data-wow-duration="2000ms" href="<?php echo e(route('tryforfree')); ?>">
                            Donate & Try
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <section class="section-1 <?php if($generalsetting->h_img == 0): ?> pt-5 <?php else: ?> pt-6r <?php endif; ?> pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft" data-wow-duration="1000ms">
                    <div class="section-text-min one"><span>EFFICIENCY </span>
                        <h2>Improvised the quality of work</h2>
                        <p>Through our updated version, now assigning job is just a click away.
                        </p> <a
                            href="javascript:;">Learn more <i class="fa fa-angle-right"></i></a></div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft" data-wow-duration="1500ms">
                    <div class="section-text-min two"><span>RELIABILITY</span>
                        <h2>Tracking becomes easy with us  </h2>
                        <p>Now get notified every time while
                            performing, and track whenever you need to.
                        </p> <a href="javascript:;">Read all about it <i
                                class="fa fa-angle-right"></i></a></div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft" data-wow-duration="2000ms">
                    <div class="section-text-min three"><span>UPGRADE </span>
                        <h2>Equipped with the viplims</h2>
                        <p>
                            make yourself familiar with the most unique and fastest limb.
                        </p> <a href="javascript:;">Make a card <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tab-menu-min">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <h2 class="text-center text-capti text-tme-color wow fadeInUp pl-sm-3 pr-sm-3"
                        data-wow-duration="1000ms">Why choose us over others?</h2>
                    <div class="col-lg-12 text-center mb-4 mt-0"><span class="outer-line wow fadeInDown"
                                                                       data-wow-duration="1500ms"></span></div>
                    <div class="tab-content-min w-100">
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist"><a
                                class="nav-item nav-link ml-0 active wow fadeInUp" data-wow-duration="1000ms"
                                id="Support" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home"
                                aria-selected="true">Support</a> <a class="nav-item nav-link mr-0 wow fadeInUp"
                                                                    data-wow-duration="1500ms" id="nav-profile-tab"
                                                                    data-toggle="tab" href="#Sales" role="tab"
                                                                    aria-controls="nav-profile" aria-selected="false">Sales</a>
                        </div>
                    </div>
                    <div class="tab-content mt-4" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="Support">
                            <div class="container p-0">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInLeft"
                                         data-wow-duration="1000ms">
                                        <h2 class="mt-2 text-capti text-tme-color">Our Background</h2>
                                        <p> We had been developing softwares in this industry
                                            for more than 15 years, and had been working for
                                            an organization for fixing their problems and
                                            generating new software for them. Throughout
                                            these years we have been polishing our capabilities.</p>
                                        <hr>
                                        <h2 class="text-capti text-tme-color">Additional services </h2> <a
                                            href="javascript:;" class="custom-btn-1">Learn more</a><a
                                            href="#WatchVideo"  class="custom-btn-1"><i class="fa fa-play"></i> Watch
                                            video</a>
                                        <p>Don’t forget to check the full manual/guide of
                                            viplims web and application, and it would be updated
                                            with the passage of time if we introduce any new feature
                                            that can help you to be more productive.</p> <a href="javascript:;"
                                                                                       class="custom-btn mb-sm-3 Free">Learn
                                            more</a></div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  mt-4 wow fadeInRight pb-sm-3"
                                         data-wow-duration="1500ms"><img src="<?php echo e(asset('images/support.jpg')); ?>" align="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Sales" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="container p-0">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInLeft"
                                         data-wow-duration="1000ms">
                                        <h2 class="mt-2 text-tme-color">Win prospects over</h2>
                                        <p> Turn conversations into conversions. Our sales management tools are designed
                                            to enhance productivity and pipeline visibility for sales teams so they can
                                            focus on the prospect, not the process. </p>
                                        <hr>
                                        <h2 class="text-capti text-tme-color">empower your employees </h2> <a
                                            href="<?php echo e(route('page.support')); ?>" class="custom-btn-1">Learn more</a> <a
                                            href="#WatchVideo" class="custom-btn-1"><i class="fa fa-play"></i> Watch
                                            video</a>
                                        <p>“By giving our sales and support teams everything they need in one platform,
                                            they are able to effectively and efficiently collaborate and improve the
                                            customer experience.” - Simon Rodrigue, Senior Vice President and Chief
                                            Digital Officer </p> <a href="<?php echo e(route('page.support')); ?>" class="custom-btn">Learn
                                            more</a></div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4 wow fadeInRight "
                                         data-wow-duration="1500ms"><img src="<?php echo e(asset('images/sales.jpg')); ?>" align="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 mt-2 col-sm-6 col-xs-12 mt-3">
                    <div class="row section-2-content-left">
                        <div class="col-lg-6 col-md-6 wow fadeInDown" data-wow-duration="1000ms">
                            <a href="javascript:;">
                                <h2>The Support Suite</h2>
                                <p>The full service experience</p>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInDown" data-wow-duration="2000ms">
                            <a href="javascript:;">
                                <h2>The Sales Suite</h2>
                                <p>The modern sales solution</p>
                            </a>
                        </div>
                    </div>
                    <div class="row section-2-content-left section-2-content-left-icon mt-5">
                        <div class="col-lg-6 col-md-6 wow fadeInDown suitebox " data-wow-duration="1500ms">
                            <a href="javascript:;"> <i class="fa fa-phone"></i>
                                <h2>support</h2>
                                <p>Integrated customer support</p>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInDown suitebox " data-wow-duration="1500ms">
                            <a href="javascript:;"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <h2>sell</h2>
                                <p>Sales CRM</p>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInDown suitebox " data-wow-duration="2000ms">
                            <a href="javascript:;"> <i class="fa fa-play"></i>
                                <h2>guide</h2>
                                <p>Knowledge base and smart self-service </p>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInDown suitebox " data-wow-duration="2000ms">
                            <a href="javascript:;"> <i class="fa fa-internet-explorer" aria-hidden="true"></i>
                                <h2>explore</h2>
                                <p>Analytics and reporting </p>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInDown suitebox " data-wow-duration="2000ms">
                            <a href="javascript:;"> <i class="fa fa-comments-o" aria-hidden="true"></i>
                                <h2>chat</h2>
                                <p>Live chat and messaging </p>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInDown suitebox " data-wow-duration="2000ms">
                            <a href="javascript:;"> <i class="fas fa-users"></i>
                                <h2>gather</h2>
                                <p>Community forum </p>
                            </a>
                        </div>
                        <div class=" col-lg-6 col-md-6 wow fadeInDown suitebox " data-wow-duration="2000ms">
                            <a href="javascript:;"> <i class="fas fa-people-arrows"></i>
                                <h2>talk</h2>
                                <p>Integrated voice software </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-sm-6 col-xs-12 section-2-content-right">
                    <h2 class=" wow fadeInDown" data-wow-duration="1500ms">Something for everyone</h2>
                    <p class=" wow fadeInDown mt-2" data-wow-duration="1500ms">The customer journey differs for
                        everybody. No matter your business need, our products are flexible enough to pave the path
                        that’s best for your organization.</p>
                    <div class="section-2-content-right-img wow fadeInDown" data-wow-duration="1500ms"
                         id="section-2-content-right-img"><img src="<?php echo e(asset('images/hover.jpg')); ?>" align=""></div>
                </div>
            </div>
        </div>
    </section>

    <section class="video-section">
        <div class="container">
            <div class="row mt-5 mb-5">
                <h2 class="text-center text-capti w-100 wow fadeInDown text-tme-color pl-sm-3 pr-sm-3"
                    data-wow-duration="1500ms">Connect with speed and flexibility</h2> <span
                    class="outer-line wow fadeInDown" data-wow-duration="1500ms"></span>
                <p class=" mb-0 text-center w-100 wow fadeInDown pl-sm-3 pr-sm-3" data-wow-duration="1500ms">Build your
                    own solution with Viplims Sunshine, the open and flexible CRM platform.</p>
                <p class=" mb-5 text-center w-100 wow fadeInDown pl-sm-3 pr-sm-3" data-wow-duration="1500ms">Sunshine is
                    built on AWS and lets you seamlessly connect and understand </p>
                <video id="WatchVideo" controls loop width="100%" class="wow fadeInDown" data-wow-duration="1500ms">
                    <source src="<?php echo e(asset('video/video.webm')); ?>" type="video/mp4">
                    <source src="<?php echo e(asset('video/video.webm')); ?>" type="video/ogg">
                </video>
            </div>
        </div>
    </section>

    <section class="section-3">
        <div class="container">
            <div class="row section-3-content ">
                <div class="col-lg-12 col-md-6 p-0 col-sm-12 col-xs-12 mt-5 wow fadeInLeft pl-sm-3 pr-sm-3"
                     data-wow-duration="1500ms">
                    <h1>The best customer</h1>
                    <h1>experiences are </h1>
                    <h1>built with </h1>
                    <h1>Viplims</h1><a href="<?php echo e(route('user.registration')); ?>" class="custom-btn pl-4 pr-4 Free mb-3">
                        Free trial
                    </a></div>
                <div class="section-3-content-img  wow fadeInRight pl-sm-3 pr-sm-3" data-wow-duration="1500ms"><img
                        src="<?php echo e(asset('images/img.jpg')); ?>"></div>
            </div>
        </div>
    </section>

    <section class="client-section">
        <div class="container">
            <div class="row">
                <h2 class="w-100 text-center text-capti  wow fadeInDown text-tme-color pl-sm-3 pr-sm-3"
                    data-wow-duration="1500ms">learn from the best-our customers</h2>
                <div class="col-lg-12 text-center mb-4 mt-0"><span class="outer-line wow fadeInDown"
                                                                   data-wow-duration="1500ms"></span></div>
                <div class="col-md-3 col-sm-6 col-6 wow fadeInLeft" data-wow-duration="1500ms"><img
                        src="<?php echo e(asset('images/1.png')); ?>"></div>
                <div class="col-md-3 col-sm-6 col-6 wow fadeInLeft" data-wow-duration="1500ms"><img
                        src="<?php echo e(asset('images/2.png')); ?>"></div>
                <div class="col-md-3 col-sm-6 col-6 wow fadeInLeft" data-wow-duration="1500ms"><img
                        src="<?php echo e(asset('images/3.png')); ?>"></div>
                <div class="col-md-3 col-sm-6 col-6 wow fadeInLeft" data-wow-duration="1500ms"><img
                        src="<?php echo e(asset('images/4.png')); ?>"></div>
            </div>
            <div class="row mt-5">
                <div class="col-md-3 col-sm-6 col-6 wow fadeInLeft" data-wow-duration="1500ms"><img
                        src="<?php echo e(asset('images/5.png')); ?>"></div>
                <div class="col-md-3 col-sm-6 col-6 wow fadeInLeft" data-wow-duration="1500ms"><img
                        src="<?php echo e(asset('images/6.png')); ?>"></div>
                <div class="col-md-3 col-sm-6 col-6 wow fadeInLeft" data-wow-duration="1500ms"><img
                        src="<?php echo e(asset('images/7.png')); ?>"></div>
                <div class="col-md-3 col-sm-6 col-6 wow fadeInLeft" data-wow-duration="1500ms"><img
                        src="<?php echo e(asset('images/8.png')); ?>"></div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saasthemes/public_html/domains/viplims.com/resources/views/frontend/welcome.blade.php ENDPATH**/ ?>