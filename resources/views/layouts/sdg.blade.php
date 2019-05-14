<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


{{ Html::script('ckeditor/ckeditor.js') }}
{{ Html::script('ckeditor/lang/fr.js') }}
<!-- Scripts -->




    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/my.css') }}" rel="stylesheet">
    <link href="{{ asset('select2/dist/css/select2.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/main.js') }}" ></script>
    <script src="{{ asset('select2/dist/js/select2.min.js') }}" ></script>
    <script src="{{ asset('js/select.js') }}" ></script>


</head>

<body>

<div id="app">
    @include('inc.navbar_ortho')

    <div class="container">
        @include('messages.message')
        <div class="row">

            <div class="col-md-12">

                @yield('content')

            </div>
        </div>

    </div>

</div>

<script>

    var allEditors = document.querySelectorAll('#editor');
    for (var i = 0; i < allEditors.length; ++i) {
        CKEDITOR.replace(allEditors[i],{
            language: 'fr',
        });


    }
    $(document).ready(function() {
        $('.basic-multiple').select2({
            placeholder : "Faire un choix",
        });
    });
</script>
</body>

</html>
