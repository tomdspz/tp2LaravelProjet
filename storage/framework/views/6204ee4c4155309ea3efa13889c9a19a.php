            
<?php $__env->startSection("content"); ?>
    <p><?php echo e($album->titre); ?></p>

    <div class="ensemblePhotos">
        <a href="/photo/create?<?php echo e($album->id); ?>"><div style="background-color: grey">+</div></a>
        <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div><img src="<?php echo e($img->url); ?>" /></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("templatePhotos", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lucrousseau/Documents/_documents/PRO/DUTMMI/S3P2/tpDevBack/tp2LaravelProjet/resources/views/detailAlbum.blade.php ENDPATH**/ ?>