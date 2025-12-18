<?php $__env->startSection('content'); ?>
<section class="w-100 login-min pt-4">
    <div class="container register-top-min pt-0">

        <div class="row">
            <div class="col-md-8  m-0-auto">
                <div class="signup-form-min-frm w-100 pb-0 pt-5 mt-5">
                    <form action="<?php echo e(route('submit_contact_form')); ?>" method="post" class="pb-4">
                      <?php echo csrf_field(); ?>
                        <h3 class=" wow fadeInDown text-center text-dark" data-wow-duration="1000ms">Talk with our <br>sales team</h3>
                        <p class="hint-text wow fadeInDown" data-wow-duration="1000ms">Looking for more information or want to try one of our paid Meweapps plans? Submit your information and an Meweapps representative will follow up with you as soon as possible. Have a simple question?</p>
                        <div class="row">
                            <div class="col-md-6 form-group wow fadeInDown" data-wow-duration="1000ms">
                                <label class="text-secondary">Contact Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Contact Name" required="required" ></div>
                            <div class="col-md-6 form-group wow fadeInDown" data-wow-duration="1500ms">
                                <label class="text-secondary">Company Email</label>
                                <input type="email" class="form-control" name="email" placeholder="name@Company.com"  required="required"></div>
                        </div>

                        <div class="form-group wow fadeInDown" data-wow-duration="1000ms">
                            <label class="text-secondary">Message</label>
                            <textarea required class="form-control" rows="5" name="message" placeholder="Message"></textarea>
                        </div>

                        <div class="form-group<?php echo e($errors->has('g-recaptcha-response') ? ' has-error' : ''); ?>">
                            <div class="col-md-6 pull-center">
                                <?php echo app('captcha')->display(); ?>

                                <?php if($errors->has('g-recaptcha-response')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('g-recaptcha-response')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-dark btn-lg btn-block wow fadeInDown" data-wow-duration="1000ms">Submit</button>
                        </div>

                    </form>
                    <?php echo NoCaptcha::renderJs(); ?>

                </div>
            </div>
        </div>

    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saasthemes/public_html/domains/viplims.com/resources/views/contact_us.blade.php ENDPATH**/ ?>