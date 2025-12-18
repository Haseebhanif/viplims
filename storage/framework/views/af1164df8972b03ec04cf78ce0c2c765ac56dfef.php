<?php $__env->startSection('content'); ?>
    <section class="w-100 login-min login-min-frm-min pt-5">
        <div class="container register-top-min pt-0">
            <div class="row">
                <div class="col-md-9  m-0-auto">
                    <div class="register-right-min col-md-6 m-0-auto pt-4">

                        <div class="tab-content">
                            <h4 class="register-heading-min wow fadeInDown" data-wow-duration="1000ms">Reset Password</h4>
                            <div class="row register-form-min pb-2 pt-3 pr-3 pl-3">
                                <?php echo Form::open(['route' => 'password.update','class'=>'w-100','method' => 'post']); ?>

                                <input type="hidden" name="token" value="<?php echo e($token); ?>">
                                <div class="col-md-12 m-0-auto">
                                    <div class="form-group wow fadeInDown" data-wow-duration="1000ms">
                                        <!-- <label class="text-secondary">Email address</label> -->
                                        <input type="email" id="email"
                                               class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                               placeholder="Email address" name="email" value="<?php echo e($email ?? old('email')); ?>" required autocomplete="email" autofocus/>
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
                                        <!--   <label class="text-secondary">Password</label> -->
                                        <input type="password" id="password"
                                               class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                               placeholder="Password" name="password" required autocomplete="new-password"/>
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
                                        <input type="password" id="password-confirm"
                                               class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                               placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password"/>
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


                                    <div class="form-group text-left wow fadeInDown" data-wow-duration="1000ms">
                                        <input type="submit" class="btnRegister-min mt-0 pull-left w-100 wow fadeInDown"
                                               data-wow-duration="1000ms" value="Reset Password"/>
                                    </div>
                                </div>
                                <?php echo Form::close(); ?>

                            </div>

                            <p class="text-center pt-1 w-100 pb-4 wow fadeInDown" data-wow-duration="1000ms">Create an
                                account? <a href="<?php echo e(route('user.registration')); ?>"
                                            class="text-dark d-inline-block text-decoration-none text-underline">Create Account</a></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saasthemes/public_html/domains/viplims.com/resources/views/auth/passwords/reset.blade.php ENDPATH**/ ?>