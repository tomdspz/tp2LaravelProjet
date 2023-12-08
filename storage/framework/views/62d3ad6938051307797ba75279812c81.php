            
<?php $__env->startSection("content"); ?>
    <h1>
        Albums
    </h1>
    <div class="ensembleAlbums">
        <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="album">   
            <a href="/album/<?php echo e($a->id); ?>"><?php echo e($a->titre); ?></a>
            <br>
            <p>créé le <?php echo e($a->creation); ?></p>
        </div> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lucrousseau/Documents/_documents/PRO/DUTMMI/S3P2/tpDevBack/tp2LaravelProjet/resources/views/albums.blade.php ENDPATH**/ ?>