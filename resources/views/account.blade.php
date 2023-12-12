@extends("template")
            
@section("content")
    {{-- <h1>
        Account
    </h1> --}}
    @auth
        Bonjour {{Auth::user()->name}}
        <a href="{{route("logout")}}"
        onclick="document.getElementById('logout').submit(); return false;">Logout</a>
        <form id="logout" action="{{route("logout")}}" method="post">
            @csrf
        </form>
        {{-- <a href="{{route("login")}}">Route accessible que si on est connecté</a> --}}
    @endauth
    
    {{-- <div>
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
    </div> --}}
    <div class="ajoutPhoto">   
        <a href="/photo/create">J'ajoute une photo</a>
    </div> 


@endsection