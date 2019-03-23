@extends('layouts.app')
@section('content')

    <p>
        <div class="card">
            <div class="card-header bg-primary text-white">
                @foreach($behavior->students as $student)
                Modifier la fiche de {{$student->fullname}}
                    @endforeach
            </div>
            <div class="card-body">


                <form action="{{route('behavior_update',$behavior->id)}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6">
                            <label for="students">Choisir un élève</label>
                            <select name="students" class="form-control">
                                @foreach($behavior->students as $student)
                                <option value="{{$student->id}}"> {{$student->fullname}}</option>

                                @endforeach

                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="behavior_date">Date du comportement</label>
                            <input type="date" name="behavior_date" value="{{$behavior->behavior_date->format('Y-m-d')}}" class="form-control">
                        </div>
                    </div>

                    <label for="behavior_content">Comportement</label>
                    <textarea name="behavior_content" placeholder="Écrire le comportement" class="form-control" id="editor" >{{$behavior->behavior_content}}</textarea>
                    <br>
                    <label for="respect">Manque de respect</label>
                    @if($behavior->respect == 'on')
                    <input type="checkbox" name="respect" class="form-group" checked>
                        @else <input type="checkbox" name="respect" class="form-group" >
                    @endif

                    <br>

                <label for="jaune">Comportement de niveau 1</label>

                 {!! Form::select('observation[]',$level_one, null, ['multiple'=>'multiple','class'=>'form-control edit-basic-multiple']) !!}

                <br>
                    <label for="jaune">Comportement de niveau 2</label>
                {!! Form::select('observation[]',$level_two, null, ['multiple'=>'multiple','class'=>'form-control edit-basic-multiple']) !!}
                    <label for="jaune">Comportement de niveau 3</label>
                {!! Form::select('observation[]',$level_three, null, ['multiple'=>'multiple','class'=>'form-control edit-basic-multiple']) !!}
                    <br> <br>
    <p>
        <button type="submit" class="btn btn-success">Soumettre les informations</button>

    </p>

    </form>
    <form action="{{route('behavior_delete',$behavior->id)}}" method="POST">
    @method('DELETE') @csrf
    <button class="btn btn-danger" type="submit">Effacer ce comportement</button>
    </form>
    </div>
    </div>
    </p>

    <script>

        $(document).ready(function() {

            $('.edit-basic-multiple').select2({placeholder:"Faire un choix"}).val({!! json_encode($behavior->observations()->allRelatedIds() )!!}).trigger('change');

        });
    </script>
@endsection





