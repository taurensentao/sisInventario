<?php

namespace sisInventario\Http\Middleware;

use Closure;
use  Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth()->user==1) {
            return $next($request);
            
        }
        
         return redirect()->back();
    }

}
