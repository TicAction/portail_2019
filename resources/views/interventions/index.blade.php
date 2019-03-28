@extends('layouts.app')

@section('content')
   <p>
    <div class="card">
        <div class="card-header bg-primary text-white mb-3">
            <h5>Liste des observations</h5>
        </div>
        <div class="card-body">

       <div class="text-right">
           <p>
       <a href="{{route('intervention_create')}}"><button class="btn btn-primary">Ajouter une intervention</button></a>

         </p>

       </div>
            @foreach($interventions as $intervention)
            <div class="row">
                <div class="col-md-3">
                    {{$intervention->student->full_name}}
                    <br>
                    {{$intervention->intervention_date->format('d-m-Y')}}
                    <br>
                    {{$intervention->intervention_period}}
                </div>
                <div class="col-md-6">

                    {!! $intervention->intervention_content !!}

                </div>
                <div class="col-md-3">
                    <a href="{{route('intervention_edit',$intervention->id)}}"><button class="btn btn-success btn-sm">Modifier</button></a>
                    <a href="{{route('intervention_show',$intervention->id)}}"<button class="btn btn-primary btn-sm">Voir</button></a>
                </div>
            </div>
                <hr>
        @endforeach
         </div>

    </div>
    </p>
@endsection
