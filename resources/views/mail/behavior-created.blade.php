@component('mail::message')
Un nouveau comportement a été enregistré pour votre classe
{{--@foreach($behavior->students as $student)--}}
Comportement attribué par : {{$behavior->user->name}}

Dans la classe de
@foreach($behavior->students as $student)
@foreach($student->users as $user)
        {{$user->name}}
    <br>
    @endforeach
{{$student->firstname}} {{$student->lastname}}
@endforeach

    {{--@endforeach--}}


{!!  $behavior_content!!}
<br>
@if($behavior->respect == '1')
    <strong>Manque de respect</strong>
@endif
<br>
@foreach($behavior->observations as $observation)

        {{$observation->observation}}
    @endforeach

Bonne journée,<br>
{{ config('app.name') }}
@endcomponent
