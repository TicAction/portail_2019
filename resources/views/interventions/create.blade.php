@extends('layouts.app')
@section('sidebar')
    @include('students.create')
@endsection
@section('content')
    <p>

    <div class="card">
        <div class="card-header bg-primary text-white mb-3">
            <h5>Créer une fiche d'observation</h5>
        </div>
        <div class="card-body">

            <form action="{{route('intervention_store')}}" class="form-honrizontal" method="post">
                @csrf
                <div class="form-group">
                    <label for="student">Choisir un élève</label>
                   <select class="form-control" name="student" >
                       @foreach($student as $key=>$stu)
                       <option value="{{$key}}">{{$stu}}</option>
                           @endforeach
                   </select>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="intervention_date">Date de l'observation</label>
                            <input type="date" name="intervention_date" class="form-control" value="{{date('Y-m-d')}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="intervention_date">Date de l'observation</label>
                            <select name="intervention_period" class="form-control">
                                <option value="Aucune importance">Aucune importance</option>
                                <option value="Première pédiode">Première pédiode</option>
                                <option value="Deuxième pédiode">Deuxième pédiode</option>
                                <option value="Récréation">Récréation</option>
                                <option value="Troisième pédiode">Troisième pédiode</option>
                                <option value="Dîner">Dîner</option>
                                <option value="Quatrième pédiode">Quatrième pédiode</option>
                                <option value="Cinquième pédiode">Cinquième pédiode</option>
                                <option value="SDG">SDG</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="intervention_content">Date de l'observation</label>
                    <textarea name="intervention_content" class="form-control " id="editor"></textarea>
                </div>
                <button class="btn btn-primary">Soumettre</button>
            </form>
        </div>

    </div>
    </p>
@endsection
