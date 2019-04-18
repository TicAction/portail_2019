<?php

namespace App\Http\Controllers\Director;

use App\Behavior;
use App\Pi;
use App\Student;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');

    }
    public function export_pdf(Pi $pi)
    {

        $pdf = PDF::loadView('pis.pi_pdf',compact('pi'));

        return $pdf->download('plan_intervention.pdf');
    }



    public function index()
    {

        $behaviors = Behavior::orderBy('behavior_date','desc')->paginate(15);
        $behaviors->load(['students','observations','user']);

        return view('directors.index', compact('behaviors'));
    }

    public function pi()
    {
        $pis = Pi::orderBy('pi_date','desc')->paginate(5);
        $pis->load(['student']);

        return view('directors/pis.pi',compact('pis'));

    }

    public function classroom($id)
    {
        $user = User::findOrFail($id);

        return view('directors.classroom',compact('user'));
    }




}
