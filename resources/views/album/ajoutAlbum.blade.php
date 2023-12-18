@extends("template")
            
@section("content")
<form class="login" action="/album" method="POST">
    @csrf
    <label for="titre">Titre de l'album: </label>
    <input type="text" name="titre" id="titre"/>

    <input type="submit" value="Créer"/>
</form>
@endsection