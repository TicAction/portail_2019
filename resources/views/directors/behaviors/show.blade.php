@extends('layouts.director')

@section('content')
    <p>
        <div class="card">
            <div class="card-header text-white bg-primary">

                Comportement de {{$student->fullname}}

            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Attribué par</th>
                        <th>Date</th>
                        <th>Comportement</th>
                        </tr>

                    @foreach($student->behaviors as $behavior)
                    <tr>
                        <td width="15%">{{$behavior->user['name']}}</td>
                        <td width="15%">{{$behavior->behavior_date->format('d/m/Y')}}</td>
                        <td width="70%">{{$behavior->behavior_content}}$</td>
                    </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </p>
@stop