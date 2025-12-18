<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticated()
    {

        if(auth()->user()->user_type == 'admin')
        {
            return redirect()->route('admin.dashboard');
        }else if(auth()->user()->user_type == 'customer')
        {
            return redirect()->route('dashboard');
        }
        elseif(session('link') != null){
            return redirect(session('link'));
        }
        else{
            return redirect()->intended('dashboard');
        }

    }


    public function logout(Request $request)
    {
        if(auth()->check()) {
            if (auth()->user() != null && (auth()->user()->user_type != 'admin' || auth()->user()->user_type == 'customer')) {
                $redirect_route = 'login';
            }else {
                $redirect_route = 'home';
            }
            $this->guard()->logout();
        }else
        {
            $redirect_route = 'login';
        }

        $request->session()->invalidate();

        return  redirect()->route($redirect_route);
    }

}
