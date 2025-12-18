<?php $__env->startSection('content'); ?>
    <section class="pricing-sec-min">

        <div class="container">
            <div class="pricing card-deck flex-column flex-md-row mt-5 pt-2">
                <?php if($packages->isNotEmpty()): ?>
                    <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $array = array('card-one','card-tow','card-three','card-four');
                        ?>
                        <div
                            class="card card-pricing text-center <?php echo e($array[array_rand($array)]); ?>  px-3 mb-2 wow fadeInLeft animated"
                            data-wow-duration="1000ms">
                            <span class="h6 w-60 rounded-top text-white pkg-name"><?php echo e($package->title); ?></span>
                            <div class="bg-transparent card-header pt-0 border-0">
                                <h1 class="h1 font-weight-normal prc-text text-center mb-0"><i
                                        class="fa fa-dollar"></i><span class="price"><?php echo e($package->price); ?></span><span
                                        class="h6 ml-2">/ per <?php echo e($package->period); ?></span></h1>
                            </div>
                            <div class="card-body pt-0">
                                <?php
                                    $features =  nl2br($package->features);
                                     $features = explode('<br />',$features);
                                ?>
                                <ul class="list-unstyled mb-4">
                                    <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo ($feature!='') ? '<li>'.$feature.'</li>' : ''; ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <button type="button"
                                        onclick="window.location.href='<?php echo e(route('user_package.store',$package->id)); ?>'"

                                        class="btn btn-outline-secondary mb-3">Order now
                                </button>
                            </div>
                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>

                    <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft" data-wow-duration="1000ms">
                        <div class="user-invoice-box card">
                            <div class="media d-flex">
                                <div class="media-body text-left user-invoice-title">
                                    <h2 class="text-muted">Pricing</h2>
                                </div>

                            </div>
                        </div>
                    </div>

                <?php endif; ?>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saasthemes/public_html/domains/viplims.com/resources/views/pricing.blade.php ENDPATH**/ ?>