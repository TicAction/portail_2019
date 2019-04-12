<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Intervention;
use App\User;
use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;
use PDF;

class StudentController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function classroom($id)
    {
        $user = User::findOrFail($id);

        return view('students.classroom',compact('user'));
    }
    public function export_pdf(Student $student)
    {

        $pdf = PDF::loadView('students.export_pdf',compact('student'));

        return $pdf->download('comportement.pdf');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stud = Student::all();
        $stud->load('users');

        return view('students.index', compact('stud'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        $user_id = Auth::user()->id;
        $student = new Student();
        $student->firstname = $request->get('firstname');
        $student->lastname = $request->get('lastname');

        $student->save();
        $student->users()->attach($user_id);


        return redirect('eleve')->with('success', 'Enregistrement fait');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $intervention = Intervention::all();
        $student->load(['behaviors','behaviors.observations.severity','behaviors.user']);

        return view('students.show', compact('student','intervention'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $student->load(['interventions','behaviors','pis']);
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, Student $student)
    {
        $student->firstname = $request->get('firstname');
        $student->lastname = $request->get('lastname');
        $student->update();
        return redirect('eleve')->with('success','Les modifications ont été faits');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        foreach($student->behaviors as $behavior):
            $behavior->observations()->detach();
        endforeach;
        $student->behaviors()->delete();
        $student->interventions()->delete();
        $student->pis()->delete();
        $student->behaviors()->detach();
        $student->users()->detach();
        $student->delete();
        return redirect('eleve')->with('erase', 'Enregistrement effacer');
    }
}
