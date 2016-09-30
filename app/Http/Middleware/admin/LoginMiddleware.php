<?php

namespace App\Http\Middleware\admin;

use Closure;

class LoginMiddleware
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
        if(empty($request->session()->get('name')))
        {
            return redirect(url('/adminLogin'));
        }
        return $next($request);
    }
}
