@extends('layouts.app')

@section('content')
<p>
<div class="alert alert-primary">
    <h4>{{$pi->student->fullname}}</h4>
   <small>Le {{$pi->pi_date->format('d-m-Y')}}</small>
</div>


<div class="card">
    <div class="card-header bg-transparent">
    <h4>Forces/Capacités</h4>
    </div>
    <div class="card-body">
        {!! $pi->pi_capacity !!}
    </div>
</div>
<br>
<div class="card">
    <div class="card-header bg-transparent">
        <h4>Besoins/Difficultés (apprentissages)</h4>
    </div>
    <div class="card-body">
        {!! $pi->pi_need_shool !!}
    </div>
</div>
<br>

<div class="card">
    <div class="card-header bg-transparent">
        <h4>Besoins/Difficultés (comportements)</h4>
    </div>
    <div class="card-body">
        {!! $pi->pi_need_behavior !!}
    </div>
</div>
<br>

<div class="card">
    <div class="card-header bg-transparent">
        <h4>Besoins/Difficultés (autres)</h4>
    </div>
    <div class="card-body">
        {!! $pi->pi_need_other !!}
    </div>
</div>
<br>
<div class="card">
    <div class="card-header bg-transparent">
        <h4>Moyens mis en place</h4>
    </div>
    <div class="card-body">
        {!! $pi->pi_way !!}
    </div>
</div>
<br>
<div class="card">
    <div class="card-header bg-transparent">
        <h4>Objectifs prioritaires
        </h4>
    </div>
    <div class="card-body">
        {!! $pi->pi_goal !!}
    </div>
</div>
<br>


<br>
<a href="{{route('pi_pdf',$pi->id)}}"><button class="btn btn-primary btn-sm">Imprimer</button></a>
</p>





@stop