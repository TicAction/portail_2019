@extends('layouts.app')
@section('content')
    <p>
        <div class="card">
            <div class="card-header text-white bg-primary">
                <h5>Liste des plans d'interventions</h5>

            </div>

            <div class="card-body">
                <div class="text-right">

    </div>
                <form action="{{route('pi_store')}}" method="POST" class="form-group">
                    @csrf
                    <label for="student">Élèves de la classe</label>

                    <select class="form-control" name="student" >
                        @foreach(Auth::user()->students as $st)
                            <option value="{{$st->id}}">{{$st->fullname}}</option>
                        @endforeach
                    </select>

                    <label for="student">Date du PI</label>
                   {!! Form::date('pi_date', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}

                    <label for="student">Forces/Capacités </label>
                    {!! Form::textarea('pi_capacity', null, ['class' => 'form-control', 'id'=>'editor']) !!}


                    <label for="student">Besoin/Difficultés <small>Apprentissages</small></label>
                    {!! Form::textarea('pi_need_school', null, ['class' => 'form-control', 'id'=>'editor']) !!}

                    <label for="student">Besoin/Difficultés <small>Comportements</small></label>
                    {!! Form::textarea('pi_need_behavior', null, ['class' => 'form-control', 'id'=>'editor']) !!}

                    <label for="student">Besoin/Difficultés <small>Autres</small></label>
                    {!! Form::textarea('pi_need_other', null, ['class' => 'form-control', 'id'=>'editor']) !!}

                    <label for="student">Moyens mis en place</label>
                    {!! Form::textarea('pi_way', null, ['class' => 'form-control', 'id'=>'editor']) !!}

                    <label for="student">Objectifs Prioritaires</label>
                    {!! Form::textarea('pi_goal', null, ['class' => 'form-control', 'id'=>'editor']) !!}



                    <br>
                        {!! Form::submit('Soumettre', ['class' => 'form-control btn btn-primary']) !!}


                </form>

    </div>

    </div>
    </p>

@stop