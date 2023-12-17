            
<?php $__env->startSection("content"); ?>
    

    

        

    <div class="ensemblePhotos">
        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <img src="<?php echo e($img->url); ?>" alt="Image à zoomer" class="smallImage">
            </div>
            <div class="overlay">
                <img src="" alt="Image en grand" class="largeImage">
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>




<?php echo $__env->make("templatePhotos", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/tomdesprez/tp2LaravelProjet/resources/views/index.blade.php ENDPATH**/ ?>