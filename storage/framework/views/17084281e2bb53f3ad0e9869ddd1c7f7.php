<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Photothèque</title>
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        
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
                <a  href="#" class="tPbarreHaut_tag">Tag</a>
                <a href="#" class="tPbarreHaut_tag">Tag</a>
               
            </div>
            <div class="tPbarreHaut">
              
                <div class="tPbarreHaut_recherche">
                   <input type="text" id="name" name="name" required minlength="4" maxlength="8" size="20" /> <a href=""><i id ="recherche"  class='bx bx-search' ></i></a>
                </div>
            </div>  </div>
			<?php echo $__env->yieldContent("content"); ?>
		</main>

    </body>
</html>



<?php /**PATH /Users/tomdesprez/tp2LaravelProjet/resources/views/templatePhotos.blade.php ENDPATH**/ ?>