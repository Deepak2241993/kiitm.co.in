<?php

namespace App\Http\Middleware;
use Session;
use Closure;
use Illuminate\Http\Request;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //dd(session::get('result'));
        if(empty(Session::get('result')))
        {
            return redirect('/login');
        }
        return $next($request);
    }
}
