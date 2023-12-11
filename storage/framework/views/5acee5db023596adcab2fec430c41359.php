            
<?php $__env->startSection("content"); ?>
    <h1>
        Account
    </h1>

    <div>
        <h2>Ajout de photos</h2>
        <form method="post" action="/account" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="champ">
                <label for="titre">Titre de la photo: </label>
                <input type="text" id="titre">
            </div>
            <div class="champ">
                <label for="url">URL de la photo: </label>
                <input type="text" id="url">
            </div>
            <div class="champSubmit">
                <input type="submit">
            </div>
        </form>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/tomdesprez/tp2LaravelProjet/resources/views/account.blade.php ENDPATH**/ ?>