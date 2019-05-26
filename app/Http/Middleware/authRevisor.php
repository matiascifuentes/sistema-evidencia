<?php

namespace App\Http\Middleware;

use Closure;

class authRevisor
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
        if (Auth::check()) {
        // The user is logged in...
            
        }
        return $next($request);
    }
}
