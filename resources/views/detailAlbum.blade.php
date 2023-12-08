@extends("template")
            
@section("content")
    <p>{{$album->titre }}</p>

    <div class="ensemblePhotos">
        @foreach($photos as $img)
            <div><img src="{{$img->url }}" /></div>
        @endforeach
    </div>
@endsection