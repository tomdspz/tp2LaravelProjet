            
<?php $__env->startSection("content"); ?>
    <h1>
        Account
    </h1>

    <div>
        <h2>Ajout de photos</h2>
        <form method="post" action="/account">
            <div class="champ">
                <label for="pseudo">Entrez un pseudonyme : </label>
                <input type="text" id="pseudo">
            </div>
            <div class="champ">
                <label for="pass">Entrez un mot de passe :</label>
                <input type="password" id="pass">
            </div>
            <div class="champ">
                <label for="mail">Entrez un mail :</label>
                <input type="email" id="mail">
            </div>
        </form>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lucrousseau/Documents/_documents/PRO/DUTMMI/S3P2/tpDevBack/tp2LaravelProjet/resources/views/account.blade.php ENDPATH**/ ?>