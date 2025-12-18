@extends('layouts.app')

@section('content')
    <section class="w-100 login-min reg-min-frm-min pt-0">
        <div class="container register-top-min pt-0">
            <div class="row">
                <div class="col-md-9  m-0-auto">
                    <div class="signup-form-min-frm pb-0 pt-5 col-md-8 m-0-auto mt-3 mt-lg-0">
                        {!! Form::open(['route' => 'register','class'=>'pb-4', 'method' => 'post']) !!}
                        <h2 class=" wow fadeInDown" data-wow-duration="1000ms"> Register </h2>
                        <p class="hint-text wow fadeInDown theme-secondary-color" data-wow-duration="1000ms">Get started with your free
                            account.</p>
                            <input type="hidden" class="form-control" value="{{ empty(Request()->amount) ? $Amount : Request()->amount }}" name="amount" />
                        <div class="form-group wow fadeInDown" data-wow-duration="1000ms">
                            <input type="text" class="form-control" value="{{old('company')}}" name="company" placeholder="Company Name *" required>
                            @error('company')
                            <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                            @enderror
                        </div>

                        <div class="form-group mb-0">
                            <div class="row">
                                <div class="form-group wow col-md-6 fadeInDown" data-wow-duration="1000ms"><input
                                        type="text" class="form-control @error('first_name') is-invalid @enderror"
                                        name="first_name" required value="{{old('first_name')}}" placeholder="First Name *">
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 wow fadeInDown" data-wow-duration="1500ms"><input
                                        type="text" class="form-control @error('last_name') is-invalid @enderror"
                                        name="last_name" required value="{{old('last_name')}}" placeholder="Last Name *">
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group wow fadeInDown" data-wow-duration="1000ms">
                            <input type="email" required class="form-control" value="{{old('email')}}" name="email" placeholder="Email *" >
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                            @enderror
                        </div>
                        <div class="form-group wow fadeInDown" data-wow-duration="1000ms">
                            <input type="password" data-wow-duration="1000ms" required minlength="8"
                                   class="form-control wow fadeInDown @error('password') is-invalid @enderror"
                                   name="password" placeholder="Password *">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                            @enderror
                        </div>
                        <div class="form-group wow fadeInDown" data-wow-duration="1000ms">
                                <input type="password" data-wow-duration="1000ms" required minlength="8"
                                       class="form-control wow fadeInDown @error('confirm_password') is-invalid @enderror"
                                       name="password_confirmation" autocomplete="new-password" placeholder="Confirm Password *">
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                            @enderror
                        </div>
                        <div class="form-group wow fadeInDown" data-wow-duration="1000ms">
                            <label class="form-check-label theme-secondary-color"><input type="checkbox" name="terms" required value="1" {{old('terms')==1 ? 'checked' : ''}}> I accept the
                                <a class="text-underline" href="{{route('terms_conditions')}}">Terms
                                    of Use</a> &amp; <a href="{{route('privacypolicy')}}" class="text-underline">Privacy Policy</a></label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark btn-lg btn-block wow fadeInDown"
                                    data-wow-duration="1000ms">Register Now
                            </button>
                        </div>
                        <div class="text-center theme-secondary-color">Already have an account? <a class="text-underline"
                                                                             href="{{route('login')}}">Sign in</a></div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
