            
<?php $__env->startSection("content"); ?>
    <h1>
        Albums
    </h1>
    <div class="ensembleAlbums">
        <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="album">   
            <img class ="img-album" src="https://www.foot01.com/img/images/650x600/2023/Dec/04/al-hilal-n-a-pas-besoin-de-neymar-son-coach-s-en-vante-neymar-160-368806.jpg" alt="">
            <h1 class="p-album"><?php echo e($a->titre); ?></h1>

                <div class="hover-album">
                    <a href="/album/<?php echo e($a->id); ?>">Acceder à l'album</a>
                    <p class="p2-album">créé le <?php echo e($a->creation); ?></p>
                </div>

        </div> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/tomdesprez/tp2LaravelProjet/resources/views/albums.blade.php ENDPATH**/ ?>