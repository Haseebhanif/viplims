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
                                <div class="user-invoice-box card">
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
                                <div class="user-invoice-box card">
                                    <div class="media d-flex">
                                        <div class="media-body text-left user-invoice-title">
                                            <h6 class="text-muted">Status</h6>
                                            <h3 class="{{$subscription->status=='ACTIVE' ? 'text-success' : 'text-danger'}}">{{$subscription->status}}</h3>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="fas {{$subscription->status=='ACTIVE' ? 'fa-check text-success' : 'fa-close text-danger'}} font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft"
                                 data-wow-duration="1000ms">
                                <div class="user-invoice-box card">
                                    <div class="media d-flex">
                                        <div class="media-body text-left user-invoice-title">
                                            <h6 class="text-muted">Status Change Note</h6>
                                            <p>{{isset($subscription->status_change_note) ? $subscription->status_change_note : ''}}</p>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="fas fa-edit font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-1 wow fadeInLeft"
                                 data-wow-duration="1000ms">
                                <div class="user-invoice-box card">
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
                                                <tr>
                                                    <th class="pb-2">Plan ID:</th>
                                                    <td class="pb-2">{{$subscription->plan_id}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="align-self-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-1 wow fadeInLeft"
                                 data-wow-duration="1000ms">
                                <div class="user-invoice-box card">
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
                                                @if($subscription->status=="ACTIVE")
                                                    <a data-wow-duration="1000ms"
                                                       href="#suspend_confirm" data-toggle="modal"
                                                       class="btn btn-danger btn-sm ml-2 wow fadeInDown animated">Suspend</a>
                                                @else
                                                    <a data-wow-duration="1000ms"
                                                       href="#activate_confirm" data-toggle="modal"
                                                       class="btn btn-success btn-sm ml-2 wow fadeInDown animated">Activate</a>
                                                @endif
                                                <a data-wow-duration="1000ms"
                                                   href="#cancel_confirm" data-toggle="modal"
                                                   class="btn btn-danger btn-sm ml-2 wow fadeInDown animated">Cancel</a>

                                                <a data-wow-duration="1000ms"
                                                   href="{{route('transactions.transactions',$subscription_id)}}"
                                                   class="btn btn-primary btn-sm ml-2 wow fadeInDown animated">View
                                                    Transactions</a>
                                            </div>
                                        </div>
                                        <div class="align-self-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-1 wow fadeInLeft"
                                 data-wow-duration="1000ms">
                                <div class="user-invoice-box card">
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
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-1 wow fadeInLeft"
                                 data-wow-duration="1000ms">
                                <div class="user-invoice-box card">
                                    <div class="media d-flex">
                                        <div class="media-body text-left user-invoice-title">
                                            <h6 class="text-muted">Subscriber</h6>
                                            <table class="p-5  w-100 ">
                                                <tr>
                                                    <th class="pb-2">Subscriber Name:</th>
                                                    <td class="pb-2">{{$package->user->first_name.' '.$package->user->last_name}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="pb-2">Email Address:</th>
                                                    <td class="pb-2">{{$package->user->email}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="pb-2">Contact Number:</th>
                                                    <td class="pb-2">{{$package->user->phone}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="pb-2">Company:</th>
                                                    <td class="pb-2">{{$package->user->company}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="align-self-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-1 wow fadeInLeft"
                                 data-wow-duration="1000ms">
                                <div class="user-invoice-box card">
                                    <div class="media d-flex">
                                        <div class="media-body text-left user-invoice-title">
                                            <h6 class="text-muted">Pricing</h6>
                                            <table class="p-5 w-100 ">
                                                <tr>
                                                    <th class="pb-2">Set-up fee:</th>
                                                    <td class="pb-2">
                                                        &dollar;{{$plan->payment_preferences->setup_fee->value.' '.$subscription->billing_info->outstanding_balance->currency_code}}</td>
                                                </tr>
                                            </table>
                                            <hr class="pb-3">
                                            @if(isset($subscription->billing_info->cycle_executions))
                                                @foreach($subscription->billing_info->cycle_executions as $key=>$executions)
                                                    @if($executions->tenure_type=='TRIAL')
                                                        <h6>Trial
                                                            period {{$executions->cycles_completed > 0 ?$executions->cycles_completed:''}}</h6>
                                                    @else
                                                        <h6>Subscription
                                                            period {{$executions->cycles_completed > 0 ?$executions->cycles_completed:''}}</h6>
                                                    @endif
                                                    <table class="p-5 w-100 pb-3">
                                                        <tr>
                                                            <th class="pb-2">Price:</th>
                                                            <td class="pb-2">
                                                                &dollar;{{isset($plan->billing_cycles[$key]->pricing_scheme) ? $plan->billing_cycles[$key]->pricing_scheme->fixed_price->value.' '.$plan->billing_cycles[$key]->pricing_scheme->fixed_price->currency_code : '0.0 USD'}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="pb-2">Billing cycle:</th>
                                                            <td class="pb-2">
                                                                Every {{$plan->billing_cycles[$key]->frequency->interval_count.' '.$plan->billing_cycles[$key]->frequency->interval_unit}}

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="pb-2">Cycles completed:</th>
                                                            <td class="pb-2">
                                                                {{$executions->cycles_completed}}
                                                                of {{$executions->total_cycles}}</td>
                                                        </tr>
                                                    </table>

                                                @endforeach
                                            @endif
                                            <hr class="pt-3">
                                            <table class="p-5 w-100 pb-3">
                                                <tr>
                                                    <th class="pb-2">Tax:</th>
                                                    <td class="pb-2">
                                                        &dollar;{{$plan->taxes->percentage.'% '.($plan->taxes->inclusive == true ? 'included' : 'not included')}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="pb-2">Stop collecting payments after:</th>
                                                    <td class="pb-2">
                                                        {{$plan->payment_preferences->payment_failure_threshold}} missed
                                                        billing cycles
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="pb-2">Auto bill outstanding payments:</th>
                                                    <td class="pb-2">
                                                        {{$plan->payment_preferences->auto_bill_outstanding == true ? 'Enable' : 'Disabled'}}</td>
                                                </tr>
                                            </table>

                                        </div>
                                        <div class="align-self-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 mt-1 wow fadeInLeft"
                                 data-wow-duration="1000ms">
                                <div class="user-invoice-box card">
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
    <div class="modal fade" id="suspend_confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">

            <div class="modal-content">
                <div class="modal-header">
                    <h6>Reason</h6>
                </div>
                {!! Form::open(['route' => ['subscription.suspend',$subscription_id], 'class'=>'pb-4', 'method' => 'post','enctype'=>'multipart/form-data']) !!}
                <div class="row col-md-12">

                    <div class="col-lg-12 m-2">
                        <textarea class="form-control" name="reason"></textarea>
                        @error('reason')
                        <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                        @enderror
                    </div>
                    <div class="col-lg-12 m-2">
                        <button type="submit"
                                class="btn btn-dark btn-sm btn-block ">Submit
                        </button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <div class="modal fade" id="activate_confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">

            <div class="modal-content">
                <div class="modal-header">
                    <h6>Reason</h6>
                </div>
                {!! Form::open(['route' => ['subscription.activate',$subscription_id], 'class'=>'pb-4', 'method' => 'post','enctype'=>'multipart/form-data']) !!}
                <div class="row col-md-12">

                    <div class="col-lg-12 m-2">
                        <textarea class="form-control" name="reason"></textarea>
                        @error('reason')
                        <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                        @enderror
                    </div>
                    <div class="col-lg-12 m-2">
                        <button type="submit"
                                class="btn btn-dark btn-sm btn-block ">Submit
                        </button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <div class="modal fade" id="cancel_confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">

            <div class="modal-content">
                <div class="modal-header">
                    <h6>Reason</h6>
                </div>
                {!! Form::open(['route' => ['subscription.cancel',$subscription_id], 'class'=>'pb-4', 'method' => 'post','enctype'=>'multipart/form-data']) !!}
                <div class="row col-md-12">

                    <div class="col-lg-12 m-2">
                        <textarea class="form-control" name="reason"></textarea>
                        @error('reason')
                        <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                        @enderror
                    </div>
                    <div class="col-lg-12 m-2">
                        <button type="submit"
                                class="btn btn-dark btn-sm btn-block ">Submit
                        </button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

@section('javascript')

@endsection
