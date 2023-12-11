@extends("template")
            
@section("content")
    <h1>
        Albums
    </h1>
    <div class="ensembleAlbums">
        @foreach($albums as $a)
        <div class="album">   


           
            <p>{{$a->titre }}</p>

                <div>
                <a href="/album/{{$a->id }}">Acceder à l'album</a>
            <p>créé le {{$a->creation}}</p>
                </div>

        </div> 
        @endforeach
    </div>
    
@endsection