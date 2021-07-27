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
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <!-- <th scope="col">ID</th> -->
                                <th scope ="col">Reference Lot</th>
                                <th scope ="col">Adresse</th>
                                <th scope ="col">Status</th>
                                <th scope ="col">Prix</th>
                                <th scope ="col">Demande</th>
                            </tr>
                        </thead>    
                        <?php $__currentLoopData = $mesdemandes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $demande): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope ="col"> <?php echo e($demande->id); ?></th>
                                <th scope ="col"><?php echo e($demande->adresse); ?></th>
                                <?php if($demande->status == "louer"): ?>
                                    <th scope ="col">Location</th>
                                <?php elseif($demande->status == "vendu"): ?>
                                    <th scope ="col">Achat</th>
                                <?php endif; ?>
                                <th scope ="col"><?php echo e($demande->prix); ?></th>

                                <?php if($demande->isValide == 0): ?>
                                    <th scope ="col" style="color:red;">En Attente de validation</th>
                                <?php else: ?> 
                                    <th scope ="col" style="color:green;">Validée</th>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
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
<?php /**PATH /Applications/MAMP/htdocs/wall/resources/views/mesdemande.blade.php ENDPATH**/ ?>