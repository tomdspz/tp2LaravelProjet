            
<?php $__env->startSection("content"); ?>
    <form class="login2" action="<?php echo e(route("register")); ?>" method="post">
        <?php echo csrf_field(); ?>
        <h2>Inscription</h2>
        <label>Nom:</label>
        <input class ="inputform"type="text" name="name" required placeholder="Name" /><br />
        <label>E-mail:</label>
        <input type="email" name="email" required placeholder="Email" /><br />
        <label>Mot de Passe:</label>
        <input type="password" name="password" required placeholder="password" /><br />
        <label>Confirmez le mot de passe:</label>
        <input type="password" name="password_confirmation" required placeholder="password" /><br />
        <input type="submit" /><br />

        <span class="inscription">Déjà un compte  ? <a href="<?php echo e(route("login")); ?>">Connectez vous</a></span>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lucrousseau/Documents/_documents/PRO/DUTMMI/S3P2/tpDevBack/test2/tp2LaravelProjet/resources/views/auth/register.blade.php ENDPATH**/ ?>