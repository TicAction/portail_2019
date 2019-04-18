@extends('layouts.director')

@section('content')
    <p>
    <div class="card">
        <div class="card-header bg-primary text-white">

            Classe de {{$user->name}}
        </div>
        <div class="card-body">

            <table class="table table-striped  table-sm">
                <tr>
                    <th>Prénom et nom</th>

                    <th class="text-center">Ajouter un comportement</th>

                    <th class="text-center">Action</th>

                </tr>

                @foreach($user->students->sortBy('lastname') as $student)

                    <tr>

                        <td>{{$student->firstname}} {{$student->lastname}}</td>

                        <td class="text-center">

                            <a href="{{route("admin.behavior.create",$student->id)}}"><button class="btn btn-primary btn-sm">Ajouter un comportement</button></a>
                        </td>

                        <td class="text-center">

                            <a href="{{route('student_edit',$student->id)}}"><button disabled class="btn btn-success btn-sm">Modifier la fiche</button> </a>

                            {!! Form::open(['action' => ['StudentController@destroy', $student->id],'method'=>'DELETE','style' => 'display:inline' ]) !!}

                            {!! Form::submit('Effacer', ['disabled','class' => 'btn btn-danger btn-sm']) !!}

                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>

    </div>


    </p>
@endsection

