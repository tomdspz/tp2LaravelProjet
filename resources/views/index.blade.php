@extends("templatePhotos")
            
@section("content")
    <div class="ensemblePhotos">
        @foreach($images as $img)
            <div>
                <img src="{{$img->url }}" class="PetiteImage">
            </div>
            <div class="overlay">
                <img src="" class="largeImage">
            </div>
        @endforeach
    </div>
    <script>
        let PetiteImages = document.querySelectorAll('.PetiteImage');
        let overlay = document.querySelector('.overlay');
        let largeImage = document.querySelector('.largeImage');
    
        PetiteImages.forEach(function(image) {
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



