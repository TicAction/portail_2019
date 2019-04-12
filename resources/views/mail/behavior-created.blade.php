@component('mail::message')
Un nouveau comportement a été enregistré pour votre classe
@foreach($behavior->students as $student)
    @foreach($student->users as $user)
Comportement attribué par : {{$user->name}}
    @endforeach
@endforeach
<br>
    <strong>Manque de respect</strong>
{{--@endif--}}
<br>
@foreach($behavior->observations as $observation)

        {{$observation->observation}}
    @endforeach

Bonne journée,<br>
{{ config('app.name') }}
@endcomponent
