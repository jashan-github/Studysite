<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GuestUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->user()){
            return $next($request);
        }
        return redirect(route('dashboard'));

    }
}
