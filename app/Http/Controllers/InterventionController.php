<?php

namespace App\Http\Controllers;

use App\Intervention;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InterventionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interventions = Intervention::all();
        return view('interventions.index',compact('interventions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = Student::all();


//                $student = $students->where($user->pivot->user_id,'=',2 )->pluck('full_name','id');

        return view('interventions.create',compact('student'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $intervention = new Intervention();
        $intervention->intervention_date = $request->get('intervention_date');
        $intervention->intervention_content = $request->get('intervention_content');
        $intervention->intervention_period = $request->get('intervention_period');
        $intervention->student_id = $request->get('student');
        $intervention->save();
        return redirect('intervention');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Intervention  $intervention
     * @return \Illuminate\Http\Response
     */
    public function show(Intervention $intervention)
    {

        return view('interventions.show',compact('intervention'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Intervention  $intervention
     * @return \Illuminate\Http\Response
     */
    public function edit(Intervention $intervention)
    {
        $students = Student::all();

        $student = $students->where('user_id','=', Auth::user()->id)->pluck('full_name','id');
        return view('interventions.edit',compact('intervention','student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Intervention  $intervention
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Intervention $intervention)
    {

        $intervention->intervention_date = $request->get('intervention_date');
        $intervention->intervention_content = $request->get('intervention_content');
        $intervention->intervention_period = $request->get('intervention_period');
        $intervention->student_id = $request->get('student');
        $intervention->update();

        return redirect('intervention');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Intervention  $intervention
     * @return \Illuminate\Http\Response
     */
    public function destroy(Intervention $intervention)
    {
       $intervention->delete();
       return redirect('intervention');
    }
}
