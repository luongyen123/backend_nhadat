<?php

namespace App\Http\Middleware;
use Closure;

class AuthMiddleware
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
        $token = $request->cookie('token');
        if($token == null){
            return redirect('/admin/login');
        }
        return $next($request);
        
    }
}
