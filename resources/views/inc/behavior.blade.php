<div class="card">
    <div class="card-header text-white bg-primary mb-3" style="max-width: 20rem;">
        <h5>Dernière semaine</h5>
    </div>

    <div class="card-body">
        <ul class="list-unstyled">
            @foreach($behaves as $behavior)

            <li class="d-flex justify-content-between align-items-center">{{$behavior->student->firstname}} {{$behavior->student->lastname}}<span class="badge badge-primary badge-pill">14</span></li>

            @endforeach
    </div>
</div>
