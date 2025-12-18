@extends('layouts.app')

@section('content')

    <div class="content">
        <section class="sectoin-1 slider-sec-min slider-sec-min-user mt-5 custom-bg-gray mb-0">
            <div class="container">
                <div class="row">
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
                                        <h6 class="text-muted">{{ __('Verify Your Email Address') }}
                                        </h6>
                                        <h3>{{ __('Before proceeding, please check your email for a verification link.') }}
                                            {{ __('If you did not receive the email') }},</h3>
                                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                            @csrf
                                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
    </div>

@endsection
