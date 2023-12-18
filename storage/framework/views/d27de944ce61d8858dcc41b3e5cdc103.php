            
<?php $__env->startSection("content"); ?>
    <center>    
        <h1><?php echo e($album->titre); ?></h1> 
        <p>Album créé le <?php echo e($album->creation); ?></p>
    </center>

    <div class="ensemblePhotos">
        <a href="/photo/create?album=<?php echo e($album->id); ?>"><div class="boutonaddalbum"><span class="croi"><i class='bx bxs-layer-plus' ></i></span></div></a>
        <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <img src="<?php echo e(asset($img->url)); ?>" class="smallImage">
                <?php if($album->user_id == Auth::id()): ?>
                    <form action="<?php echo e(route('photo.destroy', $img->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit">Supprimer</button>
                    </form>
                <?php endif; ?>
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
<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lucrousseau/Documents/_documents/PRO/DUTMMI/S3P2/tpDevBack/test2/tp2LaravelProjet/resources/views/detailAlbum.blade.php ENDPATH**/ ?>