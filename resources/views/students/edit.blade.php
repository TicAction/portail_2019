@extends('layouts.app')

@section('content')

    <p>
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </div>
    @endif
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5>Modifier un nouvel élève</h5>
        </div>
        <div class="card-body">
            <form action="{{route('student_update',$student->id)}}" method='Post'>
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="firstname">Prénom de l'enfant</label>
                    <input type="text" name="firstname"  value="{{$student->firstname}}" class="form-control {{$errors->has('firstname') ? 'is-invalid':''}}">
                </div>
                <div class="form-group">
                    <label for="lastname">Nom de famille</label>
                    <input type="text" name="lastname" value="{{$student->lastname}}" class="form-control {{$errors->has('lastname') ? 'is-invalid' : ''}}">
                </div>





                <button type="submit" class="btn btn-primary">Soumettre</button>
            </form>
        </div>
    </div>

    </p>


@endsection
