<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="{{route('home')}}">GESTION DES COMPORTEMENTS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li>
          <a class="nav-link" href="{{route('home')}}">Accueil <i class="fa fa-bug"></i><span class="sr-only">(current)</span></a>
        </li>
        <li>
                <a class="nav-link" href="{{route('student_index')}}">Mes élèves <span class="sr-only">(current)</span></a>
         </li>

         <li>
                <a class="nav-link" href="{{route('my_behaviors')}}">Tous les comportements <span class="sr-only">(current)</span></a>
         </li>

         <li>
                <a class="nav-link " href="{{route('pi_index')}}">Rencontre PI <span class="sr-only">(current)</span></a>
         </li>
          <li>
                <a class="nav-link " href="#">Littératie <span class="sr-only">(current)</span></a>
         </li>

         <li>
                <a class="nav-link " href="{{route('intervention_index')}}">Observations en classe <span class="sr-only">(current)</span></a>
         </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Enseignants(es)
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach($users as $user)
                    @if($user->role == 'Enseignant' and $user->students->count())

              <a class="dropdown-item" href="{{route('student_classroom',$user->id)}}">{{$user->name}}</a>
                    @endif
              @endforeach
            </div>
          </li>

      </ul>
      <ul  class="nav navbar-nav float-md-right">
        <li>
          <a class="nav-link navbar-text pull-right" href="{{route('logout')}}">Déconnexion</a>
        </li>
          <li>

              <a class="nav-link navbar-text pull-right" href="{{route('logout')}}">{{Auth::user()->name}}</a>
          </li>
      </ul>

    </div>
  </nav>
