


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="asset('ressources/css/style.css');">
  
</head>


</head>
<body>



<style>

ul{
    display: flex;
  
 

    justify-content: space-between;
    
  
}
li{
    list-style-type: none;
    
    
}

nav{
    
    width: 100%;
    height: 100px;
    background-color: #F5F5F7;
   
    
}
i{
    color: black;
    font-size: 40px;
}


body{
  display: flex;
}
html{
    margin: 0;
    padding: 0;
}




</style>
    
<nav>
    <ul>
        <li><a href="#"><i class='bx bx-image' ></i></a></li>
        <li><a href="#"><i class='bx bx-images' ></i></a></li>
        <li><input type="text" id="name" name="name" required minlength="4" maxlength="8" size="10" /></li>
        <li><a href="#"><i class='bx bx-search' ></i></a></li>
        <li><a href="#"><i class='bx bxs-face'></i></a></li>
      </ul> 
</nav>



<?php $__currentLoopData = $bdd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($f->name); ?>

    <?php echo e($f->email); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</body>
</html>





<?php /**PATH /Users/lucrousseau/Documents/_documents/PRO/DUTMMI/S3P2/tpDevBack/tp2LaravelProjet/resources/views/index.blade.php ENDPATH**/ ?>