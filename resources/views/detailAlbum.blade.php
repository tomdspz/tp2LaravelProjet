@extends("template")
            
@section("content")
    <center>    
        <h1>{{$album->titre }}</h1> 
        <p>Album créé le {{$album->creation}}</p>
    </center>

    <div class="ensemblePhotos">
        <a href="/photo/create?album={{$album->id}}"><div class="boutonaddalbum"><span class="croi"><i class='bx bxs-layer-plus' ></i></span></div></a>
        @foreach($photos as $img)
            <div>
                <img src="{{asset($img->url) }}" class="smallImage">
                @if($album->user_id == Auth::id())
                    <form action="{{ route('photo.destroy', $img->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                @endif
            </div>
            <div class="overlay">
                <img src="" class="largeImage">
            </div>
        @endforeach
    </div>
    <script>
        let smallImages = document.querySelectorAll('.smallImage');
        let overlay = document.querySelector('.overlay');
        let largeImage = document.querySelector('.largeImage');

        smallImages.forEach(function(image) {
            image.addEventListener('click', function() {
            largeImage.src = image.src;
            overlay.style.display = 'flex';
            });
        });

        overlay.addEventListener('click', function() {
            overlay.style.display = 'none';
        });
    </script>
@endsection