@extends('layouts.dashboard')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12 m-0-auto">
                <div class="dsh-min-sec mt-2">
                    <div class="container ">
                        <div class="row">
                            <div class="title  w-100 mb-3">
                                <h2 class="pull-left mt-0 mb-0 d-inline-block">
                                    Edit {{ucwords($user->first_name.' '.$user->last_name)}}</h2>
                                <p class="text-right w-100 text-sm-center">
                                    <a href="{{route('users.index')}}"
                                       class=" pull-right d-sm-inline-block btn btn-sm btn-dark bg-dark shadow-sm">Cancel</a>
                                </p>
                                <div class="signup-form-min-frm pb-0 pt-5 col-md-12 m-0-auto">
                                    {!! Form::model($user,['route' => ['users.update',$user->id], 'class'=>'pb-4', 'method' => 'post','enctype'=>'multipart/form-data']) !!}
                                    <input name="_method" type="hidden" value="PATCH">
                                    <div class="form-group col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1000ms">
                                                    <label>First Name</label>
                                                    <input type="text"
                                                           class="form-control @error('first_name') is-invalid @enderror"
                                                           name="first_name" value="{{$user->first_name}}"
                                                           placeholder="First Name">
                                                    @error('first_name')
                                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="col-lg-4">

                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1500ms">
                                                    <label>Last Name</label>
                                                    <input type="text" name="last_name" value="{{$user->last_name}}"
                                                           placeholder="Last Name"
                                                           class="w-100 form-control @error('last_name') is-invalid @enderror">
                                                    @error('last_name')
                                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1500ms">
                                                    <label>Email</label>
                                                    <input type="text" name="email" value="{{$user->email}}"
                                                           placeholder="Email" readonly
                                                           class="w-100 form-control @error('email') is-invalid @enderror">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1000ms">
                                                    <label>Company</label>
                                                    <input type="text"
                                                           class="form-control @error('company') is-invalid @enderror"
                                                           name="company" readonly value="{{$user->company}}"
                                                           placeholder="Company">
                                                    @error('company')
                                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="col-lg-4">

                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1500ms">
                                                    <label>Password</label>
                                                    <input type="text" name="password"
                                                           placeholder="Password"
                                                           class="w-100 form-control @error('password') is-invalid @enderror">
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1500ms">
                                                    <label>Email</label>
                                                    <input type="text" name="password_confirmation"
                                                           placeholder="Password Confirmation"
                                                           class="w-100 form-control @error('password_confirmation') is-invalid @enderror">
                                                    @error('password_confirmation')
                                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1000ms">
                                                    <div class="col-lg-3">
                                                        <label>
                                                            <input type="radio"
                                                                   class="form-check-inline @error('status') is-invalid @enderror"
                                                                   name="status" {{$user->status==1? 'checked' : ''}}
                                                                   value="1">
                                                            Active
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label>
                                                            <input type="radio" value="0" {{$user->status==0? 'checked' : ''}}
                                                                   class="form-check-inline @error('status') is-invalid @enderror"
                                                                   name="status" >
                                                            Inactive
                                                        </label>
                                                    </div>
                                                    @error('status')
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

@stop
