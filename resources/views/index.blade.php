<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Photothèque</title>
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="asset('ressources/css/style.css');">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="/"><i class='bx bx-image' ></i></a></li>
                <li><a href="/albums"><i class='bx bx-images' ></i></a></li>
                <li class="menu"><input type="text" id="name" name="name" required minlength="4" maxlength="8" size="20" /> <a href=""><i class='bx bx-search' ></i></a></li>
                <li><a href="/account"><i class='bx bxs-face'></i></a></li>
            </ul>
        </nav>

{{-- <p>{{$bdd->name }}</p> --}}

@foreach($bdd as $f)
    {{$f->name}}
    {{$f->email}}
@endforeach

<div id="exercice2">
    @foreach($images as $img)
        <div><img src="{{$img->url }}" /></div>
    @endforeach
</div>
        {{-- <div id="exercice2">
            <div><img src="https://images.pexels.com/photos/1050558/pexels-photo-1050558.jpeg?cs=srgb&dl=pexels-steve-johnson-1050558.jpg&fm=jpg" /></div> --}}
            {{-- <div><img src="https://upload.wikimedia.org/wikipedia/commons/9/9b/Photographic_lenses_front_view.jpg" /></div>
            <div><img src="https://media.istockphoto.com/id/1187951204/photo/camera-lens-with-red-and-blue-backlight-macro-photography-lenses-horizontal-photography.jpg?s=612x612&w=0&k=20&c=CnuTkeg8vE7cvsyn7nAQB41bHZPXmEQZnZ52O7OZrtg=" /></div>
            <div><img src="https://images.unsplash.com/photo-1582994254571-52c62d96ebab?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8bGVuc3xlbnwwfHwwfHx8MA%3D%3D" /></div>
            <div><img src="https://images.pexels.com/photos/1050558/pexels-photo-1050558.jpeg?cs=srgb&dl=pexels-steve-johnson-1050558.jpg&fm=jpg" /></div>
            <div><img src="https://upload.wikimedia.org/wikipedia/commons/9/9b/Photographic_lenses_front_view.jpg" /></div>
            <div><img src="https://media.istockphoto.com/id/1187951204/photo/camera-lens-with-red-and-blue-backlight-macro-photography-lenses-horizontal-photography.jpg?s=612x612&w=0&k=20&c=CnuTkeg8vE7cvsyn7nAQB41bHZPXmEQZnZ52O7OZrtg=" /></div>
            <div><img src="https://images.unsplash.com/photo-1582994254571-52c62d96ebab?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8bGVuc3xlbnwwfHwwfHx8MA%3D%3D" /></div>
            <div><img src="https://media.istockphoto.com/id/1187951204/photo/camera-lens-with-red-and-blue-backlight-macro-photography-lenses-horizontal-photography.jpg?s=612x612&w=0&k=20&c=CnuTkeg8vE7cvsyn7nAQB41bHZPXmEQZnZ52O7OZrtg=" /></div>
            <div><img src="https://images.unsplash.com/photo-1582994254571-52c62d96ebab?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8bGVuc3xlbnwwfHwwfHx8MA%3D%3D" /></div> --}}
        </div>
    </body>
</html>





