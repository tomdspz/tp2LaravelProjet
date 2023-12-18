            
<?php $__env->startSection("content"); ?>
    <div class="ensemblePhotos">
        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <img src="<?php echo e($img->url); ?>" class="smallImage">
            </div>
            <div class="overlay">
                <img src="" class="largeImage">
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>




<?php echo $__env->make("templatePhotos", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lucrousseau/Documents/_documents/PRO/DUTMMI/S3P2/tpDevBack/test2/tp2LaravelProjet/resources/views/index.blade.php ENDPATH**/ ?>