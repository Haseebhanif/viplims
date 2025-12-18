@extends('layouts.dashboard')

@section('content')
    <div class="content" id="selector">
        <div class="row">
            <div class="col-lg-12 m-0-auto">
                <div class="dsh-min-sec mt-2">
                    <div class="container ">
                        <div class="row">
                            <div class="title  w-100 mb-3">
                                <h2 class="pull-left mt-0 mb-0 d-inline-block">Edit Package</h2>
                                <p class="text-right w-100 text-sm-center">
                                    <a href="{{route('package.index')}}"
                                       class=" pull-right d-sm-inline-block btn btn-sm btn-dark bg-dark shadow-sm">Cancel</a>
                                </p>
                                <div class="signup-form-min-frm pb-0 pt-5 col-md-12 m-0-auto">
                                    {!! Form::open(['route' => ['package.update',$package->id], 'class'=>'pb-4', 'method' => 'PATCH','enctype'=>'multipart/form-data']) !!}
                                    <div class="form-group col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-4">

                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1500ms">
                                                    <label>Price</label>
                                                    <input type="text" name="price" placeholder="Price"
                                                           class="w-100 form-control @error('price') is-invalid @enderror">
                                                    @error('price')
                                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                    @enderror
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
