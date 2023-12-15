            
<?php $__env->startSection("content"); ?>
    
    <?php if(auth()->guard()->check()): ?>
        <div class="hautAcceuil">
            <div class="hautAcceuil_1">
                <h1> Bonjour <?php echo e(Auth::user()->name); ?></h1>
                <a href="<?php echo e(route("logout")); ?>" onclick="document.getElementById('logout').submit(); return false;">Se déconnecter</a>
            </div>
            <div class="hautAcceuil_2">
                <h2>Bienvenu dans votre tableau de bord</h2>
            </div>
        </div>
        
    <?php endif; ?>

    
    
    <div class="voirAlbum">
        <a href="#">Mes albums</a>
    </div>
    <div class="ajoutAlbum">
        <a href="#">Je créer un album</a>
    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lucrousseau/Documents/_documents/PRO/DUTMMI/S3P2/tpDevBack/test2/tp2LaravelProjet/resources/views/account.blade.php ENDPATH**/ ?>