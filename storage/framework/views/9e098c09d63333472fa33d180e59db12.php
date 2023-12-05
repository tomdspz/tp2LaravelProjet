<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Photothèque</title>
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="asset('ressources/css/style.css');">
        <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="/"><i class='bx bx-image' ></i></a></li>
                <li><a href="/albums"><i class='bx bx-images' ></i></a></li>
                <li class="menu"><input type="text" id="name" name="name" required minlength="4" maxlength="8" size="20" /> <a href=""><i class='bx bx-search' ></i></a></li>
                <li><a href="/account"><i class='bx bxs-face'></i></a></li>
            </ul>
        </nav>



<?php $__currentLoopData = $bdd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($f->name); ?>

    <?php echo e($f->email); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div id="exercice2">
    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div><img src="<?php echo e($img->url); ?>" /></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
        
            
        </div>
    </body>
</html>





<?php /**PATH /Users/lucrousseau/Documents/_documents/PRO/DUTMMI/S3P2/tpDevBack/tp2LaravelProjet/resources/views/index.blade.php ENDPATH**/ ?>