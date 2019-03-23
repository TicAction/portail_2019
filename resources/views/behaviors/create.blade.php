@extends('layouts.app')
@section('content')

    <p>
    <div class="card">
        <div class="card-header bg-primary text-white">
            Ajouter un comportement pour {{$student->fullname}}
        </div>
        <div class="card-body">
            <form action="{{route('behavior_store')}}" method="POST">
                @csrf

                <div class="row">

                        {!! Form::hidden('students',$student->id)!!}

                    <div class="col-md-6">
                        <label for="behavior_date">Date du comportement</label>
                        <input type="date" name="behavior_date" value="{{date('Y-m-d')}}" class="form-control">
                    </div>
                </div>

                <label for="behavior_content">Comportement</label>

                {!! Form::textarea('behavior_content', null, ['class' => 'form-control','id'=>'editor']) !!}
                <br>
                <label for="respect">Manque de respect</label>
                <input type="checkbox" name="respect" class="form-group" value="on" >
                <br>


                <label for="jaune">Comportement jaune</label>
                <select class="basic-multiple form-control" name="observation[]" multiple="multiple">
                    <option value="0">Faire un choix</option>
                @foreach($observations as $observation)
                    @if($observation->severity_id == 1)
                        <option value="{{$observation->id}}">{{$observation->observation}}</option>
                     @endif
                @endforeach
                </select>

                <br>

                <label for="jaune">Comportement orange</label>
                <select class="basic-multiple form-control" name="observation[]" multiple="multiple" >
                    <option value="0">Faire un choix</option>
                    @foreach($observations as $observation)
                        @if($observation->severity_id == 2)
                            <option value="{{$observation->id}}">{{$observation->observation}}</option>
                        @endif
                    @endforeach
                </select>

                <br>

                <label for="jaune">Comportement rouge</label>
                <select class="basic-multiple form-control" name="observation[]" multiple="multiple">

                    @foreach($observations as $observation)
                        @if($observation->severity_id == 3)

                            <option value="{{$observation->id}}">{{$observation->observation}}</option>
                        @endif
                    @endforeach
                </select>

                <br>
                <br>
            <p>
        <button type="submit" class="btn btn-success">Soumettre les informations</button>
             </p>


            </form>
        </div>
    </div>
    </p>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );

        $(document).ready(function() {
            $('.basic-multiple').select2({
                placeholder : "Faire un choix",
            });


        });
    </script>

@endsection
