<?php

namespace App\Http\Controllers\Director;

use App\Behavior;
use App\Http\Controllers\Controller;
use App\Mail\BehaviorCreated;
use App\Observation;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class BehaviorController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $student = Student::findOrFail($id);
        $observations = Observation::all();

        return view('directors/behaviors.create',compact('student','observations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $observations = $request->get('observation');

        $behavior = new Behavior();
        $behavior->behavior_content = $request->get('behavior_content');
        $behavior->behavior_date = $request->get('behavior_date');
        $students = $request->get('students');
        $behavior->user_id = Auth::user()->id;
        $behavior->respect = $request->get('respect');

        $behavior->save();

                $behavior->students()->attach($students);

        if ($observations):
            foreach ($observations as $observation) {
                $behavior->observations()->attach($observation);
            }
        endif;
            foreach ($behavior->students as $student):
                foreach ($student->users as $user):

                      Mail::to([$user->email])->send(
                          new BehaviorCreated($behavior)
                      );
            endforeach;
            endforeach;


      return redirect('/admin/index')->with('success','Le nouveau comportement à bien été enregistré');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Behavior  $behavior
     * @return \Illuminate\Http\Response
     */
    public function show(Behavior $behavior)
    {

        return view('directors/behaviors.show',compact('behavior'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Behavior  $behavior
     * @return \Illuminate\Http\Response
     */
    public function edit(Behavior $behavior)
    {
        $students = Auth::user()->students;

        $observations = Observation::all();

        $level_one= $observations->where('severity_id','=',1)->pluck('observation','id');
        $level_two = $observations->where('severity_id','=',2)->pluck('observation','id');
        $level_three = $observations->where('severity_id','=',3)->pluck('observation','id');

        return view('directors/behaviors.edit',compact('students','behavior','level_one','level_two','level_three','observations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Behavior  $behavior
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Behavior $behavior)
    {
      
        $observations = $request->get('observation');
        $students = $request->get('students');

        $behavior->behavior_content = $request->get('behavior_content');
        $behavior->behavior_date = $request->get('behavior_date');
        $behavior->user_id = Auth::user()->id;
        $behavior->respect = $request->get('respect');
        $behavior->update();


        $behavior->observations()->sync($observations,true) ;
        $behavior->students()->sync($students,true) ;

        return redirect('/admin/index')->with('success','Les modifications ont été faites');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Behavior  $behavior
     * @return \Illuminate\Http\Response
     */
    public function destroy(Behavior $behavior)
    {

        $behavior->observations()->detach();
        $behavior->students()->detach();

        $behavior->delete();
        return redirect('/admin/index')->with('danger','Le comportement à été effacé');
    }
}
