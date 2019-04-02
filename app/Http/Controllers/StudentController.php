<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Intervention;
use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\Auth;
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
        $students = Student::where('user_id','=',$id)->get();
        $teacher = Auth::user()->$id;
        return view('students.classroom',compact('students','teacher'));
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
        $students = Student::all();
        return view('students.index', compact('students'));
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
        $student = new Student();
        $student->firstname = $request->get('firstname');
        $student->lastname = $request->get('lastname');
        $student->save();


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
        $student->behaviors()->detach();
        $student->delete();
        return redirect('eleve')->with('erase', 'Enregistrement effacer');
    }
}
