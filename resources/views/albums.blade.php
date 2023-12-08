@extends("template")
            
@section("content")
    <h1>
        Albums
    </h1>
    @foreach($albums as $a)
        {{$a->titre}}
        <br>
        <p>créé le {{$a->creation}}</p>
    @endforeach
@endsection