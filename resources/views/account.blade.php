@extends("template")
            
@section("content")
    {{-- <h1>
        Account
    </h1> --}}
    @auth
        <div class="hautAcceuil">
            <div class="hautAcceuil_1">
                <h1> Bonjour {{Auth::user()->name}}</h1>
                <a href="{{route("logout")}}" onclick="document.getElementById('logout').submit(); return false;">Se déconnecter</a>
            </div>
            <div class="hautAcceuil_2">
                <h2>Bienvenu dans votre tableau de bord</h2>
            </div>
        </div>
        {{-- <form id="logout" action="{{route("logout")}}" method="post">
            @csrf
        </form> --}}
    @endauth

    <div class="voirPhoto">
        <a href="#">Mes photos</a>
    </div>
    <div class="ajoutPhoto">   
        <a href="/photo/create">J'ajoute une photo</a>
    </div> 

    <br>
    
    <div class="voirAlbum">
        <a href="#">Mes albums</a>
    </div>
    <div class="ajoutAlbum">
        <a href="#">Je créer un album</a>
    </div>



@endsection