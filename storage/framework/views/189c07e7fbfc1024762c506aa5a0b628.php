            
<?php $__env->startSection("content"); ?>
    

    <div class="ensembleAlbums">
        <a href="album/create"><div class="boutonaddalbum"><span class="croi"><i class='bx bxs-layer-plus' ></i></span></div></a>
        <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="album">  
            <a href="/album/<?php echo e($a->id); ?>">
                
                <img class ="img-album" src="<?php echo e(optional($photos->where('album_id', $a->id)->first())->url ?? "https://www.snapon.co.za/images/thumbs/default-image_550.png"); ?>" style="width: 100%" style="height: 100%" alt="">
                <h1 class="p-album"><?php echo e($a->titre); ?></h1>
            </a>
           
        </div> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lucrousseau/Documents/GitHub/tp2LaravelProjet2/resources/views/albums.blade.php ENDPATH**/ ?>