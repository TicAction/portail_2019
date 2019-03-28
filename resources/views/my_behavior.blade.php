@extends('layouts.app')
@section('content')

            <p>
            <div class="card">
                <div class="card-header text-white bg-primary mb-3">
                    <h5>Liste des comportements que j'ai attribués</h5>
                </div>
                    <div class="card-body">
                <table class="table table-striped table-sm">

                    <tr>
                        <th>Date</th>
                        <th>Nom</th>
                        <th>Comportement</th>

                    </tr>
                    @foreach($behaviors->sortByDesc('behavior_date') as $behavior)
                        @foreach($behavior->students as $student)
                    <tr>
                        <td width="25%"> <strong>{{$behavior->behavior_date->format('d-m-Y')}}</strong></td>

                        <td width="25%">{{$student->firstname}} {{$student->lastname}}</td>

                        <td width="50%">
                            <div class="truncate" >
                          <p>
                               {!!  $behavior->behavior_content!!}
                @if($behavior->respect == 'on')
                    <strong>
                        Manque de respect
                    </strong>
                @endif
                         <br>

                         @foreach($behavior->observations as $observation)
                             <br>
                                <ul> <li>
                                    {{$observation->observation}}
                                </li></ul>
                         @endforeach
                <a href="{{route('behavior_edit',$behavior->id)}}">
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
            </p>


@endsection
