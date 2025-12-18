@extends('layouts.app')
@section('content')
    <div class="content bg-gray-min">
        <section class="sectoin-1 slider-sec-min slider-sec-min-user mt-5 custom-bg-gray mb-0">
            <div class="container">
                <div class="row">
                    @if(!auth()->user()->hasVerifiedEmail())
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-1 wow fadeInLeft"
                             data-wow-duration="1000ms">
                            <div class="user-invoice-box card">
                                <div class="media d-flex">
                                    <div class="media-body text-left user-invoice-title">

                                        @if (session('resent'))
                                            <div class="alert alert-success" role="alert">
                                                {{ __('A fresh verification link has been sent to your email address.') }}
                                            </div>
                                        @endif
                                        <h6 class="text-muted">{{ __('Verify your email address') }}
                                        </h6>
                                        <h6 class="NoCapitalize">{{ __('Before proceeding, please check your email for a verification link.') }}
                                            {{ __('If you did not receive the email') }},</h6>
                                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                            @csrf
                                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if(isset($active_package))
                        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft"
                             data-wow-duration="1000ms">
                            <div class="user-invoice-box card">
                                <div class="media d-flex">
                                    <div class="media-body text-left text-transform-none">
                                        <h6 class="text-muted">URL</h6>
                                        <h3><a class="text-muted breakword" target="_blank"
                                               href="{{env('PRODUCT_URL').'/app/login/'. strtolower(str_replace(' ','-',auth()->user()->company))}}">{{env('PRODUCT_URL').'/app/login/'.auth()->user()->company}}</a>
                                        </h3>
                                        <h6 class="text-muted"><a href="{{route('apppassword')}}">Change App Password</a> </h6>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="fas fa-globe font-large-2 float-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft" data-wow-duration="1000ms">
                        <div class="user-invoice-box card">
                            <div class="media d-flex">
                                <div class="media-body text-left user-invoice-title">

                                    <h6 class="text-muted">Next Billing Date <strong>{{ isset($package->quantity) ? '(Free Trial)' : '' }}</strong></h6>
                                    <h3> {{isset($active_package) ? \Carbon\Carbon::parse($active_package->expiring_date)->format('M j, Y') : 'none'}} </h3>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas fa-calendar-day font-large-2 float-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="user-invoice-box card">
                            <div class="media d-flex">
                                <div class="media-body text-left user-invoice-title">
                                    <h6 class="text-muted">Amount to be Paid</h6>
                                    <h3>&dollar;{{isset($active_package) ? $package->quantity: '0' }}</h3>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas fa-dollar font-large-2 float-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft" data-wow-duration="2000ms">
                        <div class="user-invoice-box card">
                            <div class="media d-flex">
                                <div class="media-body text-left user-invoice-title">
                                    <h6 class="text-muted">Period</h6>
                                    <h3>{{isset($active_package) ? $active_package->package->period : 'none'}}</h3>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas fa-file-invoice font-large-2 float-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            @if(isset($active_package))
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft"
                                     data-wow-duration="1000ms">
                                    <div class="media d-flex">
                                        <div class="card card-pricing text-center card-one px-3 mb-2 wow fadeInLeft"
                                             data-wow-duration="1000ms">
                                            <span class="h6 w-60 rounded-top w-100 d-inline-block bg-dark text-white ">{{$active_package->package->title}}</span>
                                            <div class="bg-transparent card-header pt-0 border-0 mb-2">
                                                <h1 class="h1 font-weight-normal text-dark prc-text text-center mb-0">
                                                    <i class="fa fa-dollar"></i><span
                                                        class="price">{{$package->quantity}}</span><span
                                                        class="h6 ml-2">/ per {{$active_package->package->period}}</span>
                                                </h1>
                                            </div>
                                            <div class="card-body us-pkg-txt pt-0">
                                                @php
                                                    $features =  nl2br($active_package->package->features);
                                                     $features = explode('<br />',$features);

                                                @endphp

                                                <ul class="list-unstyled mb-4">
                                                    @php /*
                                                    @foreach($features as $feature)
                                                        {!! ($feature!='') ? '<li>'.$feature.'</li>' : '' !!}
                                                    @endforeach */ @endphp

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
                                                <button type="button"
                                                        onclick="window.location.href='{{route('donation')}}'"
                                                        class="btn btn-outline-secondary btn-sm mb-3">Downgrade/Upgrade
                                                </button>
                                                <button type="button" onclick="confirm_cancel()"
                                                        class="btn btn-outline-secondary btn-sm mb-3">Cancel
                                                    Subscription
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="{{isset($active_package) || isset($trial_package[0]) ? 'col-lg-8' : 'col-lg-12'}} col-md-4 col-sm-6 min-table-min-sec-user-min mt-1 wow fadeInLeft"
                                 data-wow-duration="2000ms">
                                <div class="user-invoice-table card">
                                    <div class="media d-flex">
                                        <div class="media-body text-left user-invoice-title table-responsive">
                                            <div class="media-body text-left user-invoice-title  ">
                                                <h6 class="text-muted">Package History</h6>
                                            </div>

                                            <table id="admin-datatables-min"
                                                   class="table bg-white w-100 dataTable dt-responsive nowrap admin-table-min-sec admin-table-min-sec-user table-bordered ">
                                                <thead>
                                                <tr class="wow fadeInDown" data-wow-duration="1000ms">
                                                    <th>Package Name</th>
                                                    <th>Next Due Date</th>
                                                    <th>Subscription Date</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($user_packages as $key => $user_package)
                                                    <tr class="wow fadeInDown" data-wow-duration="1200ms">
                                                        <td>{{$user_package->package->title}}</td>
                                                        <td>{{\Carbon\Carbon::parse($user_package->expiring_date)->format('M d, Y')}}</td>
                                                        <td>{{\Carbon\Carbon::parse($user_package->created_at)->format('M d, Y')}}</td>
                                                        @php 
                                                            $user_pack = json_decode($user_package['response']);
                                                        @endphp
                                                        <td>@if($user_pack != '')
                                                                <a href="{{route('user_package.show',$user_package->id)}}"><i
                                                                        class="fas fa-eye fa-sm text-dark" style="font-size: initial"
                                                                        aria-hidden="true"></i></a> @endif</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop

@section('script')
    <script>
        @if(isset($active_package))
        function confirm_cancel(id)
        {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, cancel it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: ' {{route('user_package.destroy',$active_package->id)}}',
                        method: 'GET',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success:function (response) {
                            Swal.fire(
                                'Deleted!',
                                'Your subscription has been cancelled.',
                                'success'
                            )
                            location.reload();
                        }
                    });
                }
            })
        }
        @endif
    </script>
@endsection
