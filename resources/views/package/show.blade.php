@extends('layouts.dashboard')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12 m-0-auto">
                <div class="dsh-min-sec mt-2">
                    <div class="container ">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft"
                                 data-wow-duration="1000ms">
                                <div class="admin-invoice-box card">
                                    <div class="media d-flex">
                                        <div class="media-body text-left user-invoice-title">
                                            <h6 class="text-muted">Package</h6>
                                            <h3>{{$plan->name}}</h3>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="fas fa-box-open font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft"
                                 data-wow-duration="1000ms">
                                <div class="admin-invoice-box card">
                                    <div class="media d-flex">
                                        <div class="media-body text-left user-invoice-title">
                                            <h6 class="text-muted">Status</h6>
                                            <h3 class="{{$plan->status=='ACTIVE' ? 'text-success' : 'text-danger'}}">{{$plan->status}}</h3>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="fas {{$plan->status=='ACTIVE' ? 'fa-check text-success' : 'fa-close text-danger'}} font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft"
                                 data-wow-duration="1000ms">
                                <div class="admin-invoice-box card">
                                    <div class="media d-flex">
                                        <div class="media-body text-left user-invoice-title">
                                            <h6 class="text-muted">Subscribers</h6>
                                            <h3>{{$user_package_count}}</h3>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="fas fa-users font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-1 wow fadeInLeft"
                                 data-wow-duration="1000ms">
                                <div class="admin-invoice-box card ">
                                    <div class="media d-flex">
                                        <div class="media-body text-left user-invoice-title">
                                            <h6 class="text-muted">Plan</h6>
                                            <table class="p-5  w-100 ">
                                                <tr>
                                                    <th class="pb-2">Product name:</th>
                                                    <td class="pb-2">{{$product->name}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="pb-2">Plan name:</th>
                                                    <td class="pb-2">{{$plan->name}}</td>
                                                </tr>
{{--                                                <tr>--}}
{{--                                                    <th class="pb-2">Plan ID:</th>--}}
{{--                                                    <td class="pb-2">{{$package->plan_id}}</td>--}}
{{--                                                </tr>--}}
                                            </table>
                                        </div>
                                        <div class="align-self-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-1 wow fadeInLeft"
                                 data-wow-duration="1000ms">
                                <div class="admin-invoice-box card">
                                    <div class="media d-flex">
                                        <div class="media-body text-left user-invoice-title">
                                            <h6 class="text-muted">Dates</h6>
                                            <table class="p-5  w-100 ">
                                                <tr>
                                                    <th class="pb-2">Created at:</th>
                                                    <td class="pb-2">{{\Carbon\Carbon::parse($product->create_time)->format('M d, Y')}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="pb-2">Updated at:</th>
                                                    <td class="pb-2">{{\Carbon\Carbon::parse($plan->update_time)->format('M d, Y')}}</td>
                                                </tr>
                                            </table>
                                            <div class="row">
                                                @if($plan->status=="ACTIVE")
                                                    <a data-wow-duration="1000ms"
                                                       href="{{route('package.deactivate',$plan->id)}}"
                                                       class="btn btn-danger btn-sm ml-2 wow fadeInDown animated">Deactivate</a>
                                                @else
                                                    <a data-wow-duration="1000ms"
                                                       href="{{route('package.activate',$plan->id)}}"
                                                       class="btn btn-success btn-sm ml-2 wow fadeInDown animated">Activate</a>
                                                @endif
                                                <a data-wow-duration="1000ms" href="{{route('package.edit',$package_id)}}"
                                                   class="btn btn-dark btn-sm ml-2 wow fadeInDown animated">Edit</a>
                                            </div>
                                        </div>
                                        <div class="align-self-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-1 wow fadeInLeft"
                                 data-wow-duration="1000ms">
                                <div class="admin-invoice-box card">
                                    <div class="media d-flex">
                                        <div class="media-body text-left user-invoice-title">
                                            <h6 class="text-muted">Description</h6>
                                            <p>
                                                {{$plan->description}}
                                            </p>
                                        </div>
                                        <div class="align-self-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-1 wow fadeInLeft"--}}
{{--                                 data-wow-duration="1000ms">--}}
{{--                                <div class="user-invoice-box card">--}}
{{--                                    <div class="media d-flex">--}}
{{--                                        <div class="media-body text-left user-invoice-title">--}}
{{--                                            <h6 class="text-muted">Pricing</h6>--}}
{{--                                            <table class="p-5 w-100 ">--}}
{{--                                                <tr>--}}
{{--                                                    <th class="pb-2">Set-up fee:</th>--}}
{{--                                                    <td class="pb-2">--}}
{{--                                                        &dollar;{{$plan->payment_preferences->setup_fee->value.' '.$package->billing_info->outstanding_balance->currency_code}}</td>--}}
{{--                                                </tr>--}}
{{--                                            </table>--}}
{{--                                            <hr class="pb-3">--}}
{{--                                            @if(isset($package->billing_info->cycle_executions))--}}
{{--                                                @foreach($package->billing_info->cycle_executions as $key=>$executions)--}}
{{--                                                    @if($executions->tenure_type=='TRIAL')--}}
{{--                                                        <h6>Trial--}}
{{--                                                            period {{$executions->cycles_completed > 0 ?$executions->cycles_completed:''}}</h6>--}}
{{--                                                    @else--}}
{{--                                                        <h6>Subscription--}}
{{--                                                            period {{$executions->cycles_completed > 0 ?$executions->cycles_completed:''}}</h6>--}}
{{--                                                    @endif--}}
{{--                                                    <table class="p-5 w-100 pb-3">--}}
{{--                                                        <tr>--}}
{{--                                                            <th class="pb-2">Price:</th>--}}
{{--                                                            <td class="pb-2">--}}
{{--                                                                &dollar;{{isset($plan->billing_cycles[$key]->pricing_scheme) ? $plan->billing_cycles[$key]->pricing_scheme->fixed_price->value.' '.$plan->billing_cycles[$key]->pricing_scheme->fixed_price->currency_code : '0.0 USD'}}</td>--}}
{{--                                                        </tr>--}}
{{--                                                        <tr>--}}
{{--                                                            <th class="pb-2">Billing cycle:</th>--}}
{{--                                                            <td class="pb-2">--}}
{{--                                                                Every {{$plan->billing_cycles[$key]->frequency->interval_count.' '.$plan->billing_cycles[$key]->frequency->interval_unit}}--}}

{{--                                                            </td>--}}
{{--                                                        </tr>--}}
{{--                                                        <tr>--}}
{{--                                                            <th class="pb-2">Cycles completed:</th>--}}
{{--                                                            <td class="pb-2">--}}
{{--                                                                {{$executions->cycles_completed}}--}}
{{--                                                                of {{$executions->total_cycles}}</td>--}}
{{--                                                        </tr>--}}
{{--                                                    </table>--}}

{{--                                                @endforeach--}}
{{--                                            @endif--}}
{{--                                            <hr class="pt-3">--}}
{{--                                            <table class="p-5 w-100 pb-3">--}}
{{--                                                <tr>--}}
{{--                                                    <th class="pb-2">Tax:</th>--}}
{{--                                                    <td class="pb-2">--}}
{{--                                                        &dollar;{{$plan->taxes->percentage.'% '.($plan->taxes->inclusive == true ? 'included' : 'not included')}}</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <th class="pb-2">Stop collecting payments after:</th>--}}
{{--                                                    <td class="pb-2">--}}
{{--                                                        {{$plan->payment_preferences->payment_failure_threshold}} missed--}}
{{--                                                        billing cycles--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <th class="pb-2">Auto bill outstanding payments:</th>--}}
{{--                                                    <td class="pb-2">--}}
{{--                                                        {{$plan->payment_preferences->auto_bill_outstanding == true ? 'Enable' : 'Disabled'}}</td>--}}
{{--                                                </tr>--}}
{{--                                            </table>--}}

{{--                                        </div>--}}
{{--                                        <div class="align-self-center">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 mt-1 wow fadeInLeft"
                                 data-wow-duration="1000ms">
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
                </div>
            </div>
        </div>
    </div>

    {{--    <div class="content">--}}
    {{--        <section class="sectoin-1 slider-sec-min slider-sec-min-user mt-5 custom-bg-gray mb-0">--}}
    {{--            <div class="container">--}}
    {{--                <div class="row">--}}
    {{--                    <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft" data-wow-duration="1000ms">--}}
    {{--                        <div class="user-invoice-box card">--}}
    {{--                            <div class="media d-flex">--}}
    {{--                                <div class="media-body text-left user-invoice-title">--}}
    {{--                                    <h6 class="text-muted">Subscription Info</h6>--}}
    {{--                                    <h3><span class="text-muted">Subscription ID:</span><b>{{$package->id}}</b><span--}}
    {{--                                            class="pl-5 text-center pr-5">|</span><span--}}
    {{--                                            class="text-muted">Status: </span><span--}}
    {{--                                            class="text-success">{{$package->status}}</span></h3>--}}
    {{--                                    <h6><span class="text-muted">Next payment due on: </span><b>{{isset($package->billing_info->next_billing_time)?\Carbon\Carbon::parse($package->billing_info->next_billing_time)->format('M d, Y'):null}}</b>--}}
    {{--                                           </h6>--}}
    {{--                                </div>--}}
    {{--                                <div class="align-self-center">--}}
    {{--                                    <a class=" text-muted" href="{{route('dashboard')}}">&loarr; Go Back</a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-1 wow fadeInLeft" data-wow-duration="1000ms">--}}
    {{--                        <div class="user-invoice-box card">--}}
    {{--                            <div class="media d-flex">--}}
    {{--                                <div class="media-body text-left user-invoice-title">--}}
    {{--                                    <h6 class="text-muted">Subscriber</h6>--}}
    {{--                                    <table class="p-5  w-100 ">--}}
    {{--                                        <tr>--}}
    {{--                                            <th class="pb-2">Subscription ID:</th>--}}
    {{--                                            <td class="pb-2">{{$package->id}}</td>--}}
    {{--                                        </tr>--}}
    {{--                                        <tr>--}}
    {{--                                            <th class="pb-2">Subscriber ID:</th>--}}
    {{--                                            <td class="pb-2">{{$package->subscriber->email_address}}</td>--}}
    {{--                                        </tr>--}}
    {{--                                        <tr>--}}
    {{--                                            <th class="pb-2">Start Time:</th>--}}
    {{--                                            <td class="pb-2">{{\Carbon\Carbon::parse($package->start_time)->format('M d, Y')}}</td>--}}
    {{--                                        </tr>--}}
    {{--                                    </table>--}}
    {{--                                </div>--}}
    {{--                                <div class="align-self-center">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-1 wow fadeInLeft" data-wow-duration="1000ms">--}}
    {{--                        <div class="user-invoice-box card">--}}
    {{--                            <div class="media d-flex">--}}
    {{--                                <div class="media-body text-left user-invoice-title">--}}
    {{--                                    <h6 class="text-muted">Plan</h6>--}}
    {{--                                    <table class="p-5  w-100 ">--}}
    {{--                                        <tr>--}}
    {{--                                            <th class="pb-2">Product name:</th>--}}
    {{--                                            <td class="pb-2">{{$product->name}}</td>--}}
    {{--                                        </tr>--}}
    {{--                                        <tr>--}}
    {{--                                            <th class="pb-2">Plan name:</th>--}}
    {{--                                            <td class="pb-2">{{$plan->name}}</td>--}}
    {{--                                        </tr>--}}
    {{--                                        <tr>--}}
    {{--                                            <th class="pb-2">Plan ID:</th>--}}
    {{--                                            <td class="pb-2">{{$package->plan_id}}</td>--}}
    {{--                                        </tr>--}}
    {{--                                    </table>--}}
    {{--                                </div>--}}
    {{--                                <div class="align-self-center">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-1 wow fadeInLeft" data-wow-duration="1000ms">--}}
    {{--                        <div class="user-invoice-box card">--}}
    {{--                            <div class="media d-flex">--}}
    {{--                                <div class="media-body text-left user-invoice-title">--}}
    {{--                                    <h6 class="text-muted">Pricing</h6>--}}
    {{--                                    <table class="p-5 w-100 ">--}}
    {{--                                        <tr>--}}
    {{--                                            <th class="pb-2">Set-up fee:</th>--}}
    {{--                                            <td class="pb-2">--}}
    {{--                                                &dollar;{{$plan->payment_preferences->setup_fee->value.' '.$package->billing_info->outstanding_balance->currency_code}}</td>--}}
    {{--                                        </tr>--}}
    {{--                                    </table>--}}
    {{--                                    <hr class="pb-3">--}}
    {{--                                    @if(isset($package->billing_info->cycle_executions))--}}
    {{--                                        @foreach($package->billing_info->cycle_executions as $key=>$executions)--}}
    {{--                                            @if($executions->tenure_type=='TRIAL')--}}
    {{--                                                <h6>Trial--}}
    {{--                                                    period {{$executions->cycles_completed > 0 ?$executions->cycles_completed:''}}</h6>--}}
    {{--                                            @else--}}
    {{--                                                <h6>Subscription--}}
    {{--                                                    period {{$executions->cycles_completed > 0 ?$executions->cycles_completed:''}}</h6>--}}
    {{--                                            @endif--}}
    {{--                                            <table class="p-5 w-100 pb-3">--}}
    {{--                                                <tr>--}}
    {{--                                                    <th class="pb-2">Price:</th>--}}
    {{--                                                    <td class="pb-2">--}}
    {{--                                                        &dollar;{{isset($plan->billing_cycles[$key]->pricing_scheme) ? $plan->billing_cycles[$key]->pricing_scheme->fixed_price->value.' '.$plan->billing_cycles[$key]->pricing_scheme->fixed_price->currency_code : '0.0 USD'}}</td>--}}
    {{--                                                </tr>--}}
    {{--                                                <tr>--}}
    {{--                                                    <th class="pb-2">Billing cycle:</th>--}}
    {{--                                                    <td class="pb-2">--}}
    {{--                                                        Every {{$plan->billing_cycles[$key]->frequency->interval_count.' '.$plan->billing_cycles[$key]->frequency->interval_unit}}--}}

    {{--                                                    </td>--}}
    {{--                                                </tr>--}}
    {{--                                                <tr>--}}
    {{--                                                    <th class="pb-2">Cycles completed:</th>--}}
    {{--                                                    <td class="pb-2">--}}
    {{--                                                       {{$executions->cycles_completed}} of {{$executions->total_cycles}}</td>--}}
    {{--                                                </tr>--}}
    {{--                                            </table>--}}

    {{--                                        @endforeach--}}
    {{--                                    @endif--}}
    {{--                                 <hr class="pt-3">--}}
    {{--                                    <table class="p-5 w-100 pb-3">--}}
    {{--                                        <tr>--}}
    {{--                                            <th class="pb-2">Tax:</th>--}}
    {{--                                            <td class="pb-2">--}}
    {{--                                                &dollar;{{$plan->taxes->percentage.'% '.($plan->taxes->inclusive == true ? 'included' : 'not included')}}</td>--}}
    {{--                                        </tr>--}}
    {{--                                        <tr>--}}
    {{--                                            <th class="pb-2">Stop collecting payments after:</th>--}}
    {{--                                            <td class="pb-2">--}}
    {{--                                                {{$plan->payment_preferences->payment_failure_threshold}} missed billing cycles</td>--}}
    {{--                                        </tr>--}}
    {{--                                        <tr>--}}
    {{--                                            <th class="pb-2">Auto bill outstanding payments:</th>--}}
    {{--                                            <td class="pb-2">--}}
    {{--                                                {{$plan->payment_preferences->auto_bill_outstanding == true ? 'Enable' : 'Disabled'}}</td>--}}
    {{--                                        </tr>--}}
    {{--                                    </table>--}}

    {{--                                </div>--}}
    {{--                                <div class="align-self-center">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-1 wow fadeInLeft" data-wow-duration="1000ms">--}}
    {{--                        <div class="user-invoice-box card">--}}
    {{--                            <div class="media d-flex">--}}
    {{--                                <div class="media-body text-left user-invoice-title">--}}
    {{--                                    <h6 class="text-muted">Payment information</h6>--}}
    {{--                                    <table class="p-5  w-100 ">--}}
    {{--                                        <tr>--}}
    {{--                                            <th class="pb-2">Payment Source:</th>--}}
    {{--                                            <td class="pb-2"><span class="paypal_logo"></span> Paypal</td>--}}
    {{--                                        </tr>--}}
    {{--                                    </table>--}}

    {{--                                </div>--}}
    {{--                                <div class="align-self-center">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}


    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </section>--}}

    {{--    </div>--}}
@stop
