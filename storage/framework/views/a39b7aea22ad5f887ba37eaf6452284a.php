            
<?php $__env->startSection("content"); ?>
    
    <?php if(auth()->guard()->check()): ?>
        Bonjour <?php echo e(Auth::user()->name); ?>

        <a href="<?php echo e(route("logout")); ?>"
        onclick="document.getElementById('logout').submit(); return false;">Logout</a>
        <form id="logout" action="<?php echo e(route("logout")); ?>" method="post">
            <?php echo csrf_field(); ?>
        </form>
        
    <?php endif; ?>
    
    
    <div class="ajoutPhoto">   
        <a href="/photo/create">J'ajoute une photo</a>
    </div> 


<?php $__env->stopSection(); ?>
<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lucrousseau/Documents/_documents/PRO/DUTMMI/S3P2/tpDevBack/tp2LaravelProjet/resources/views/account.blade.php ENDPATH**/ ?>