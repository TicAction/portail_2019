<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <title>{{$pi->student->fullname}}</title>

</head>
<body>
<div class="alert alert-primary">
    <h4>{{$pi->student->fullname}}</h4>
    <small>PI du  {{$pi->pi_date->format('d-m-Y')}}</small>
</div>



        <h4>Capacité de travail</h4>

        {!! $pi->pi_capacity !!}

        <h4>Besoins de l'enfant</h4>


        <h5>Apprentissages</h5>
        {!! $pi->pi_need_school !!}

        <h5>Comportements</h5>
        {!! $pi->pi_need_behavior !!}

        <h5>Autres</h5>
        {!! $pi->pi_need_other !!}





    <h4>Buts à atteindre </h4>

        <br>
        {!! $pi->pi_goal !!}

        <h4>Moyens d'y arriver</h4>

        {!! $pi->pi_way !!}

</body>
</html>