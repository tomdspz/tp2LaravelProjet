@extends("template")
            
@section("content")

{{-- @foreach($album as $a)
    <a href="/album/{{$a->id}}">{{$a->titre}}</a>
@endforeach --}}

<form class="login" action="/album" method="POST">
    @csrf
    <label for="titre">Titre de l'album: </label>
    <input type="text" name="titre" id="titre"/>

    <input type="submit" value="Créer"/>
</form>

{{-- @foreach($tags as $t)
    <p>{{$t->nom }}</p>
@endforeach --}}

@endsection