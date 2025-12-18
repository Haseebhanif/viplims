<?php $__env->startSection('content'); ?>

    <section class="slider-sec-min">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 slide-text">
                    <h1 class="text-white wow fadeInUp" data-wow-duration="1000ms">DONATE</h1>
                    <p class="text-white wow fadeInUp" data-wow-duration="1500ms">Support Our Programs</p>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing-sec-min">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="Functions">
                        <h4>All this Included:</h4>
                        <ul>
                            <li class="mb-2">
                                <i class="fas fa-check text-success"></i>
                                Fully Access to the Web
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check text-success"></i>
                                Fully Access to the Tracker App
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check text-success"></i>
                                24/7 Supports
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check text-success"></i>
                                Responsive Design
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                <div class="Main-div">
                    <form type="post" action="<?php echo e(route('user.registration')); ?>">
                        <input type="hidden" class="amount" name="amount"  value="0">
                        <?php echo csrf_field(); ?>
                        <ul>
                            <a href="javascript:;" class="Amount-button" data-amount="1">
                                <li>
                                    $1
                                </li>
                            </a>
                            <a href="javascript:;" class="Amount-button" data-amount="3">
                                <li>
                                    $3
                                </li>
                            </a>
                            <a href="javascript:;" class="Amount-button" data-amount="5">
                                <li>
                                    $5
                                </li>
                            </a>
                            <a href="javascript:;" class="Amount-button" data-amount="10">
                                <li>
                                    $10
                                </li>
                            </a>
                            <a href="javascript:;" class="Amount-button" data-amount="15">
                                <li>
                                    $15
                                </li>
                            </a>
                            <a href="javascript:;" class="Amount-button" data-amount="20">
                                <li>
                                    $20
                                </li>
                            </a>
                            <a href="javascript:;" class="Amount-button" data-amount="25">
                                <li>
                                    $25
                                </li>
                            </a>
                            <a href="javascript:;" class="Amount-button" data-amount="30">
                                <li>
                                    $30
                                </li>
                            </a>
                            <a href="javascript:;" class="Amount-button" data-amount="40">
                                <li>
                                    $40
                                </li>
                            </a>
                            <a href="javascript:;" class="Amount-button" data-amount="50">
                                <li>
                                    $50
                                </li>
                            </a>
                            <a href="javascript:;" class="Amount-button Others" data-amount="5">
                                <li>
                                    Oth
                                </li>
                            </a>

                            <a href="javascript:;" class="Input-Amount hiddenBox" >
                                <li>
                                    <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text"  class="form-control amount" name="amount" placeholder="5" required="required">
                                </li>
                            </a>
                        </ul>

                        <div class="row">
                            <div class="col-lg-10 ml-2">
                                <input type="submit" name="submit" class="btn btn-secondary mb-3 col-lg-12" value="Subscribe" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.hiddenBox').hide();

            $('.Amount-button').on('click',function(){
                $('.hiddenBox').hide();
                $('.Amount-button').removeClass('selectedBox');
                $(this).addClass('selectedBox');
                var Amount = $(this).attr('data-amount');
                $('.amount').val(Amount);
            });

            $('.Others').on('click',function(){
                $('.hiddenBox').show();
            });


        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saasthemes/public_html/domains/viplims.com/resources/views/tryforfree.blade.php ENDPATH**/ ?>