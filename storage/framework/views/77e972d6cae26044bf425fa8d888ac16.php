<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> Noticias <?php $__env->endSlot(); ?>

    <section class="container p-4">
        <h1 class="mb-4">Últimas noticias sobre Tenis <i class="fas fa-newspaper icon-gray-large"></i></h1>
    
        <?php if($noticias->isNotEmpty()): ?>
            <?php if(auth()->guard()->check()): ?>
                <?php if(auth()->user()->is_admin): ?>
                    <div class="mb-4">
                        <a href="<?php echo e(route('noticias.crear.form')); ?>">Publicar una nueva noticia</a>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
    
            <div class="row">
                <?php $__currentLoopData = $noticias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noticia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-12 mb-4">
                    <div class="card card-hover d-flex flex-column flex-md-row align-items-center">
                        <?php if($noticia->portada !== null && \Storage::exists($noticia->portada)): ?>
                            <img src="<?php echo e(\Storage::url($noticia->portada)); ?>" alt="<?php echo e($noticia->portada_descripcion); ?>" class="p-2 img-fluid w-100 d-block d-md-none">
                            <img src="<?php echo e(\Storage::url($noticia->portada)); ?>" alt="<?php echo e($noticia->portada_descripcion); ?>" class="p-2 img-fluid d-none d-md-block" style="max-width: 300px;">
                        <?php endif; ?>
                        <div class="card-body d-flex flex-column">
                            <p class="card-title mb-0 fw-bold"><?php echo e($noticia->nombre); ?></p>
                            <p class="card-title mb-2"><?php echo e($noticia->titulo); ?></p>
                            <div>
                                <a href="<?php echo e(route('noticias.view', ['id' => $noticia->noticia_id])); ?>" class="btn btn-primary">Ver más</a>
                                <?php if(auth()->guard()->check()): ?>
                                    <?php if(auth()->user()->is_admin): ?>
                                        <a href="<?php echo e(route('noticias.editar.form', ['id' => $noticia->noticia_id])); ?>" class="ms-2 btn btn-secondary">Editar</a>
                                        <a href="<?php echo e(route('noticias.eliminar.form', ['id' => $noticia->noticia_id])); ?>" class="ms-2 btn btn-danger">Eliminar</a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>
            <p>No hay noticias que mostrar actualmente. <?php if(auth()->guard()->check()): ?> <?php if(auth()->user()->is_admin): ?>Podés empezar por <a href="<?php echo e(route('noticias.crear.form')); ?>">publicar una noticia</a>. <?php endif; ?> <?php endif; ?></p>
        <?php endif; ?>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH C:\xampp1\htdocs\portales\parcial_01\resources\views/noticias/index.blade.php ENDPATH**/ ?>