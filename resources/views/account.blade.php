@extends("template")
            
@section("content")
    <h1>
        Account
    </h1>

    <div>
        <h2>Ajout de photos</h2>
        <form method="post" action="/account" enctype="multipart/form-data">
            @csrf
            <div class="champ">
                <label for="titre">Titre de la photo: </label>
                <input type="text" id="titre">
            </div>
            <div class="champ">
                <label for="url">URL de la photo: </label>
                <input type="text" id="url">
            </div>
            <div class="champSubmit">
                <input type="submit">
            </div>
        </form>
    </div>


@endsection