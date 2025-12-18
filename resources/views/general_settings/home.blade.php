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
                                        {!! Form::open(['url' => route('general_setting.home.store'),'class'=>'pb-4', 'method' => 'post','enctype'=>'multipart/form-data']) !!}
                                        <h4 class=" wow fadeInDown animated text-center text-dark"
                                            data-wow-duration="1000ms">Header Settings</h4>
                                        <div class="form-group mb-0">
                                            <div class="col-lg-12">
                                                <div class="form-group wow w-100 fadeInDown" data-wow-duration="1000ms">
                                                    <label>Hero Image </label>
                                                    <select id="h_img" name="h_img" class="form-control demo-select2">
                                                        <option {{ !empty($generalsetting) && $generalsetting->h_img == '0' ? 'selected' : '' }} value="0">Show</option>
                                                        <option {{ !empty($generalsetting) && $generalsetting->h_img == '1' ? 'selected' : '' }} value="1">Hide</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="Color_box" @if($generalsetting->h_img == 1) style="display:none" @endif>

                                                <div class="col-lg-12">
                                                    <div class="form-group wow w-100 fadeInDown" data-wow-duration="1000ms">
                                                        <label>Heading Colour </label>
                                                        <input name="heading_colour" class="form-control" type="color" value="{{$generalsetting->heading_colour}}"/>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group wow w-100 fadeInDown" data-wow-duration="1000ms">
                                                        <label>Text Colour </label>
                                                        <input name="text_colour" class="form-control" type="color" value="{{$generalsetting->text_colour}}"/>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group wow w-100 fadeInDown" data-wow-duration="1000ms">
                                                        <label>Button Colour </label>
                                                        <input name="button_colour" class="form-control" type="color" value="{{$generalsetting->button_colour}}"/>
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
        <script>
            $('document').ready(function(){
                $('#h_img').on('change',function(){
                    var selected = $(this).val();
                    if(selected == 1){
                        $('.Color_box').hide();
                    }else{
                        $('.Color_box').show();
                    }
                });
            })
        </script>

@endsection


