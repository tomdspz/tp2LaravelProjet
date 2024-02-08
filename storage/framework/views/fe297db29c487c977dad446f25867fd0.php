            
<?php $__env->startSection("content"); ?>
<form class="login" action="/album" method="POST">
    <?php echo csrf_field(); ?>
    <label for="titre">Titre de l'album: </label>
    <input type="text" name="titre" id="titre"/>

    <input type="submit" value="Créer"/>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lucrousseau/Documents/GitHub/tp2LaravelProjet2/resources/views/album/ajoutAlbum.blade.php ENDPATH**/ ?>