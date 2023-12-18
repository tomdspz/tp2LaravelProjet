            
<?php $__env->startSection("content"); ?>
    <?php if(auth()->guard()->check()): ?>
        <div class="hautAcceuil">
            <div class="hautAcceuil_1">
                <h1> Bonjour <?php echo e(Auth::user()->name); ?></h1>
                <a href="<?php echo e(route("logout")); ?>"
                onclick="document.getElementById('logout').submit(); return false;">Déconnexion</a>
                <form id="logout" action="<?php echo e(route("logout")); ?>" method="post">
                    <?php echo csrf_field(); ?>
                </form>
            </div>

            <div class="hautAcceuil_2">
                <h3>Voici votre tableau de bord</h3>
            </div>
        </div>

        <div>
            <form class="login3" class="ajoutTag" action="/tags" method="POST">
                <?php echo csrf_field(); ?>   
                <h2>Créer un tag</h2>
                <label for="nom">Nom du tag: </label>
                <input type="text" name="nom"/>
            
                <input type="submit" value="Créer"/>
            </form>
        </div>

        <div class="voirAlbum">
            <h2>Mes Albums</h2>
            <div class="ajoutAlbum">
                <div class="ensembleAlbums">
                    <a href="/album/create"><div class="boutonaddalbum"><span class="croi"><i class='bx bxs-layer-plus' ></i></span></div></a>
                    <?php $__currentLoopData = $useralbums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ua): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="album">  
                        <a href="/album/<?php echo e($ua->id); ?>">
                            <img class ="img-album" src="https://www.foot01.com/img/images/650x600/2023/Dec/04/al-hilal-n-a-pas-besoin-de-neymar-son-coach-s-en-vante-neymar-160-368806.jpg" alt="">
                            <h1 class="p-album"><?php echo e($ua->titre); ?></h1>
                        </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div> 
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lucrousseau/Documents/_documents/PRO/DUTMMI/S3P2/tpDevBack/test2/tp2LaravelProjet/resources/views/account.blade.php ENDPATH**/ ?>