@extends('layouts.dashboard')

@section('content')
    <div class="content" id="selector">
        <div class="row">
            <div class="col-lg-12 m-0-auto">
                <div class="dsh-min-sec mt-2">
                    <div class="container ">
                        <div class="row">
                            <div class="title  w-100 mb-3">
                                <h2 class="pull-left mt-0 mb-0 d-inline-block">Create Packages</h2>
                                <p class="text-right w-100 text-sm-center">
                                    <a href="{{route('package.index')}}"
                                       class=" pull-right d-sm-inline-block btn btn-sm btn-dark bg-dark shadow-sm">Cancel</a>
                                </p>
                                <div class="signup-form-min-frm pb-0 pt-5 col-md-12 m-0-auto">
                                    {!! Form::open(['route' => 'package.store', 'class'=>'pb-4', 'method' => 'post','enctype'=>'multipart/form-data']) !!}
                                    <div class="form-group col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1000ms">
                                                    <label>Title <span class="text-danger">*</span></label>
                                                    <input required
                                                            type="text"
                                                           class="form-control @error('title') is-invalid @enderror"
                                                           name="title" placeholder="Title">
                                                    @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="col-lg-4">

                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1500ms">
                                                    <label>Price <span class="text-danger">*</span></label>
                                                    <input required type="text" name="price" placeholder="Price"
                                                           class="w-100 form-control @error('price') is-invalid @enderror">
                                                    @error('price')
                                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1500ms">
                                                    <label>Period</label>
                                                    <select name="period"
                                                            class="form-control w-100 @error('period') is-invalid @enderror">
                                                        <option value="DAY">Day</option>
                                                        <option value="WEEK">Week</option>
                                                        <option value="MONTH">Month</option>
                                                        <option value="YEAR">Year</option>
                                                    </select>
                                                    @error('period')
                                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12" >
                                                <div class="row-editor wow w-100 fadeInDown"
                                                     data-wow-duration="1000ms">
                                                    <label>Features</label>
                                                    <textarea id="editor"
                                                        class="form-control @error('features') is-invalid @enderror"
                                                        name="features"></textarea>
                                                    @error('features')
                                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                    @enderror
                                                </div>
                                            </div>
{{--                                            <div class="col-lg-12">--}}
{{--                                                <div class="form-group wow w-100 pt-4 fadeInDown"--}}
{{--                                                     data-wow-duration="1500ms">--}}
{{--                                                    <label class="form-check-label">--}}
{{--                                                        <input type="checkbox" v-model="checked" name="is_trial"> Want--}}
{{--                                                        to add trial period?--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
{{--                                    <div id="trial_box" v-if="checked" class="form-group col-lg-12">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-lg-4">--}}
{{--                                                <div class="form-group wow w-100 fadeInDown"--}}
{{--                                                     data-wow-duration="1500ms">--}}
{{--                                                    <label>Trial Duration</label>--}}
{{--                                                    <input type="number" name="trial_duration" placeholder="0-12" maxlength="2" max="12" min="1"--}}
{{--                                                           class="w-100 form-control @error('trial_duration') is-invalid @enderror">--}}
{{--                                                    @error('trial_duration')--}}
{{--                                                    <span class="invalid-feedback" role="alert">--}}
{{--                                      <strong>{{ $message }}</strong>--}}
{{--                                      </span>--}}
{{--                                                    @enderror--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-lg-4">--}}
{{--                                                <div class="form-group wow w-100 fadeInDown"--}}
{{--                                                     data-wow-duration="1500ms">--}}
{{--                                                    <label>Trial Period</label>--}}
{{--                                                    <select name="trial_period"--}}
{{--                                                            class="form-control w-100 @error('trial_period') is-invalid @enderror">--}}
{{--                                                        <option value="DAY">Day</option>--}}
{{--                                                        <option value="WEEK">Week</option>--}}
{{--                                                        <option value="MONTH">Month</option>--}}
{{--                                                        <option value="YEAR">Year</option>--}}
{{--                                                    </select>--}}
{{--                                                    @error('trial_period')--}}
{{--                                                    <span class="invalid-feedback" role="alert">--}}
{{--                                      <strong>{{ $message }}</strong>--}}
{{--                                      </span>--}}
{{--                                                    @enderror--}}

{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

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
@endsection
@section('script')
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script>
        var app = new Vue({
            el: '#selector',
            data: {
                checked: true
            }
        });
    </script>

@stop
