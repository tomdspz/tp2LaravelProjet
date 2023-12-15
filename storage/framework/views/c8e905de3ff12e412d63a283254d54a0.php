            
<?php $__env->startSection("content"); ?>

<form action="/photo" method="POST">
    <?php echo csrf_field(); ?>
    <label for="titre">Titre: </label>
    <input type="text" name="titre" id="titre"/>

    <br>

    <label for="url">URL: </label>
    <input type="text" name="url" id="url"/>

    <input type="submit" value="Insérer"/>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lucrousseau/Documents/_documents/PRO/DUTMMI/S3P2/tpDevBack/test2/tp2LaravelProjet/resources/views/photo/ajoutPhoto.blade.php ENDPATH**/ ?>