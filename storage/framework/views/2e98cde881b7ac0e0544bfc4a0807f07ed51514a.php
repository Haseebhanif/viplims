<?php $__env->startSection('content'); ?>
    <div class="content bg-gray-min">
        <section class="sectoin-1 slider-sec-min slider-sec-min-user mt-5 custom-bg-gray mb-0">
            <div class="row mx-0">
                <div class="col-lg-12 m-0-auto">
                    <div class="dsh-min-sec mt-2">
                        <div class="container ">
                            <div class="row">
                                <div class="title  w-100 mb-3">
                                    <h2 class="pull-left mt-0 mb-0 d-inline-block text-white">
                                        App Password
                                    </h2>
                                    <p class="text-right w-100 text-sm-center">
                                        <a href="<?php echo e(route('dashboard')); ?>"
                                        class=" pull-right d-sm-inline-block btn btn-sm btn-dark bg-dark shadow-sm">Cancel</a>
                                    </p>
                                    <div class="signup-form-min-frm pb-0 pt-5 col-md-12 m-0-auto">
                                        <!--    <form class="class" method="post" action="<?php echo e(route('changepassword')); ?>" >-->
                                            <?php echo Form::open(['route' => 'changepassword','class'=>'pb-4', 'method' => 'post']); ?>

                                        <div class="form-group col-lg-12">
                                            <div class="row">
                                                
                                                <div class="col-lg-6">
                                                    <div class="form-group wow w-100 fadeInDown"
                                                        data-wow-duration="1500ms">
                                                        <label>New Password</label>
                                                        <input type="password" name="password" value=""
                                                            placeholder="New Password"
                                                            class="w-100 form-control ">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group wow w-100 fadeInDown"
                                                        data-wow-duration="1500ms">
                                                        <label>Confirm New Password</label>
                                                        <input type="password" name="confirmpassword" value=""
                                                            placeholder="Confirm New Password"
                                                            class="w-100 form-control ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <button type="submit"
                                                    class="btn btn-dark btn-lg btn-block wow fadeInDown"
                                                    data-wow-duration="1000ms">Submit
                                            </button>
                                        </div>
                                        <?php echo Form::close(); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saasthemes/public_html/domains/viplims.com/resources/views/users/apppassword.blade.php ENDPATH**/ ?>