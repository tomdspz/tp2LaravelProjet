            
<?php $__env->startSection("content"); ?>
    <form class="login" action="<?php echo e(route("login")); ?>" method="post">
        <?php echo csrf_field(); ?>
        <h2>Se connecter</h2>
        <label>Identifiant:</label>
        <input class ="inputform" type="email" name="email" required placeholder="Email" /><br />
        <label for="name">Mot de passe:</label>
        <input type="password" name="password" required placeholder="password" /><br />
        
        <input class="btnform" type="submit" /><br />
        <span class="inscription">Vous n'avez pas de compte  ? <a href="<?php echo e(route("register")); ?>">Créez-en un</a></span>
    </form>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lucrousseau/Documents/_documents/PRO/DUTMMI/S3P2/tpDevBack/tp2LaravelProjet/resources/views/auth/login.blade.php ENDPATH**/ ?>