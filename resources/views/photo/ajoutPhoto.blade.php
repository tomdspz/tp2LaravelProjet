@extends("template")
            
@section("content")

<form class="login" action="/photo?album={{$_GET['album']}}" method="POST">
    @csrf
    <label for="titre">Titre: </label>
    <input type="text" name="titre" id="titre"/>

    <br>

    {{-- <label for="url">URL: </label>
    <input type="text" name="url" id="url"/> --}}

    <input type="file" name="image" />

    <select class ="select" name="tags">
        <option value="-1">Tags</option>
        @foreach($tags as $t)
            <option value="{{$t->nom}}">{{$t->nom}}</option>
        @endforeach
    </select>

    <input type="submit" value="Insérer"/>
</form>

{{-- @foreach($tags as $t)
    <p>{{$t->nom }}</p>
@endforeach --}}

@endsection