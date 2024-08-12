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
     <?php $__env->slot('title', null, []); ?> Eliminar Noticia <?php $__env->endSlot(); ?>

    <section class="container p-4">
        <h1 class="mb-4">Eliminar la noticia "<b><?php echo e($noticia->titulo); ?></b>"</h1>
    
        <p class="mb-4">Estás por eliminar la siguiente noticia, y es necesario una confirmación.</p>
    
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4" style="width: 100%;">
                    <div class="card-body d-flex flex-column flex-md-row">
                        <?php if($noticia->portada !== null && \Storage::exists($noticia->portada)): ?>
                        <img src="<?php echo e(\Storage::url($noticia->portada)); ?>" alt="<?php echo e($noticia->portada_descripcion); ?>" class="p-2 img-fluid w-100 d-block d-md-none">
                        <img src="<?php echo e(\Storage::url($noticia->portada)); ?>" alt="<?php echo e($noticia->portada_descripcion); ?>" class="p-2 img-fluid d-none d-md-block" style="max-width: 300px;">
                        <?php endif; ?>
                        <div>
                            <p class="card-title fw-bold"><?php echo e($noticia->nombre); ?></p>
                            <p class="card-title"><?php echo e($noticia->titulo); ?></p>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <form action="<?php echo e(route('noticias.eliminar.proceso', ['id' => $noticia->noticia_id])); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-danger">Confirmar Eliminación</button>
                    </form>
                    <a href="<?php echo e(route('noticias.index')); ?>" class="btn btn-secondary ms-2">Cancelar</a>
                </div>
            </div>
        </div>
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
<?php endif; ?><?php /**PATH C:\xampp1\htdocs\portales\parcial_01\resources\views/noticias/eliminar-form.blade.php ENDPATH**/ ?>