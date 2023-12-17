            
<?php $__env->startSection("content"); ?>
    <div class="tPbarreHaut">
        <h2>Trier par </h2>

        <div class="trier">

         <label class="" for="scales">Date de création:</label>
        <input type="checkbox" id="scales" name="scales" checked />
        </div>

        
    <div class="trier">
 <label for="horns">Titre:</label>
     <input type="checkbox" id="horns" name="horns" />
       
    </div>
       
    </div>

    <div class="ensembleAlbums">
        <a href="album/create"><div class="boutonaddalbum"><span class="croi"><i class='bx bxs-layer-plus' ></i></span></div></a>
        <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="album">  
            <?php 
            $photosalbum = DB::select('SELECT url FROM photos INNER JOIN albums ON photos.album_id = albums.id WHERE photos.album_id = ? ORDER BY photos.id LIMIT 1;', [$a->id]);
            // echo $photosalbum[0]->url;
            // dd($photosalbum[0]->url) 
            // $premierephoto = $photosalbum[0]->url;
            // echo $photosalbum[0]->url;
            // ?>
            <a href="/album/<?php echo e($a->id); ?>">
                <img class ="img-album" src="https://www.foot01.com/img/images/650x600/2023/Dec/04/al-hilal-n-a-pas-besoin-de-neymar-son-coach-s-en-vante-neymar-160-368806.jpg" style="width: 100%" style="height: 100%" alt="">
                <h1 class="p-album"><?php echo e($a->titre); ?></h1>
            </a>
           
        </div> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/tomdesprez/tp2LaravelProjet/resources/views/albums.blade.php ENDPATH**/ ?>