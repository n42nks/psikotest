<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class adminMiddleware
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
        if(!session::get('login')){
            return redirect()->to("/admin/login");
        }
        return $next($request);
    }
}
