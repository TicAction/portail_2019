<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {

            if (Auth::user()->role === 'Direction' or Auth::user()->role === 'SDG' or Auth::user()->role === 'Orthopédagogue') {
                return redirect('/admin/index');
            }
            return redirect('/');
        }

        return $next($request);
    }
}
