
    <p>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5>Enregistrer un nouvel élève</h5>
        </div>
        <div class="card-body">
            <form action="{{route('student_store')}}" method='Post'>
                @csrf
                <div class="form-group">
                    <label for="firstname">Prénom de l'enfant</label>
                    <input type="text" name="firstname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="lastname">Nom de famille</label>
                    <input type="text" name="lastname" class="form-control">
                </div>


                <button type="submit" class="btn btn-primary">Soumettre</button>
            </form>
        </div>
    </div>

    </p>

