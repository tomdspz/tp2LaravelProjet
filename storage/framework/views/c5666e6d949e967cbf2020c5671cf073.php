            
<?php $__env->startSection("content"); ?>
    <p><?php echo e($album->titre); ?></p>

    <div class="ensemblePhotos">
        <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div><img src="<?php echo e($img->url); ?>" /></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/tomdesprez/tp2LaravelProjet/resources/views/detailAlbum.blade.php ENDPATH**/ ?>