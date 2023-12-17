@extends("template")
            
@section("content")
    <div class="grandeclass">
            
    
        <div class="tPbarreHaut">
            <h2>Tags:   </h2>
            @foreach($tags as $tgs)
                <a  href="#" class="tPbarreHaut_tag">{{$tgs->nom }}</a>
            @endforeach
        </div>

        <div class="tPbarreHaut">
            <div class="tPbarreHaut_recherche">
            <input type="text" id="name" name="name" required minlength="4" maxlength="8" size="20" /> <a href=""><i id ="recherche"  class='bx bx-search' ></i></a>
            </div>
        </div>  
    </div>

    <center>    
        <h1>{{$album->titre }}</h1> 
        <p>Album créé le {{$album->creation}}</p>
    </center>

    <div class="ensemblePhotos">
        <a href="/photo/create?album={{$album->id}}"><div class="boutonaddalbum"><span class="croi"><i class='bx bxs-layer-plus' ></i></span></div></a>
        @foreach($photos as $img)
            <div>
                <img src="{{$img->url }}" />
            </div>
        @endforeach
    </div>
@endsection