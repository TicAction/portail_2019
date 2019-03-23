@extends('layouts.app')
@section('sidebar')
    @include('students.create')
    @endsection
@section('content')
<p>

    <div class="card">
        <div class="card-header bg-primary text-white mb-3">
            <h5>Les élèves de ma classe</h5>
        </div>
        <div class="card-body">
            <table class="table table-striped table-sm">
                <tr>
                    <th>Nom</th>
                    <th></th>
                    <th></th>

                </tr>
                @foreach (Auth::user()->students->sortBy('lastname') as $student)
                <tr>
                    <td>{{$student->firstname}} {{$student->lastname}}</td>
                    <td>
                        <a href="{{route('student_edit',$student->id)}}"><button class="bth btn-primary btn-sm">Modifie le nom</button></a>
                        <a href="{{route('behavior_create',$student->id)}}"><button class="bth btn-primary btn-sm">Ajouter un comportement</button></a>
                    </td>
                    <td>

                        <form action="{{route('student_delete',$student->id)}}" method="POST">
                            @method('DELETE') @csrf
                            <button class="btn btn-danger btn-sm" type="submit">Effacer cet élève</button>
                        </form>

                    </td>
                </tr>

                @endforeach
            </table>
        </div>
    </div>
</p>
@endsection
