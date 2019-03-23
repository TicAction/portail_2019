@extends('layouts.app')
@section('content')

    @foreach($behaviors->sortByDesc('behavior_date') as $behavior)
        @if($behavior->count())

            <p>
            <div class="card">
                <div class="card-header text-white bg-primary mb-3">
                    {{--@foreach($behavior->student)--}}
                    <h5>Comportement de {{$behavior->student->firstname}}</h5>

                </div>
                    <div class="card-body">
                        @if($behavior->behavior_date >= \Carbon\Carbon::now()->subDays(7))
                            <strong style="color: red">{{$behavior->behavior_date->format('d-m-Y')}}</strong>
                        @else
                            <strong>{{$behavior->behavior_date->format('d-m-Y')}}</strong>
                        @endif
                        {{$behavior->behavior_content}}
                    </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{route('behavior.edit',$behavior->id)}}"><button class="btn btn-primary btn-sm">Modifier</button></a>
                        </div>
                        <div class="col-md-6">
                            <form action="{{route('behavior.destroy',$behavior->id)}}" method="POST">
                                @method('DELETE') @csrf
                                <button class="btn btn-danger btn-sm" type="submit">Effacer ce comportement</button>
                            </form>
                        </div>
                    </div>



                </div>

            </div>
            </p>
        @endif
    @endforeach

@endsection

