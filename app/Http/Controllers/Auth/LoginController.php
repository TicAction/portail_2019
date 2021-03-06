<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
     */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';
    protected function authenticated(Request $request, $user)
    {
        if ( Auth::user()->role === 'Direction' ) {
            return redirect('/admin/director');
        }
        elseif ( Auth::user()->role === 'Sdg' ) {
            return redirect('/sdg/service_de_garde');
        }
        elseif ( Auth::user()->role === 'Spécialiste' ) {
            return redirect('/specialist');
        }
        elseif( Auth::user()->role === 'Orthopédagogue' ) {
            return redirect('/ortho');
        }


        return back();
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
