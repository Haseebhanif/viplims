<?php
    $generalsetting = \App\Models\GeneralSetting::first();
?>
<?php $__env->startSection('css'); ?>
    .login-min {
    <?php if($generalsetting->admin_login_background != null): ?>
        background: url(<?php echo e(asset($generalsetting->admin_login_background)); ?>);
    <?php else: ?>
        background: url(<?php echo e(asset('images/slide_1.jpg')); ?>);
    <?php endif; ?>
    padding-top: 5%;
    padding-bottom: 5%;
    position: relative;
    background-size: cover;
    }
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="w-100 login-min login-min-frm-min pt-5">
        <div class="container register-top-min pt-0">
            <div class="row">
                <div class="col-md-9  m-0-auto">
                    <div class="register-right-min col-md-6 m-0-auto pt-4 mt-5 mt-lg-0">

                        <div class="tab-content">
                            <h4 class="register-heading-min wow fadeInDown mt-2" data-wow-duration="1000ms">User
                                Login</h4>
                            <div class="row register-form-min pb-2 pt-3 pr-3 pl-3">
                                <?php echo Form::open(['route' => 'login','class'=>'w-100','method' => 'post']); ?>

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
                                               placeholder="Email address" name="email" required="required"/>
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
                                               placeholder=" Password" name="password" required="required"/>
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
                                    <div class=" row">
                                        <div class="col-md-6">
                                            <div class="form-group wow fadeInDown" data-wow-duration="1000ms">
                                                <input class=" form-check-inline" type="checkbox" name="remember"
                                                       id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                                <label class="form-check-label" for="remember">
                                                    Remember Me
                                                </label>
                                            </div>
                                        </div>
                                        <?php if(Route::has('password.request')): ?>
                                            <div class="col-md-6">
                                                <div class="text-right form-group wow fadeInDown"
                                                     data-wow-duration="1000ms">
                                                    <label class="form-check-label" for="forgot">
                                                        <a class="text-muted theme-secondary-color text-underline"
                                                           href="<?php echo e(route('password.request')); ?>"><?php echo e(__('Forgot Password?')); ?></a>
                                                    </label>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>


                                    <div class="form-group text-left wow fadeInDown" data-wow-duration="1000ms">
                                        <input type="submit" class="btnRegister-min mt-0 pull-left w-100 wow fadeInDown"
                                               data-wow-duration="1000ms" value="Log In"/>
                                    </div>
                                </div>
                                <?php echo Form::close(); ?>

                            </div>

                            <p class="text-center pt-1 w-100 pb-4 wow fadeInDown" data-wow-duration="1000ms">Create an
                                account? <a href="<?php echo e(route('user.registration')); ?>"
                                            class="text-dark d-inline-block text-decoration-none text-underline">Create
                                    Account</a></p>
                            <?php if(env("DEMO_MODE") == "On"): ?>
                                <div class="cls-content-sm panel" style="width: 100% !important;">
                                    <table class="table table-responsive table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>demo@demo.com</td>
                                            <td>password</td>
                                            <td>
                                                <button class="btn btn-info btn-xs" onclick="autoFill()">copy</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        function autoFill() {
            $('#email').val('demo@demo.com');
            $('#password').val('password');
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saasthemes/public_html/domains/viplims.com/resources/views/auth/login.blade.php ENDPATH**/ ?>