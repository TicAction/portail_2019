<?php

namespace App\Http\Controllers;

use App\Behavior;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Student;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $behaviors = Behavior::where('user_id','=',Auth::user()->id)->get();

        $behaviors->load(['students','observations']);

        return view('home', compact('behaviors'));
    }

    public function behaviors()
    {
        $behaviors = Behavior::where('user_id','=',Auth::user()->id)->get();
        $behaviors->load('students');

        return view('my_behavior',compact('behaviors'));
    }
}
