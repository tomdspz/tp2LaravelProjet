            
<?php $__env->startSection("content"); ?>
    <div class="grandeclass">
            
    
        <div class="tPbarreHaut">
            <h2>Tags:   </h2>
            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tgs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a  href="#" class="tPbarreHaut_tag"><?php echo e($tgs->nom); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="tPbarreHaut">
            <div class="tPbarreHaut_recherche">
            <input type="text" id="name" name="name" required minlength="4" maxlength="8" size="20" /> <a href=""><i id ="recherche"  class='bx bx-search' ></i></a>
            </div>
        </div>  
    </div>

    <center>    
        <h1><?php echo e($album->titre); ?></h1> 
        <p>Album créé le <?php echo e($album->creation); ?></p>
    </center>

    <div class="ensemblePhotos">
        <a href="/photo/create?album=<?php echo e($album->id); ?>"><div class="boutonaddalbum"><span class="croi"><i class='bx bxs-layer-plus' ></i></span></div></a>
        <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <img src="<?php echo e(asset($img->url)); ?>" class="smallImage">
                
                    <form action="<?php echo e(route('photo.destroy', $img->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit">Supprimer</button>
                    </form>
                
            </div>
            <div class="overlay">
                <img src="" class="largeImage">
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div>
            
        </div>
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