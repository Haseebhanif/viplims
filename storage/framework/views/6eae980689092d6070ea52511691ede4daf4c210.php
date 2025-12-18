<?php $__env->startSection('content'); ?>
    <section class="w-100 login-min reg-min-frm-min pt-0">
        <div class="container register-top-min pt-0">
            <div class="row">
                <div class="col-md-9  m-0-auto">
                    <div class="signup-form-min-frm pb-0 pt-5 col-md-8 m-0-auto mt-3 mt-lg-0">
                        <?php echo Form::open(['route' => 'register','class'=>'pb-4', 'method' => 'post']); ?>

                        <h2 class=" wow fadeInDown" data-wow-duration="1000ms"> Register </h2>
                        <p class="hint-text wow fadeInDown theme-secondary-color" data-wow-duration="1000ms">Get started with your free
                            account.</p>
                            <input type="hidden" class="form-control" value="<?php echo e(empty(Request()->amount) ? $Amount : Request()->amount); ?>" name="amount" />
                        <div class="form-group wow fadeInDown" data-wow-duration="1000ms">
                            <input type="text" class="form-control" value="<?php echo e(old('company')); ?>" name="company" placeholder="Company Name *" required>
                            <?php $__errorArgs = ['company'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                      <strong><?php echo e($message); ?></strong>
                                      </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group mb-0">
                            <div class="row">
                                <div class="form-group wow col-md-6 fadeInDown" data-wow-duration="1000ms"><input
                                        type="text" class="form-control <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="first_name" required value="<?php echo e(old('first_name')); ?>" placeholder="First Name *">
                                    <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                      <strong><?php echo e($message); ?></strong>
                                      </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group col-md-6 wow fadeInDown" data-wow-duration="1500ms"><input
                                        type="text" class="form-control <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="last_name" required value="<?php echo e(old('last_name')); ?>" placeholder="Last Name *">
                                    <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                      <strong><?php echo e($message); ?></strong>
                                      </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group wow fadeInDown" data-wow-duration="1000ms">
                            <input type="email" required class="form-control" value="<?php echo e(old('email')); ?>" name="email" placeholder="Email *" >
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                      <strong><?php echo e($message); ?></strong>
                                      </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group wow fadeInDown" data-wow-duration="1000ms">
                            <input type="password" data-wow-duration="1000ms" required minlength="8"
                                   class="form-control wow fadeInDown <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                   name="password" placeholder="Password *">
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                      <strong><?php echo e($message); ?></strong>
                                      </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group wow fadeInDown" data-wow-duration="1000ms">
                                <input type="password" data-wow-duration="1000ms" required minlength="8"
                                       class="form-control wow fadeInDown <?php $__errorArgs = ['confirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                       name="password_confirmation" autocomplete="new-password" placeholder="Confirm Password *">
                            <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                      <strong><?php echo e($message); ?></strong>
                                      </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group wow fadeInDown" data-wow-duration="1000ms">
                            <label class="form-check-label theme-secondary-color"><input type="checkbox" name="terms" required value="1" <?php echo e(old('terms')==1 ? 'checked' : ''); ?>> I accept the
                                <a class="text-underline" href="<?php echo e(route('terms_conditions')); ?>">Terms
                                    of Use</a> &amp; <a href="<?php echo e(route('privacypolicy')); ?>" class="text-underline">Privacy Policy</a></label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark btn-lg btn-block wow fadeInDown"
                                    data-wow-duration="1000ms">Register Now
                            </button>
                        </div>
                        <div class="text-center theme-secondary-color">Already have an account? <a class="text-underline"
                                                                             href="<?php echo e(route('login')); ?>">Sign in</a></div>
                        <?php echo Form::close(); ?>


                    </div>
                </div>
            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saasthemes/public_html/domains/viplims.com/resources/views/frontend/auth/register.blade.php ENDPATH**/ ?>