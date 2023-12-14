@extends("templatePhotos")
            
@section("content")
    <p>{{$album->titre }}</p>

    <div class="ensemblePhotos">
        <a href="/photo/create?{{$album->id }}"><div style="background-color: grey">+</div></a>
        @foreach($photos as $img)
            <div><img src="{{$img->url }}" /></div>
        @endforeach
    </div>
@endsection