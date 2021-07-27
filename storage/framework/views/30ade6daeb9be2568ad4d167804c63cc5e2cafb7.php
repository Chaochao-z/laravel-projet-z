<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            welcome on the appartement !
        </h2>
     <?php $__env->endSlot(); ?>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>Filtrer</p>
                    <form action="" method="get">
                        <label>Type</label>
                        <select name="type">
                            <option value=1>Tout</option>
                            <option value=2>Appartement</option>
                            <option value=3>Maison</option>
                        </select>
                        <label>Status</label>
                        <select name="status">
                            <option value=1>Tout</option>
                            <option value=2>Vente</option>
                            <option value=3>Location</option>
                        </select>
                        <button type="submit">Submit</button>

                    </form>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <!-- <th scope="col">ID</th> -->
                                <th scope="col">Réference</th>
                                <th scope="col">Type</th>
                                <th scope ="col" > nb_piece</th>
                                <th scope ="col">Prix</th>
                                <th scope ="col">Surface</th>
                                <th scope ="col">Status</th>
                                <th scope ="col">Date publication</th>
                                <th scope ="col">Demande</th>
                                <th scope ="col" >Action</th>
                                <?php if(Auth::user()->Role == 0): ?>
                                    <th scope ="col" >Admin</th>
                                    <th scope ="col" >Mettre Corbeille</th>
                                <?php endif; ?>

                            </tr>
                        </thead>    
                        <?php $__currentLoopData = $appartements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appartement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <!-- <td>    <?php echo e($appartement->id); ?> </td> -->
                            <td>    <?php echo e($appartement->id); ?></td>
                            <td>    <?php echo e($appartement->type); ?></td>
                            <td>    T<?php echo e($appartement->nb_piece); ?></td>
                            <td>    <?php echo e($appartement->prix); ?></td>
                            <td>    <?php echo e($appartement->surface); ?></td>
                            <td>    <?php echo e($appartement->status); ?></td>
                            <td>    <?php echo e($appartement->date_publication); ?></td>
                            <td><a href="appartement/demande/<?php echo e($appartement->id); ?>"> 
                                <?php if($appartement->status == "location"): ?>
                                    Louer
                                <?php else: ?>
                                    Acheter
                                <?php endif; ?>
                            </a></td>
                            <td><a href="/visite/<?php echo e($appartement->id); ?>">Regarder</a></td>
                            <?php if(Auth::user()->Role == 0): ?>
                                <td><a href="/appartement-edit/<?php echo e($appartement->id); ?>">Edit</a></td>
                                <td><a href="/appartement/corbeille/<?php echo e($appartement->id); ?>">Retirer</a></td>
                            <?php endif; ?>
                            
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    <?php if(Auth::user()->Role == 0): ?>
                        <button><a href="/visite-corbeille">Corbeille</a></button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH /Applications/MAMP/htdocs/wall/resources/views/appartement.blade.php ENDPATH**/ ?>