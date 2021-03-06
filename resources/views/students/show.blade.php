@extends('layouts.app')
@section('sidebar')

    <p>
    <div class="card">
        <div class="card-header text-white bg-primary ">
            <h5>Prochain plan</h5>
        </div>

        <div class="card-body">
            <ul class="list-unstyled">


                @foreach($student->pis as $pi)


                    @if($pi->pi_date->format('d-m-Y') >= \Carbon\Carbon::now()->format('d-m-Y'))
                    <li class="bg-success"><a href="{{route('pi_edit',$pi->id)}}"class="text-white">{{$pi->pi_date->format("d-m-Y")}}</a></li>
                        @else
                        <li class="bg-danger"><a href="{{route('pi_edit',$pi->id)}}" class="text-white">{{$pi->pi_date->format("d-m-Y")}}</a></li>
                    @endif
                    @endforeach
            </ul>
        </div>
    </div>
    </p>

@endsection
@section('content')

    <p>
    <div class="card">
        <div class="card-header text-white bg-primary mb-3">
            <div class="row">
                <div class="col-md-6">
                    <h5>Comportement de {{$student->fullname}}</h5>
                </div>
                <div class="col-md-6 text-right" >

                    <a href="{{route('export_pdf',$student->id)}}" class="text-white"><h5>Créer un ficher PDF</h5></a>

                </div>
            </div>

        </div>
        @foreach($student->behaviors->sortByDesc('behavior_date') as $behavior)
            <div class="card-body">

                <strong>{{$behavior->behavior_date->format('d-m-Y')}}  --- {{$behavior->user['name']}}</strong>
                <br>

                {!! $behavior->behavior_content !!}
                @if($behavior->respect == 1)
                    <br>
                    <strong>Avec manque de respect</strong>
                @endif
                @foreach($behavior->observations as $observation)
                    <br>
                    <span style="background-color:{{$observation->severity->gravity_level}};">{{$observation->observation}}</span>

                @endforeach
                <br>
                @if($behavior->respect == '1')
                    <strong>
                        Manque de respect
                    </strong>
                @endif
                <div class="text-right">
                    <a href="{{route('behavior.edit',$behavior->id)}}"><button class="bth btn-primary btn-sm">Modifier</button></a>
                </div>

            </div>

        @endforeach

        </div>


    </p>
    <p>
    <div class="card">
        <div class="card-header text-white bg-primary">
            <h5>Intervention classe pour {{$student->full_name}}</h5>
        </div>
        <div class="card-body">
            @foreach($student->interventions->sortByDesc('intervention_date') as $intervention)
             <strong>{{$intervention->intervention_date->format('d-m-Y')}} --- {{$intervention->intervention_period}}</strong>
            {!! $intervention->intervention_content !!}

                <div class="text-right">
                    <a href="{{route('intervention_edit',$intervention->id)}}"><button class="bth btn-primary btn-sm">Modifier</button></a>
                </div>
            @endforeach
        </div>



    </div>
            </div>
    </p>
@endsection
