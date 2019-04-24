@extends('layouts.director')
@section('content')

    <p>
        <div class="card">
            <div class="card-header text-white bg-primary mb-3">
                <div class="row">
                <div class="col-md-6">
                    <h5>Liste des comportements de mon école</h5>
                </div>
                <div class="col-md-6 text-right">


                    <form action="{{route('admin.behavior.search')}}" method="post">
                        @csrf
                        <select class="basic-multiple form-control" name="student" multiple="multiple">
                            <option value="0">Recherche par élève</option>
                            @foreach($students as $student)
                                <option value="{{$student->id}}">{{$student->fullname}}</option>
                            @endforeach
                        </select>

                        <button class="btn btn-success btn-sm" type="submit">Soumettre</button>
                    </form>


                </div>
                </div>

            </div>
            <div class="card-body">
                <table class="table table-striped table-sm">

                    <tr>
                        <th>Date</th>
                        <th>Nom</th>
                        <th>Attribué par</th>
                        <th>Comportement</th>


                    </tr>
                    @foreach($behaviors->sortByDesc('behavior.date') as $behavior)

                        @foreach($behavior->students as $student)
                            <tr>
                                <td width="10%"> <strong>{{$behavior->behavior_date->format('d-m-Y')}}</strong></td>
                                <td width="18%">{{$student->firstname}} {{$student->lastname}}</td>
                                <td width="15%"> <strong>{{$behavior->user['name']}}</strong></td>

                                <td width="57%">
                                    <div class="truncate" >
    <p>
        {!!  $behavior->behavior_content!!}
        <br>
        <strong>
            {{$behavior->respect == '1' ? 'Manque de respect' : ''}}
        </strong>

        <br>

        @foreach($behavior->observations as $observation)
            <br>
    <ul> <li>
            {{$observation->observation}}
        </li></ul>
    @endforeach
    <a href="{{route('admin.behavior.edit',$behavior->id)}}">
        <button class="btn btn-primary btn-sm">Modifier</button>
    </a>
    </p>

    </div>

    </td>
    </tr>
    @endforeach
    @endforeach
    </table>

    </div>

    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            {!! $behaviors->links() !!}
        </div>
    </div>
    </p>


    @endsection
