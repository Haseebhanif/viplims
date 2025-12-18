@extends('layouts.app')
@section('content')
    <section class="pricing-sec-min">

        <div class="container">
            <div class="pricing card-deck flex-column flex-md-row mt-5 pt-2">
                @if($packages->isNotEmpty())
                    @foreach($packages as $key=>$package)
                        @php $array = array('card-one','card-tow','card-three','card-four');
                        @endphp
                        <div
                            class="card card-pricing text-center {{$array[array_rand($array)]}}  px-3 mb-2 wow fadeInLeft animated"
                            data-wow-duration="1000ms">
                            <span class="h6 w-60 rounded-top text-white pkg-name">{{$package->title}}</span>
                            <div class="bg-transparent card-header pt-0 border-0">
                                <h1 class="h1 font-weight-normal prc-text text-center mb-0"><i
                                        class="fa fa-dollar"></i><span class="price">{{$package->price}}</span><span
                                        class="h6 ml-2">/ per {{$package->period}}</span></h1>
                            </div>
                            <div class="card-body pt-0">
                                @php
                                    $features =  nl2br($package->features);
                                     $features = explode('<br />',$features);
                                @endphp
                                <ul class="list-unstyled mb-4">
                                    @foreach($features as $feature)
                                        {!! ($feature!='') ? '<li>'.$feature.'</li>' : '' !!}
                                    @endforeach
                                </ul>
                                <button type="button"
                                        onclick="window.location.href='{{ route('user_package.store',$package->id) }}'"

                                        class="btn btn-outline-secondary mb-3">Order now
                                </button>
                            </div>
                        </div>

                    @endforeach
                @else

                    <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft" data-wow-duration="1000ms">
                        <div class="user-invoice-box card">
                            <div class="media d-flex">
                                <div class="media-body text-left user-invoice-title">
                                    <h2 class="text-muted">Pricing</h2>
                                </div>

                            </div>
                        </div>
                    </div>

                @endif
            </div>
        </div>
    </section>

@stop
