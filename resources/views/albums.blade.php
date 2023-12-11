@extends("template")
            
@section("content")
    <h1>
        Albums
    </h1>
    <div class="ensembleAlbums">
        @foreach($albums as $a)
        <div class="album">   
            <img src="https://www.foot01.com/img/images/650x600/2023/Dec/04/al-hilal-n-a-pas-besoin-de-neymar-son-coach-s-en-vante-neymar-160-368806.jpg" alt="">
            <p>{{$a->titre }}</p>

                <div class="hover-album">
                    <a href="/album/{{$a->id }}">Acceder à l'album</a>
                    <p>créé le {{$a->creation}}</p>
                </div>

        </div> 
        @endforeach
    </div>
    
@endsection