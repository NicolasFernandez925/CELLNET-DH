<?php

namespace App\Http\Middleware;

use Closure;

class Confirmation
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
        if(!$request->session()->has('confirm-pago')){
                     
            return response()->view('error.403');
        }
        
        return $next($request);
    }
}
