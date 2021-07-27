<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Prendre Viste
        </h2>
     <?php $__env->endSlot(); ?>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Formulaire pour prendre une visite </h1>
                    <div class="form-rdv">
                        <form action="/visite/rdv-enregistrer" method="post">
                            <?php echo csrf_field(); ?>
                            <label>Numéro de lot</label>
                            <input type="text" value = 'Lot : <?php echo e($id); ?>' disabled="disabled"><br>
                            <input type="number" value = '<?php echo e($id); ?>' name="id_appartement" hidden>
                            <label>Choisir une date de visite</label>
                            <input type ="date" name="date_rdv" id="date-rdv" required>
                        <button type="submit">Envoyer</button>
                    </div>    
                    </form>
                </div>
            </div>
        </div>
    </div>
<script>
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    today = yyyy+'-'+mm+'-'+dd;
    document.getElementById("date-rdv").min = today;
</script>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH /Applications/MAMP/htdocs/wall/resources/views/rdv-visite.blade.php ENDPATH**/ ?>