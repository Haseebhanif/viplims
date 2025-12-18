@extends('layouts.app')

@section('content')
    <section class="w-100 login-min login-min-frm-min pt-5">
        <div class="container register-top-min pt-0">
            <div class="row">
                <div class="col-md-9  m-0-auto">
                    <div class="register-right-min col-md-6 m-0-auto pt-4">

                        <div class="tab-content">
                            <h4 class="register-heading-min wow fadeInDown" data-wow-duration="1000ms">Reset Password</h4>
                            <div class="row register-form-min pb-2 pt-3 pr-3 pl-3">
                                {!! Form::open(['route' => 'password.update','class'=>'w-100','method' => 'post']) !!}
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="col-md-12 m-0-auto">
                                    <div class="form-group wow fadeInDown" data-wow-duration="1000ms">
                                        <!-- <label class="text-secondary">Email address</label> -->
                                        <input type="email" id="email"
                                               class="form-control @error('email') is-invalid @enderror"
                                               placeholder="Email address" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus/>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group wow fadeInDown" data-wow-duration="1000ms">
                                        <!--   <label class="text-secondary">Password</label> -->
                                        <input type="password" id="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               placeholder="Password" name="password" required autocomplete="new-password"/>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group wow fadeInDown" data-wow-duration="1000ms">
                                        <input type="password" id="password-confirm"
                                               class="form-control @error('password') is-invalid @enderror"
                                               placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password"/>
                                        @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="form-group text-left wow fadeInDown" data-wow-duration="1000ms">
                                        <input type="submit" class="btnRegister-min mt-0 pull-left w-100 wow fadeInDown"
                                               data-wow-duration="1000ms" value="Reset Password"/>
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>

                            <p class="text-center pt-1 w-100 pb-4 wow fadeInDown" data-wow-duration="1000ms">Create an
                                account? <a href="{{route('user.registration')}}"
                                            class="text-dark d-inline-block text-decoration-none text-underline">Create Account</a></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
