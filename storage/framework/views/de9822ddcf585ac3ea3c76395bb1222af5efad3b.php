<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            RDV-enregistrer
        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <h1>Demande 
                        <?php if($appartement->status == "louer"): ?>
                            location
                        <?php else: ?>
                            d'achat
                        <?php endif; ?>
                        a été envoyer à notre centre de validation
                    </h1>
                    <div style = "border:solid green;margin:5px;border-radius:20px;padding:20px;">
                        <h2>Merci pour votre confiance</h2>
                        <p>Votre demande sera valider dans les plus brefs delai<p>
                        <p>Reference lot : <?php echo e($appartement->id); ?></p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH /Applications/MAMP/htdocs/wall/resources/views/demande_envoyer.blade.php ENDPATH**/ ?>