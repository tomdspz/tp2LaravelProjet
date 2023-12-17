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



