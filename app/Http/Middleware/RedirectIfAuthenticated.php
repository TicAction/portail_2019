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


            if (Auth::user()->role === 'Direction') {
                return redirect('/admin/director');
            }
            if (Auth::user()->role === 'Sgd') {
                return redirect('/sdg/sdg');
            }
            if (Auth::user()->role === 'Ortho') {
                return redirect('/ortho/orthopedagogue');
            }
            if (Auth::user()->role === 'Specialiste') {
                return redirect('/specialiste/specialiste');
            }
            if (Auth::user()->role === 'Pne') {
                return redirect('/pne/pne');
            }
            if (Auth::user()->role === 'Enseignant') {
                return redirect('/');
            }
            return redirect('/login');
        }

        return $next($request);
    }
}
