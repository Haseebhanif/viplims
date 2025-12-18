<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Support\Facades\Redirect;

class IsUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        session()->put('subscribe_url',url()->current());

        if (Auth::check() && (Auth::user()->user_type == 'customer' || Auth::user()->user_type == 'seller')) {
            return $next($request);
        }
        else{
            session(['link' => url()->current()]);

            return redirect()->route('login');
        }
    }
}
