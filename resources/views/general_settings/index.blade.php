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
                                        {!! Form::open(['url' => route('general_setting.update',$generalsetting->id ),'class'=>'pb-4', 'method' => 'post','enctype'=>'multipart/form-data']) !!}
                                        <input type="hidden" name="_method" value="PATCH">
                                        <h4 class=" wow fadeInDown animated text-center text-dark"
                                            data-wow-duration="1000ms">General Settings</h4>
                                        <div class="form-group mb-0">
                                            <div class="col-lg-12">
{{--                                                <div class="form-group wow w-100 fadeInDown" data-wow-duration="1000ms">--}}
{{--                                                    <label>Site Name</label>--}}
{{--                                                    <input type="text" class="form-control"--}}
{{--                                                           value="{{ $generalsetting->site_name }}" name="site_name"--}}
{{--                                                           placeholder="Site Name"></div>--}}

                                                <div class="form-group wow w-100 p-0 fadeInDown"
                                                     data-wow-duration="1500ms">
                                                    <label>Email Address</label>
                                                    <input type="text" class="form-control" name="email"
                                                           value="{{auth()->user()->email}}"
                                                           placeholder="Email Address"></div>
                                                <div class="form-group wow w-100 p-0 fadeInDown"
                                                     data-wow-duration="1500ms">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control" name="password"
                                                           value="{{$generalsetting->password}}"
                                                           placeholder="Change Password"></div>

                                                <div class="form-group wow w-100 p-0 fadeInDown"
                                                     data-wow-duration="1000ms">
                                                    <label>Facebook Page Link</label>
                                                    <input type="text" class="form-control" name="facebook"
                                                           value="{{$generalsetting->facebook}}" placeholder="Facebook Page Link">
                                                </div>
                                                <div class="form-group wow w-100 p-0 fadeInDown"
                                                     data-wow-duration="1500ms">
                                                    <label>Instagram Page Link</label>
                                                    <input type="text" class="form-control" name="instagram"
                                                           value="{{$generalsetting->instagram}}"
                                                           placeholder="Instagram Page Link"></div>
                                                <div class="form-group wow w-100 p-0 fadeInDown"
                                                     data-wow-duration="1000ms">
                                                    <label>Twitter Page Link</label>
                                                    <input type="text" class="form-control" name="twitter"
                                                           value="{{$generalsetting->twitter}}" placeholder="Twitter Page Link">
                                                </div>
                                                <div class="form-group wow w-100 p-0 fadeInDown"
                                                     data-wow-duration="1500ms">
                                                    <label>Youtube Page Link</label>
                                                    <input type="text" class="form-control" name="youtube"
                                                           value="{{$generalsetting->youtube}}" placeholder="Youtube Page Link">
                                                </div>
                                                <div class="form-group wow w-100 p-0 fadeInDown"
                                                     data-wow-duration="1000ms">
                                                    <label>Google Plus Page Link</label>
                                                    <input type="text" class="form-control" name="google_plus"
                                                           value="{{$generalsetting->google_plus}}"
                                                           placeholder="Google Plus Page Link">
                                                </div>
                                                <div class="form-group wow w-100 p-0 fadeInDown"
                                                     data-wow-duration="1000ms">
                                                    <label>System Timezone</label>
                                                    <select name="timezone" class="form-control demo-select2"
                                                            data-live-search="true">
                                                        @foreach (timezones() as $key => $value)
                                                            <option value="{{ $value }}" @if (app_timezone() == $value)
                                                            selected
                                                                @endif>{{ $key }}</option>
                                                        @endforeach
                                                    </select>
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
