@extends("template")
            
@section("content")
    <h1>
        Albums
    </h1>
    <div class="ensembleAlbums">
        @foreach($albums as $a)
        <div class="album">   
            <a href="/album/{{$a->id }}">{{$a->titre }}</a>
            <br>
            <p>créé le {{$a->creation}}</p>
        </div> 
        @endforeach
    </div>
    
@endsection