<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/my.css')}}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div class="jumbotron jumbotron-fluid" style= 'margin-bottom: 55px;'>
    <div class="container">
        <div class="text-center">
            <h1 class="display-4 text-white">École Plein-Soleil</h1>

            <p class="lead text-white">Gestion des comportements <br><small>Site des enseignants</small></p>
            <p>
                <a href="{{route('register')}}"><button class="btn btn-success">S'enregistrer</button></a>
            </p>
        </div>

    </div>
</div>
    <div id="app">


        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    @yield('content')

                </div>
            </div>

        </div>
</body>

</html>
