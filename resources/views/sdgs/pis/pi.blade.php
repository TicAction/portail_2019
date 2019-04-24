@extends('layouts.director')
@section('content')
    <p>
        <div class="card">
            <div class="card-header text-white bg-primary">
                <h5>Liste des plans d'interventions</h5>

            </div>

            <div class="card-body">
                <div class="text-right">
    <p>
        {{--<a href="{{route('pi_create')}}"> <button class="btn btn-primary btn-sm">Création d'une fiche PI</button></a>--}}
    </p>

    </div>
    <table class="table table-striped table-sm">
        <tr>
            <th>Modifier le plan</th>
            <th>Date</th>
            <th>Besoins</th>
            <th></th>
            <th></th>

        </tr>
        @foreach($pis as $pi)
            <tr>
                <td><a href="{{route('pi_edit',$pi->id)}}">{{$pi->student->fullname}}</a></td>
                <td>{{$pi->pi_date->format('d-m-Y')}}</td>
                <div class="truncate">
                    <td>{!! $pi->pi_capacity !!}</td>
                </div>

                <td>
                    <form action="{{route('pi_delete',$pi->id)}}" method="POST">
                        @method('DELETE') @csrf
                        <button class="btn btn-danger btn-sm" type="submit">Effacer</button>
                    </form>
                </td>
                <td>
                    <a href="{{route('pi_pdf',$pi->id)}}"><button class="btn btn-primary btn-sm">Imprimer</button></a>

                </td>
            </tr>
        @endforeach
    </table>
    </div>

    </div>
    </p>

@stop