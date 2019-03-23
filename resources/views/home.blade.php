@extends('layouts.app')
@section('content')
    <p>


    <div class="card">
        <div class="card-header text-white bg-primary mb-3">

            <h5>Comportements des 30 derniers jours</h5>
        </div>

    @foreach($students as $student)
         @foreach($student->behaviors as $behavior)
             @if($behavior->behavior_date >= \Carbon\Carbon::now()->subMonth('1'))
             <div class="card-body">

             <strong>
                 <h4>{{$student->firstname}} {{$student->lastname}}

                     <small>
                         {{$behavior->behavior_date->format('d-m-Y')}} - - -
                            {{$behavior->user->name}}
                     </small>
                 </h4>
             </strong>
            <hr>
                 {!!  $behavior->behavior_content!!}
                 @if($behavior->respect == 'on')
                     <strong>
                         Manque de respect
                     </strong>
                 @endif
                @foreach($behavior->observations as $observation)
                        <li>{!! $observation->observation !!}</li>
                @endforeach
                </ul>
            </div>
                <div class="text-right">
                    <a href="{{route('behavior_edit',$behavior->id)}}">
                        <button class="btn btn-primary btn-sm">Modifier</button>
                    </a>

                </div>
             @endif
         @endforeach
     @endforeach
    </div>
             </p>
@endsection


