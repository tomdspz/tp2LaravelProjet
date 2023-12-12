@extends("template")
            
@section("content")

<form action="/photo" method="POST">
    @csrf
    <label for="titre">Titre: </label>
    <input type="text" name="titre" id="titre"/>

    <br>

    <label for="url">URL: </label>
    <input type="text" name="url" id="url"/>

    <input type="submit" value="Insérer"/>
</form>

@endsection