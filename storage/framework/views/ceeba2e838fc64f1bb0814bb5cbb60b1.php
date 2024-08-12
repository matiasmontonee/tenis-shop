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
     <?php $__env->slot('title', null, []); ?> <?php echo e($noticia->nombre); ?> <?php $__env->endSlot(); ?>

    <section class="container p-4">
        <h1 class="mb-4"><?php echo e($noticia->titulo); ?></h1>
    
        <p><?php echo e($noticia->resumen); ?></p>
        <p class="fw-bold">Publicado el <?php echo e($noticia->created_at->format('d/m/Y, H:i')); ?>hs.</p>
        <?php if($noticia->portada !== null && \Storage::exists($noticia->portada)): ?>
            <img src="<?php echo e(\Storage::url($noticia->portada)); ?>" alt="<?php echo e($noticia->portada_descripcion); ?>" class="mb-2">
        <?php endif; ?>
        <p class="fw-bold"><?php echo e($noticia->portada_descripcion); ?></p>
        <p><?php echo e($noticia->descripcion); ?></p>
        <p><?php echo e($noticia->cita); ?></p>
    
        <a href="<?php echo e(route('noticias.index')); ?>" class="btn btn-primary">Volver</a>
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
<?php endif; ?><?php /**PATH C:\xampp1\htdocs\portales\final\resources\views/noticias/view.blade.php ENDPATH**/ ?>