@extends('layouts.dashboard')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12 m-0-auto">
                <div class="dsh-min-sec">
                    <div class="container ">

                        <div class="row">

                            <div class="row w-100">
                                <div class="col-md-9  m-0-auto">

                                    <div class="signup-form-min-frm pb-0 pt-5 col-md-8 m-0-auto">
                                        {!! Form::open(['url' => route('general_setting.logo.store'),'class'=>'pb-4', 'method' => 'post','enctype'=>'multipart/form-data']) !!}
                                        <h4 class=" wow fadeInDown animated text-center text-dark"
                                            data-wow-duration="1000ms">Logo Settings</h4>
                                        <div class="form-group mb-0">
                                            <div class="col-lg-12">
                                                <div class="form-group wow w-100 fadeInDown" data-wow-duration="1000ms">
                                                    <label>Admin Profile Picture <small>(max height 40px)</small></label>
                                                    <input type="file" class="form-control" name="admin_profile">
                                                </div>

                                                <div class="form-group wow w-100 fadeInDown" data-wow-duration="1000ms">
                                                    <label>Logo <small>(max height 40px)</small></label>
                                                    <input type="file" class="form-control" name="logo">
                                                </div>

                                                <div class="form-group wow w-100 p-0 fadeInDown"
                                                     data-wow-duration="1500ms">
                                                    <label>Favicon <small>(32x32)</small></label>
                                                    <input type="file" name="favicon" class="w-100 form-control">
                                                </div>

                                                <div class="form-group wow w-100 p-0 fadeInDown"
                                                     data-wow-duration="1000ms">
                                                    <label>Login background image <small>(1920x1080)</small></label>
                                                    <input type="file" class="form-control" name="admin_login_background">
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
