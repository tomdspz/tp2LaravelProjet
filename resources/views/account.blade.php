@extends("template")
            
@section("content")
    @auth
        <div class="hautAcceuil">
            <div class="hautAcceuil_1">
                <h1> Bonjour {{Auth::user()->name}}</h1>
                <a href="{{route("logout")}}"
                onclick="document.getElementById('logout').submit(); return false;">Déconnexion</a>
                <form id="logout" action="{{route("logout")}}" method="post">
                    @csrf
                </form>
            </div>

            <div class="hautAcceuil_2">
                <h3>Voici votre tableau de bord</h3>
            </div>
        </div>

        <div>
            <form class="login3" class="ajoutTag" action="/tags" method="POST">
                @csrf   
                <h2>Créer un tag</h2>
                <label for="nom">Nom du tag: </label>
                <input type="text" name="nom"/>
            
                <input type="submit" value="Créer"/>
            </form>
        </div>

        <div class="voirAlbum">
            <h2>Mes Albums</h2>
            <div class="ajoutAlbum">
                <div class="ensembleAlbums">
                    <a href="/album/create"><div class="boutonaddalbum"><span class="croi"><i class='bx bxs-layer-plus' ></i></span></div></a>
                    @foreach($useralbums as $ua)
                    <div class="album">  
                        <a href="/album/{{$ua->id }}">
                            <img class ="img-album" src="{{optional($photos->where('album_id', $ua->id)->first())->url ?? "https://www.snapon.co.za/images/thumbs/default-image_550.png"}}" alt="">
                            <h1 class="p-album">{{$ua->titre }}</h1>
                        </a>
                    </div>
                    @endforeach
                </div> 
            </div>
        </div>
    @endauth
@endsection