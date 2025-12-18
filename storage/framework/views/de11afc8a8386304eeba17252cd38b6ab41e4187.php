<?php $__env->startSection('content'); ?>
    <div class="content">
        <section class="sectoin-1 slider-sec-min slider-sec-min-user mt-5 custom-bg-gray mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft" data-wow-duration="1000ms">
                        <div class="user-invoice-table card">
                            <div class="media d-flex">
                                <div class="media-body text-left user-invoice-title">
                                    <h6 class="text-muted">Subscription Info</h6>
                                    <h3><span class="text-muted">Subscription ID:</span><b><?php echo e($package->id); ?></b><span
                                            class="pl-5 text-center pr-5">|</span><span
                                            class="text-muted">Status: </span><span
                                            class="text-success"><?php echo e($package->status); ?></span></h3>
                                    <h6><span class="text-muted">Next payment due on: </span><b><?php echo e(isset($package->billing_info->next_billing_time)?\Carbon\Carbon::parse($package->billing_info->next_billing_time)->format('M d, Y'):null); ?></b>
                                           </h6>
                                </div>
                                <div class="align-self-center">
                                    <a class=" text-muted" href="<?php echo e(route('dashboard')); ?>">&loarr; Go Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-1 wow fadeInLeft" data-wow-duration="1000ms">
                        <div class="admin-invoice-box card">
                            <div class="media d-flex">
                                <div class="media-body text-left user-invoice-title">
                                    <h6 class="text-muted">Subscriber</h6>
                                    <table class="p-5  w-100 ">
                                        <tr>
                                            <th class="pb-2">Subscription ID:</th>
                                            <td class="pb-2"><?php echo e($package->id); ?></td>
                                        </tr>
                                        <tr>
                                            <th class="pb-2">Subscriber ID:</th>
                                            <td class="pb-2"><?php echo e($package->subscriber->email_address); ?></td>
                                        </tr>
                                        <tr>
                                            <th class="pb-2">Start Time:</th>
                                            <td class="pb-2"><?php echo e(\Carbon\Carbon::parse($package->start_time)->format('M d, Y')); ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="align-self-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-1 wow fadeInLeft" data-wow-duration="1000ms">
                        <div class="admin-invoice-box card">
                            <div class="media d-flex">
                                <div class="media-body text-left user-invoice-title">
                                    <h6 class="text-muted">Plan</h6>
                                    <table class="p-5  w-100 ">
                                        <tr>
                                            <th class="pb-2">Product name:</th>
                                            <td class="pb-2"><?php echo e($product->name); ?></td>
                                        </tr>
                                        <tr>
                                            <th class="pb-2">Plan name:</th>
                                            <td class="pb-2"><?php echo e($plan->name); ?></td>
                                        </tr>
                                        <tr>
                                            <th class="pb-2">Plan ID:</th>
                                            <td class="pb-2"><?php echo e($package->plan_id); ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="align-self-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-1 wow fadeInLeft" data-wow-duration="1000ms">
                        <div class="admin-invoice-box card">
                            <div class="media d-flex">
                                <div class="media-body text-left user-invoice-title">
                                    <h6 class="text-muted">Pricing</h6>
                                    <table class="p-5 w-100 ">
                                        <tr>
                                            <th class="pb-2">Set-up fee:</th>
                                            <td class="pb-2">
                                                &dollar;<?php echo e($plan->payment_preferences->setup_fee->value.' '.$package->billing_info->outstanding_balance->currency_code); ?></td>
                                        </tr>
                                    </table>
                                    <hr class="pb-3">
                                    <?php if(isset($package->billing_info->cycle_executions)): ?>
                                        <?php $__currentLoopData = $package->billing_info->cycle_executions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$executions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($executions->tenure_type=='TRIAL'): ?>
                                                <h6>Trial
                                                    period <?php echo e($executions->cycles_completed > 0 ?$executions->cycles_completed:''); ?></h6>
                                            <?php else: ?>
                                                <h6>Subscription
                                                    period <?php echo e($executions->cycles_completed > 0 ?$executions->cycles_completed:''); ?></h6>
                                            <?php endif; ?>
                                            <table class="p-5 w-100 pb-3">
                                                <tr>
                                                    <th class="pb-2">Price:</th>
                                                    <td class="pb-2">
                                                        &dollar;<?php echo e($package->quantity); ?> USD
                                                        <?php /*
                                                        &dollar;{{isset($plan->billing_cycles[$key]->pricing_scheme) ? $plan->billing_cycles[$key]->pricing_scheme->fixed_price->value.' '.$plan->billing_cycles[$key]->pricing_scheme->fixed_price->currency_code : '0.0 USD'}}
                                                       */ ?>
                                                        </td>

                                                </tr>
                                                <tr>
                                                    <th class="pb-2">Billing cycle:</th>
                                                    <td class="pb-2">
                                                        Every <?php echo e($plan->billing_cycles[$key]->frequency->interval_count.' '.$plan->billing_cycles[$key]->frequency->interval_unit); ?>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="pb-2">Cycles completed:</th>
                                                    <td class="pb-2">
                                                       <?php echo e($executions->cycles_completed); ?> of <?php echo e($executions->total_cycles); ?></td>
                                                </tr>
                                            </table>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                 <hr class="pt-3">
                                    <table class="p-5 w-100 pb-3">
                                        
                                        <tr>
                                            <th class="pb-2">Stop collecting payments after:</th>
                                            <td class="pb-2">
                                                <?php echo e($plan->payment_preferences->payment_failure_threshold); ?> missed billing cycles</td>
                                        </tr>
                                        <tr>
                                            <th class="pb-2">Auto bill outstanding payments:</th>
                                            <td class="pb-2">
                                                <?php echo e($plan->payment_preferences->auto_bill_outstanding == true ? 'Enable' : 'Disabled'); ?></td>
                                        </tr>
                                    </table>

                                </div>
                                <div class="align-self-center">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-1 wow fadeInLeft" data-wow-duration="1000ms">
                        <div class="admin-invoice-box card">
                            <div class="media d-flex">
                                <div class="media-body text-left user-invoice-title">
                                    <h6 class="text-muted">Payment information</h6>
                                    <table class="p-5  w-100 ">
                                        <tr>
                                            <th class="pb-2">Payment Source:</th>
                                            <td class="pb-2"><span class="paypal_logo"></span> Paypal</td>
                                        </tr>
                                    </table>

                                </div>
                                <div class="align-self-center">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saasthemes/public_html/domains/viplims.com/resources/views/frontend/customer/show.blade.php ENDPATH**/ ?>