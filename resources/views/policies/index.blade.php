@extends('layouts.dashboard')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12 m-0-auto">
                <div class="dsh-min-sec mt-2">
                    <div class="container ">
                        <div class="row">
                            <div class="title  w-100 mb-3">

                                <h2 class="pull-left mt-0 mb-0 d-inline-block">{{ isset($policy->name) ? ucwords(str_replace('_', ' ',$policy->name)) : "" }}</h2>
                                <div class="signup-form-min-frm pb-0 pt-5 col-md-12 m-0-auto">
                                    {!! Form::open(['route' => 'policies.store', 'class'=>'pb-4', 'method' => 'post']) !!}
                                    <input type="hidden" name="name" value="{{ isset($policy->name) ? strtolower(str_replace(' ', '_',$policy->name)) : "" }}">

                                    <div class="form-group col-lg-12">
                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1000ms">
                                                    <label>Content</label>
                                                    <textarea  class="editor" id="editor" name="page_content">{{isset($policy->content) ? $policy->content : "" }}</textarea>
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

@endsection

@section('script')


@stop

