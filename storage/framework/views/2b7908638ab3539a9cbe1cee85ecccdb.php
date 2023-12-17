<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Photothèque</title>
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital@1&display=swap" rel="stylesheet">




<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital@1&family=Signika+Negative:wght@500&display=swap" rel="stylesheet">
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="/"><i class='bx bx-image' ></i></a></li>
                    <li><a href="/albums"><i class='bx bx-images' ></i></a></li>
                    
                    <h1>MMIPhotos</h1>
                    <li><a href="/account"><i class='bx bxs-face'></i></a></li>
                </ul>
            </nav>
        </header>

        <main>
            
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
			<?php echo $__env->yieldContent("content"); ?>
		</main>

    </body>
</html>



<?php /**PATH /Users/lucrousseau/Documents/_documents/PRO/DUTMMI/S3P2/tpDevBack/test2/tp2LaravelProjet/resources/views/templatePhotos.blade.php ENDPATH**/ ?>