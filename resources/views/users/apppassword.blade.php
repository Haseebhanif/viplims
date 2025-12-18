@extends('layouts.app')

@section('content')
    <div class="content bg-gray-min">
        <section class="sectoin-1 slider-sec-min slider-sec-min-user mt-5 custom-bg-gray mb-0">
            <div class="row mx-0">
                <div class="col-lg-12 m-0-auto">
                    <div class="dsh-min-sec mt-2">
                        <div class="container ">
                            <div class="row">
                                <div class="title  w-100 mb-3">
                                    <h2 class="pull-left mt-0 mb-0 d-inline-block text-white">
                                        App Password
                                    </h2>
                                    <p class="text-right w-100 text-sm-center">
                                        <a href="{{route('dashboard')}}"
                                        class=" pull-right d-sm-inline-block btn btn-sm btn-dark bg-dark shadow-sm">Cancel</a>
                                    </p>
                                    <div class="signup-form-min-frm pb-0 pt-5 col-md-12 m-0-auto">
                                        <!--    <form class="class" method="post" action="{{route('changepassword')}}" >-->
                                            {!! Form::open(['route' => 'changepassword','class'=>'pb-4', 'method' => 'post']) !!}
                                        <div class="form-group col-lg-12">
                                            <div class="row">
                                                {{-- <div class="col-lg-4">
                                                    <div class="form-group wow w-100 fadeInDown"
                                                        data-wow-duration="1000ms">
                                                        <label>Old Password</label>
                                                        <input type="password"
                                                            class="form-control "
                                                            name="oldpassword" value=""
                                                            placeholder="Old Password">
                                                    </div>
                                                </div> --}}
                                                <div class="col-lg-6">
                                                    <div class="form-group wow w-100 fadeInDown"
                                                        data-wow-duration="1500ms">
                                                        <label>New Password</label>
                                                        <input type="password" name="password" value=""
                                                            placeholder="New Password"
                                                            class="w-100 form-control ">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group wow w-100 fadeInDown"
                                                        data-wow-duration="1500ms">
                                                        <label>Confirm New Password</label>
                                                        <input type="password" name="confirmpassword" value=""
                                                            placeholder="Confirm New Password"
                                                            class="w-100 form-control ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <button type="submit"
                                                    class="btn btn-dark btn-lg btn-block wow fadeInDown"
                                                    data-wow-duration="1000ms">Submit
                                            </button>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

@stop
