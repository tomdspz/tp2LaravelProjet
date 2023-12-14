@extends("template")
            
@section("content")
    <div class="tPbarreHaut">
        <h2>Trier par </h2>
        <input type="checkbox" id="scales" name="scales" checked />
        <label for="scales">Date de création</label>
    
        <input type="checkbox" id="horns" name="horns" />
        <label for="horns">Titre</label>
    </div>

    <div class="ensembleAlbums">
        <a href="#"><div class="boutonaddalbum"><span class="croi">+</span></div></a>
        @foreach($albums as $a)
        <div class="album">   
            <img class ="img-album" src="https://www.foot01.com/img/images/650x600/2023/Dec/04/al-hilal-n-a-pas-besoin-de-neymar-son-coach-s-en-vante-neymar-160-368806.jpg" alt="">
            <h1 class="p-album">{{$a->titre }}</h1>

                <div class="hover-album">
                    <a href="/album/{{$a->id }}">Acceder à l'album</a>
                    <p class="p2-album">créé le {{$a->creation}}</p>
                </div>

        </div> 
        @endforeach
    </div>
    
@endsection