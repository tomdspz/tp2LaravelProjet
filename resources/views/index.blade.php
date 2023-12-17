@extends("templatePhotos")
            
@section("content")
    {{-- <p>{{$bdd->name }}</p> --}}

    {{-- @foreach($bdd as $f)
    {{$f->name}}
    {{$f->email}}
    @endforeach --}}

        {{-- <h1>testzzz</h1> --}}

    <div class="ensemblePhotos">
        @foreach($images as $img)
            <div>
                <img src="{{$img->url }}" alt="Image à zoomer" class="smallImage">
            </div>
            <div class="overlay">
                <img src="" alt="Image en grand" class="largeImage">
            </div>
        @endforeach
    </div>
    <script>
        // Récupérez les éléments DOM nécessaires
        var smallImages = document.querySelectorAll('.smallImage');
        var overlay = document.querySelector('.overlay');
        var largeImage = document.querySelector('.largeImage');
    
        // Ajoutez un gestionnaire d'événement de clic à chaque image
        smallImages.forEach(function(image) {
          image.addEventListener('click', function() {
            // Mettez à jour la source de l'image en grand
            largeImage.src = image.src;
    
            // Affichez l'overlay
            overlay.style.display = 'flex';
          });
        });
    
        // Ajoutez un gestionnaire d'événement de clic à l'overlay pour le masquer
        overlay.addEventListener('click', function() {
          // Masquez l'overlay
          overlay.style.display = 'none';
        });
      </script>
@endsection



