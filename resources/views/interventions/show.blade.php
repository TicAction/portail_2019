@extends('layouts.app')
@section('content')
<p>
<div class="card">
    <div class="card-header text-white bg-primary">
        <h5>Observation pour {{$intervention->student->full_name}}</h5>
    </div>
    <div class="card-body">
        <h5> <strong>{{$intervention->intervention_date->format('d-m-Y')}}   {{$intervention->intervention_period}}</strong></h5>
        {!! $intervention->intervention_content !!}
    </div>
</div>

</p>
<form action="{{route('intervention_delete',$intervention->id)}}" method="POST">
    @method('DELETE') @csrf
    <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Êtes-vous certain ?')">Effacer cette intervention</button>
</form>

@stop