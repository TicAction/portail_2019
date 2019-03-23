<div class="card">
    <div class="card-header text-white bg-primary">
        <h5>Mes élèves</h5>
    </div>

    <div class="card-body">
        <ul class="list-unstyled">
            @foreach($students as $student)

            <li class="d-flex justify-content-between align-items-center">
                <a href="{{route('student_show',$student->id)}}">{{$student->firstname}} {{$student->lastname}}</a>

                <span class="badge badge-primary badge-pill">{{$student->behaviors->count()}}</span>

            </li>
            @endforeach
    </div>
</div>


