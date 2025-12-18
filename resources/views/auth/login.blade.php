@extends('layouts.app')
@php
    $generalsetting = \App\Models\GeneralSetting::first();
@endphp
@section('css')
    .login-min {
    @if ($generalsetting->admin_login_background != null)
        background: url({{asset($generalsetting->admin_login_background)}});
    @else
        background: url({{asset('images/slide_1.jpg')}});
    @endif
    padding-top: 5%;
    padding-bottom: 5%;
    position: relative;
    background-size: cover;
    }
@stop
@section('content')
    <section class="w-100 login-min login-min-frm-min pt-5">
        <div class="container register-top-min pt-0">
            <div class="row">
                <div class="col-md-9  m-0-auto">
                    <div class="register-right-min col-md-6 m-0-auto pt-4 mt-5 mt-lg-0">

                        <div class="tab-content">
                            <h4 class="register-heading-min wow fadeInDown mt-2" data-wow-duration="1000ms">User
                                Login</h4>
                            <div class="row register-form-min pb-2 pt-3 pr-3 pl-3">
                                {!! Form::open(['route' => 'login','class'=>'w-100','method' => 'post']) !!}
                                <div class="col-md-12 m-0-auto">
                                    <div class="form-group wow fadeInDown" data-wow-duration="1000ms">
                                        <!-- <label class="text-secondary">Email address</label> -->
                                        <input type="email" id="email"
                                               class="form-control @error('email') is-invalid @enderror"
                                               placeholder="Email address" name="email" required="required"/>
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
                                               placeholder=" Password" name="password" required="required"/>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class=" row">
                                        <div class="col-md-6">
                                            <div class="form-group wow fadeInDown" data-wow-duration="1000ms">
                                                <input class=" form-check-inline" type="checkbox" name="remember"
                                                       id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="remember">
                                                    Remember Me
                                                </label>
                                            </div>
                                        </div>
                                        @if(Route::has('password.request'))
                                            <div class="col-md-6">
                                                <div class="text-right form-group wow fadeInDown"
                                                     data-wow-duration="1000ms">
                                                    <label class="form-check-label" for="forgot">
                                                        <a class="text-muted theme-secondary-color text-underline"
                                                           href="{{route('password.request')}}">{{__('Forgot Password?')}}</a>
                                                    </label>
                                                </div>
                                            </div>
                                        @endif
                                    </div>


                                    <div class="form-group text-left wow fadeInDown" data-wow-duration="1000ms">
                                        <input type="submit" class="btnRegister-min mt-0 pull-left w-100 wow fadeInDown"
                                               data-wow-duration="1000ms" value="Log In"/>
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>

                            <p class="text-center pt-1 w-100 pb-4 wow fadeInDown" data-wow-duration="1000ms">Create an
                                account? <a href="{{route('user.registration')}}"
                                            class="text-dark d-inline-block text-decoration-none text-underline">Create
                                    Account</a></p>
                            @if (env("DEMO_MODE") == "On")
                                <div class="cls-content-sm panel" style="width: 100% !important;">
                                    <table class="table table-responsive table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>demo@demo.com</td>
                                            <td>password</td>
                                            <td>
                                                <button class="btn btn-info btn-xs" onclick="autoFill()">copy</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script type="text/javascript">
        function autoFill() {
            $('#email').val('demo@demo.com');
            $('#password').val('password');
        }
    </script>
@endsection
