@extends('layouts.app')

@section('content')
    <p>
    <div class="card">
        <div class="card-header bg-primary text-white mb-3">
            <h5>Modifier l'observation pour {{$intervention->student->full_name}}</h5>
        </div>
        <div class="card-body">

            <form action="{{route('intervention_update',$intervention->id)}}" class="form-honrizontal" method="post">
                @csrf
                @method('PUT')
                <input type="hidden" name="student" value="{{$intervention->student->id}}">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="intervention_date">Date de l'observation</label>
                            <input type="date" name="intervention_date" class="form-control" value="{{$intervention->intervention_date->format('Y-m-d')}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="intervention_date">Date de l'observation</label>
                            <select name="intervention_period" class="form-control">
                                <option value="{{$intervention->intervention_period}}">{{$intervention->intervention_period}}</option>
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
                    <textarea name="intervention_content" class="form-control " id="editor">{{$intervention->intervention_content}}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Soumettre les informations</button>
            </form>
        </div>

    </div>
    </p>
@endsection
