<?php $__env->startSection('content'); ?>
    <div class="content">
        <section class="sectoin-1 slider-sec-min slider-sec-min-user mt-5 custom-bg-gray mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft" data-wow-duration="1000ms">
                        <div class="admin-invoice-box card">
                            <div class="media d-flex">
                                <div class="media-body text-left user-invoice-title cmsbox">
                                    <h2 class="text-muted">Privacy Policy</h2>
                                    <?php
                                        echo \App\Models\Policy::where('name', 'privacy_policy')->first()->content;
                                    ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta_title'); ?>
Privacy Policy
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saasthemes/public_html/domains/viplims.com/resources/views/frontend/policies/privacypolicy.blade.php ENDPATH**/ ?>