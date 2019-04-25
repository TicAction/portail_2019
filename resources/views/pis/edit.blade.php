@extends('layouts.app')
@section('content')
    <p>
    <div class="card">
        <div class="card-header text-white bg-primary">
            <h5>Modifier le plan de {{$pi->student->fullname}}</h5>

        </div>

        <div class="card-body">
            <div class="text-right">

            </div>
            <form action="{{route('pi_update',$pi->id)}}" method="post" class="form-group">
                @method('PUT')
                @csrf
                {{--<label for="student">Élèves de la classe</label>--}}
                {{--{!! Form::select('student', $pi->student->fullname , null , ['class' => 'form-control']) !!}--}}

                <label for="student">Date du PI</label>
                {!! Form::date('pi_date', $pi->pi_date, ['class' => 'form-control']) !!}



                <label for="student">Forces/Capacités </label>
                {!! Form::textarea('pi_capacity', $pi->pi_capacity, ['class' => 'form-control', 'id'=>'editor']) !!}

                <label for="student">Besoin/Difficultés <small>Apprentissages</small></label>
                {!! Form::textarea('pi_need_school', $pi->pi_need_school, ['class' => 'form-control', 'id'=>'editor']) !!}

                <label for="student">Besoin/Difficultés <small>Comportements</small></label>
                {!! Form::textarea('pi_need_behavior', $pi->pi_need_behavior, ['class' => 'form-control', 'id'=>'editor']) !!}

                <label for="student">Besoin/Difficultés <small>Autres</small></label>
                {!! Form::textarea('pi_need_other', $pi->pi_need_other, ['class' => 'form-control', 'id'=>'editor']) !!}

                <label for="student">Moyens mis en place</label>
                {!! Form::textarea('pi_way', $pi->pi_way, ['class' => 'form-control', 'id'=>'editor']) !!}

                <label for="student">Objectifs Prioritaires</label>
                {!! Form::textarea('pi_goal', $pi->pi_goal, ['class' => 'form-control', 'id'=>'editor']) !!}
<br>
                {!! Form::submit('Soumettre', ['class' => 'form-control btn btn-primary']) !!}
            </form>

        </div>

    </div>
    </p>
    <script>
        var allEditors = document.querySelectorAll('#editor');
        for (var i = 0; i < allEditors.length; ++i) {
            ClassicEditor.create(allEditors[i]);
        }
        // ClassicEditor
        //     .create( document.querySelector( '#editor' ) ,{
        //         language: 'fr',
        //         min_height: '200',
        //     })
        //
        //     .then( editor => {
        //         console.log( editor );
        //     } )
        //     .catch( error => {
        //         console.error( error );
        //     } );

        $(document).ready(function() {
            $('.basic-multiple').select2({
                placeholder : "Faire un choix",
            });


        });
    </script>
@stop