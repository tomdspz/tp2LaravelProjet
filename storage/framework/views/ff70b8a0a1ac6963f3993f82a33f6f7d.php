            
<?php $__env->startSection("content"); ?>
    <form action="<?php echo e(route("login")); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="email" name="email" required placeholder="Email" /><br />
        <input type="password" name="password" required placeholder="password" /><br />
        Remember me<input type="checkbox" name="remember"   /><br />
        <input type="submit" /><br />
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lucrousseau/Documents/_documents/PRO/DUTMMI/S3P2/tpDevBack/tp2LaravelProjet/resources/views/auth/login.blade.php ENDPATH**/ ?>