@extends('layouts.app')
@section('content')

    <p>

    <div class="card">
        <div class="card-header text-white bg-primary mb-3">

            <h5>Comportements des 30 derniers jours</h5>
        </div>


    @foreach($behaviors->sortByDesc("behavior_date") as $behavior)
         @foreach($behavior->students as $student)
             @foreach(Auth::user()->students as $stu)
                 @if($stu->id == $student->id)
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
                 @if($behavior->respect === '1')
                     <strong>
                         Manque de respect
                     </strong>
                 @endif
                @foreach($behavior->observations as $observation)
                        <li>{!! $observation->observation !!}</li>
                @endforeach
                </ul>
            </div>
                <div class="offset-10">
                    <div class="row">

                        <a href="{{route('behavior.edit',$behavior->id)}}">
                            <button class="btn btn-primary btn-sm">Modifier</button>
                        </a>

                <div class="offset-1">
                    <form action="{{route('behavior.delete',$behavior->id)}}" method="POST">
                        @method('DELETE') @csrf
                        <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Voulez-vous vraiment effacer cet élève ainsi que toutes \n ainsi que toutes les données le concernant ?')">Effacer</button>
                    </form>
                </div>


                    </div>
                </div>


             @endif
             @endif
         @endforeach
         @endforeach
     @endforeach
    </div>
             </p>
@endsection


