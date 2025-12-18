@extends('layouts.app')
@section('content')
    <div class="content">
        <section class="sectoin-1 slider-sec-min slider-sec-min-user mt-5 custom-bg-gray mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft" data-wow-duration="1000ms">
                        <div class="user-invoice-table card">
                            <div class="media d-flex">
                                <div class="media-body text-left user-invoice-title">
                                    <h6 class="text-muted">Edit Profile</h6>
                                  {!! Form::model($user,['route' => ['user.update',$user->id], 'method' => 'post']) !!}
                                    <div class="form-group wow fadeInDown mt-3" data-wow-duration="1000ms">
                                        <input name="_method" type="hidden" value="PATCH">
                                        <input type="text" class="form-control" readonly value="{{$user->company}}" name="company" placeholder="Company Name" >
                                        @error('company')
                                        <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="row">
                                            <div class="form-group wow col-md-6 fadeInDown" data-wow-duration="1000ms"><input
                                                    type="text" value="{{$user->first_name}}" class="form-control @error('first_name') is-invalid @enderror"
                                                    name="first_name" placeholder="First Name">
                                                @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6 wow fadeInDown" data-wow-duration="1500ms"><input
                                                    type="text" value="{{$user->last_name}}" class="form-control @error('last_name') is-invalid @enderror"
                                                    name="last_name" placeholder="Last Name">
                                                @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group wow fadeInDown" data-wow-duration="1000ms">
                                        <input type="email" readonly value="{{$user->email}}" class="form-control" name="email" placeholder="Email" >
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                        @enderror
                                    </div>
                                    <div class="form-group wow fadeInDown" data-wow-duration="1000ms">
                                        <input type="password" data-wow-duration="1000ms"
                                               class="form-control wow fadeInDown @error('password') is-invalid @enderror"
                                               name="password" placeholder="Password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                        @enderror
                                    </div>
                                    <div class="form-group wow fadeInDown" data-wow-duration="1000ms">
                                        <input type="password" data-wow-duration="1000ms"
                                               class="form-control wow fadeInDown @error('password_confirmation') is-invalid @enderror"
                                               name="password_confirmation" autocomplete="new-password" placeholder="Confirm Password">
                                        @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-dark btn-lg btn-block wow fadeInDown"
                                                data-wow-duration="1000ms">Update Profile</button>
                                    </div>
                                    {!! Form::close() !!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@stop
