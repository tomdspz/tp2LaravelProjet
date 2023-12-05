<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Compte</title>
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
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
        


<div class="add">

            <div class="addphoto">

ajouter photos
            </div>

            <div class="addalbum">

ajouter albums
            </div>
</div>



<div class="mesphotos">

<h1>mes photos</h1>

</div>

<div class="mesalbums">

<h1>mes albums</h1>

</div>


<center><button>Se Déconnecter</button></center>



    </body>
</html>
<?php /**PATH /Users/tomdesprez/tp2LaravelProjet/resources/views/account.blade.php ENDPATH**/ ?>