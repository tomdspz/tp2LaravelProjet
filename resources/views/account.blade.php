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
                <h3>Voici votre tableau de bord</h3>
            </div>
        </div>
        {{-- <form id="logout" action="{{route("logout")}}" method="post">
            @csrf
        </form> --}}
    @endauth

    {{-- <div class="voirPhoto">
        <a href="#">Mes photos</a>
    </div>
    <div class="ajoutPhoto">   
        <a href="/photo/create">J'ajoute une photo</a>
    </div> 

    <br> --}}
    
    <div class="voirAlbum">
       <h2>Mes Albums</h2>

    <div class="ajoutAlbum">



    
    <div class="ensembleAlbums">
        <a href="#"><div class="boutonaddalbum"><span class="croi"><i class='bx bxs-layer-plus' ></i></span></div></a>
        

        <div class="album">  
            
            <a href="/album/">
                <img class ="img-album" src="https://www.foot01.com/img/images/650x600/2023/Dec/04/al-hilal-n-a-pas-besoin-de-neymar-son-coach-s-en-vante-neymar-160-368806.jpg" alt="">
                <h1 class="p-album"></h1>
            </a>
            <div class="hover-album">
                Acceder à l'album
                <p class="p2-album">créé le </p>
            </div>

        </div> 
        <div class="album">  
            
            <a href="/album/">
                <img class ="img-album" src="https://www.foot01.com/img/images/650x600/2023/Dec/04/al-hilal-n-a-pas-besoin-de-neymar-son-coach-s-en-vante-neymar-160-368806.jpg" alt="">
                <h1 class="p-album"></h1>
            </a>
            <div class="hover-album">
                Acceder à l'album
                <p class="p2-album">créé le </p>
            </div>

        </div> 
        <div class="album">  
            
            <a href="/album/">
                <img class ="img-album" src="https://www.foot01.com/img/images/650x600/2023/Dec/04/al-hilal-n-a-pas-besoin-de-neymar-son-coach-s-en-vante-neymar-160-368806.jpg" alt="">
                <h1 class="p-album"></h1>
            </a>
            <div class="hover-album">
                Acceder à l'album
                <p class="p2-album">créé le </p>
            </div>

        </div> 
        <div class="album">  
            
            <a href="/album/">
                <img class ="img-album" src="https://www.foot01.com/img/images/650x600/2023/Dec/04/al-hilal-n-a-pas-besoin-de-neymar-son-coach-s-en-vante-neymar-160-368806.jpg" alt="">
                <h1 class="p-album"></h1>
            </a>
            <div class="hover-album">
                Acceder à l'album
                <p class="p2-album">créé le </p>
            </div>

        </div> 
       
    </div>
    </div>
    </div>



@endsection