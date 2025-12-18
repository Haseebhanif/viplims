@extends('layouts.app')
@section('content')
    <div class="content">
        <section class="sectoin-1 slider-sec-min slider-sec-min-user mt-5 custom-bg-gray mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft" data-wow-duration="1000ms">
                        <div class="admin-invoice-box card">
                            <div class="media d-flex">
                                <div class="media-body text-left user-invoice-title cmsbox">
                                    <h2 class="text-muted">Terms & Conditions</h2>
                                    @php
                                        echo \App\Models\Policy::where('name', 'terms_&_conditions')->first()->content;
                                    @endphp
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
@section('meta_title')
    Terms & Conditions
@stop

