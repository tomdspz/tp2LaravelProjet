@extends("templatePhotos")
            
@section("content")

    <center>    <h1>{{$album->titre }}</h1></center>

    <div class="ensemblePhotos">
    <a href="#"><div class="boutonaddalbum"><span class="croi"><i class='bx bxs-layer-plus' ></i></span></div></a>
        @foreach($photos as $img)
            <div><img src="{{$img->url }}" /></div>
        @endforeach
    </div>
@endsection