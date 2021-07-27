<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            welcome FilmShow Page ! 
        </h2>
     <?php $__env->endSlot(); ?>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="centerboridehi">
                        <h1 style="text-align:center;margin-bottom:40px;">
                        <?php if($appartement->type =="appartement"): ?>
                            Appartement
                        <?php else: ?>
                            Maison
                        <?php endif; ?>
                        Lot N° <?php echo e($appartement->id); ?> </h1>
                    </div>
                    <?php if(!empty($images[0])): ?>
                        <div class="slideshow-container">
                            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="mySlides fade">
                                <img src="<?php echo e(asset($image->image_url)); ?>" alt="job image" style="width:100%; height:500px;">
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                   
                        <br>

                        <!-- The dots/circles -->
                        <div style="text-align:center">
                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span class="dot" onclick="currentSlide(<?php echo e($loop->iteration); ?>)"></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>    
                    <div class = "tableau-info">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <!-- <th scope="col">ID</th> -->
                                    <th scope="col">Type</th>
                                    <th scope ="col">Pièce</th>
                                    <th scope ="col">Prix</th>
                                    <th scope ="col">Surface</th>
                                    <th scope ="col">Date publication</th>
                                </tr>
                            </thead>
                            <tr>
                                <td><?php echo e($appartement->type); ?></td>
                                <td>T<?php echo e($appartement->nb_piece); ?></td>
                                <td><?php echo e($appartement->prix); ?>€</td>
                                <td><?php echo e($appartement->surface); ?>m²</td>
                                <td><?php echo e($appartement->date_publication); ?></td>
                            </tr>
                        </table>


                    </div>
                    <center>
                        <h1 style="text-align:center;margin-bottom:20px;"> Description </h1>
                        <p> <?php echo e($appartement->description); ?></p>
                        <div>
                            <h1 style="text-align:center;margin-bottom:20px;">Localisation</h1>
                            <p> <?php echo e(($appartement->adresse )); ?> <p>

                            <iframe src="<?php echo e(asset($appartement->localisation)); ?>" width="600" height="450" style="border:0;margin:auto;" allowfullscreen="" loading="lazy"></iframe>
                
                        </div>
                        <button type="button" class="bouton-visite" name="bouton-visite"><a href="/visite/<?php echo e($appartement->id); ?>/rdv">Choisir Date de visite</a></button>
                    </center>
                </div>
                    
            </div>
            
        </div>
    </div>
    <script type="text/javascript" src="<?php echo e(asset('js/slider.js')); ?>"></script>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH /Applications/MAMP/htdocs/wall/resources/views/single-appartement.blade.php ENDPATH**/ ?>