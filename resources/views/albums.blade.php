@extends("template")
            
@section("content")
    {{-- <div class="tPbarreHaut">
        <h2>Trier par </h2>
        <div class="trier">
            <label class="" for="scales">Date de création:</label>
            <input type="checkbox" id="scales" name="scales" checked />
        </div>
        <div class="trier">
            <label for="horns">Titre:</label>
            <input type="checkbox" id="horns" name="horns" />
        </div>
    </div> --}}

    <div class="ensembleAlbums">
        <a href="album/create"><div class="boutonaddalbum"><span class="croi"><i class='bx bxs-layer-plus' ></i></span></div></a>
        @foreach($albums as $a)
        <div class="album">  
            <a href="/album/{{$a->id }}">
                {{-- <img class ="img-album" src="https://www.foot01.com/img/images/650x600/2023/Dec/04/al-hilal-n-a-pas-besoin-de-neymar-son-coach-s-en-vante-neymar-160-368806.jpg" style="width: 100%" style="height: 100%" alt=""> --}}
                <img class ="img-album" src="{{optional($photos->where('album_id', $a->id)->first())->url ?? "https://www.snapon.co.za/images/thumbs/default-image_550.png"}}" style="width: 100%" style="height: 100%" alt="">
                <h1 class="p-album">{{$a->titre }}</h1>
            </a>
           
        </div> 
        @endforeach
    </div>
    
@endsection