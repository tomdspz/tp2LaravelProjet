            
<?php $__env->startSection("content"); ?>

<form class="login" action="/photo?album=<?php echo e($_GET['album']); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <label for="titre">Titre: </label>
    <input type="text" name="titre" id="titre"/>

    <br>

    <label for="url">URL: </label>
    <input type="text" name="url" id="url"/>

    

    <select class ="select" name="tags" multiple>
        
        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($t->id); ?>"><?php echo e($t->nom); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

    <input type="submit" value="Insérer"/>
</form>



<?php $__env->stopSection(); ?>
<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lucrousseau/Documents/_documents/PRO/DUTMMI/S3P2/tpDevBack/test2/tp2LaravelProjet/resources/views/photo/ajoutPhoto.blade.php ENDPATH**/ ?>