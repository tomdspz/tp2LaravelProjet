@extends("template")
            
@section("content")
    {{-- <h1>
        Account
    </h1> --}}
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
        <h2>Créer un tag</h2>
        <form class="ajoutTag" action="" method="POST">
            @csrf
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
                        <img class ="img-album" src="https://www.foot01.com/img/images/650x600/2023/Dec/04/al-hilal-n-a-pas-besoin-de-neymar-son-coach-s-en-vante-neymar-160-368806.jpg" alt="">
                        <h1 class="p-album">{{$ua->titre }}</h1>
                    </a>
                   
                </div>
                @endforeach
            </div> 
        </div>
    </div>

    @endauth



@endsection