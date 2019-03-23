<?php

namespace App\Http\Controllers;

use App\Pi;
use App\Student;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function export_pdf(Pi $pi)
    {

        $pdf = PDF::loadView('pis.pi_pdf',compact('pi'));

        return $pdf->download('plan_intervention.pdf');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pis = Pi::all();
       return view('pis.index',compact('pis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pi = new Pi();
        $students = Student::all();
        $student = $students->where('user_id','=', Auth::user()->id)->pluck('full_name','id');

        return view('pis.create',compact('pi','student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Pi $pi)
    {
        $pi->pi_date = $request->get('pi_date');
        $pi->pi_capacity = $request->get('pi_capacity');
        $pi->pi_need_school = $request->get('pi_need_school');
        $pi->pi_need_behavior = $request->get('pi_need_behavior');
        $pi->pi_need_other = $request->get('pi_need_other');
        $pi->pi_goal = $request->get('pi_goal');
        $pi->pi_way = $request->get('pi_way');
        $pi->student_id = $request->get('student');
        $pi->save();

        return redirect('/plan_intervention');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pi  $pi
     * @return \Illuminate\Http\Response
     */
    public function show(Pi $pi)
    {


        return view('pis.show',compact('pi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pi  $pi
     * @return \Illuminate\Http\Response
     */
    public function edit(Pi $pi)
    {
        $pi->load('student');

        return view('pis.edit',compact('pi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pi  $pi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pi $pi)
    {
        $pi->update($request->all());

        return redirect('/plan_intervention');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pi  $pi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pi $pi)
    {
        $pi->delete();

        return redirect('/plan_intervention')->with('danger',"Vous avez bien effacé le plan d'intervention");
    }
}
