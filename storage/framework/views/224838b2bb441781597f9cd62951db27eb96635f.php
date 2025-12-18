<?php
    $generalsetting = \App\Models\GeneralSetting::first();
    $footer_headings = \App\Models\Page::all()->where('show_bottom',1)->where('is_heading',1)->sortBy('priority');
?>

<?php if(($footer_headings->isNotEmpty())): ?>
    <section class="footer-section">
        <footer>
            <div class="container">
                <div class="row">
                    <?php $__currentLoopData = $footer_headings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$footer_heading): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="col-md-2 col-sm-6 pl-3 pl-lg-0 mt-3 mt-lg-0 col-xs-12 wow fadeInLeft" data-wow-duration="1500ms">

                            <span><?php echo e($footer_heading->title); ?></span>
                            <?php
                                $footer_links= \App\Models\Page::all()->where('show_bottom',1)->where('is_heading',0)->where('parent_page',$footer_heading->id)->sortBy('priority');
                            ?>
                            <ul>
                                <?php $__currentLoopData = $footer_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $footer_link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(route('custom-pages.show_custom_page',$footer_link->slug)); ?>"><?php echo e($footer_link->title); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </footer>
    </section>
<?php endif; ?>
<section class="footer-section-sub">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12  col-sm-12 col-12">
                <div class="row">
                    <div class="col-lg-5 pl-0 col-md-5 col-sm-6 col-12 wow fadeInLeft" data-wow-duration="1500ms">
                        <p class="mt-3 mb-0">Subscribe to our newsletter.</p>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-12 wow fadeInLeft pr-0  pr-sm-3"
                         data-wow-duration="1500ms">
                        <div class="email-field-sub">
                            <?php echo Form::open(['route' => 'subscribers.store', 'method' => 'post']); ?>


                            <input type="email" class="email" name="email" placeholder="What's your email?">
                            <button class="form-submit-btn" type="submit">Subscribe</button>
                            <?php echo Form::close(); ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12 pr-0 wow fadeInRight" data-wow-duration="1500ms">
                <ul class="footer-social">

                    <?php if($generalsetting->twitter !=null): ?>
                        <li><a href="<?php echo e($generalsetting->twitter); ?>"><i class="fa fa-twitter"></i></a></li>
                    <?php endif; ?>
                    <?php if($generalsetting->facebook !=null): ?>
                        <li><a href="<?php echo e($generalsetting->facebook); ?>"><i class="fa fa-facebook"></i></a></li>
                    <?php endif; ?>
                    <?php if($generalsetting->linkedin !=null): ?>
                        <li><a href="<?php echo e($generalsetting->linkedin); ?>"><i class="fa fa-linkedin"></i></a></li>
                    <?php endif; ?>
                    <?php if($generalsetting->youtube !=null): ?>
                        <li><a href="<?php echo e($generalsetting->youtube); ?>"><i class="fa fa-youtube"></i></a></li>
                    <?php endif; ?>
                    <?php if($generalsetting->instagram !=null): ?>
                        <li><a href="<?php echo e($generalsetting->instagram); ?>"><i class="fa fa-instagram"></i></a></li>
                    <?php endif; ?>
                    <?php if($generalsetting->google_plus !=null): ?>
                        <li><a href="<?php echo e($generalsetting->google_plus); ?>"><i class="fa fa-google-plus-g"></i></a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <hr>
            <div class="footer-sub-nav">
                <ul class="pl-sm-3 pr-sm-3 pl-lg-0">
                    <li><a href="<?php echo e(route('terms_conditions')); ?>">Terms & Conditions</a></li>
                    <li><a href="<?php echo e(route('privacypolicy')); ?>">Privacy Policy</a></li>
                    <li><a href="javascript:;">Cookie Policy</a></li>
                    <li><a href="<?php echo e(route('index')); ?>">©<?php echo e(config('app.name', 'Laravel')); ?> - <?php echo e(date("Y")); ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /home/saasthemes/public_html/domains/viplims.com/resources/views/frontend/partials/footer.blade.php ENDPATH**/ ?>