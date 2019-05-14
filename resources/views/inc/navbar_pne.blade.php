<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="{{route('ortho')}}">GESTION DES COMPORTEMENTS PNE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            {{--<li>--}}
                {{--<a class="nav-link" href="{{route('admin.index')}}">Accueil <i class="fa fa-bug"></i><span class="sr-only">(current)</span></a>--}}
            {{--</li>--}}

            {{--<li>--}}
                {{--<a class="nav-link " href="{{route('admin.pi')}}">Rencontre PI <span class="sr-only">(current)</span></a>--}}
            {{--</li>--}}
            <li>
                <a class="nav-link " href="#">Littératie <span class="sr-only">(current)</span></a>
            </li>

            {{--<li>--}}
                {{--<a class="nav-link " href="{{route('admin.index')}}">Section de la direction<span class="sr-only">(current)</span></a>--}}
            {{--</li>--}}

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Enseignants(es)
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    {{--@foreach($users as $user)--}}
                        {{--@if($user->role == 'Enseignant' and $user->students->count())--}}

                            {{--<a class="dropdown-item" href="{{route('admin.classroom',$user->id)}}">{{$user->name}}</a>--}}
                        {{--@endif--}}
                    {{--@endforeach--}}
                </div>
            </li>

        </ul>
        <ul  class="nav navbar-nav float-md-right">
            <li>
                <a class="nav-link navbar-text pull-right" href="{{route('logout')}}">Déconnexion</a>
            </li>

        </ul>

    </div>
</nav>
