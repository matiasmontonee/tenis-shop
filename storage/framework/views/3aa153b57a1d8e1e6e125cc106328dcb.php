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
     <?php $__env->slot('title', null, []); ?> Compras de <?php echo e($usuario->name); ?> <?php $__env->endSlot(); ?>

    <section class="container p-4">
        <h1 class="mb-4">Compras de <?php echo e($usuario->name); ?></h1>

        <div class="row">
            <?php $__empty_1 = true; $__currentLoopData = $compras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php if($compra->producto): ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card border border-success" style="width: 100%;">
                            <div class="card-body">
                                <p class="card-title fw-bold"><?php echo e($compra->producto->nombre); ?></p>
                                <p class="card-title fw-bold"><?php echo e($compra->producto->marca); ?></p>
                                <?php $__empty_2 = true; $__currentLoopData = $compra->producto->categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                    <span class="badge bg-primary mb-2"><?php echo e($categoria->nombre); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                    <i>Sin categoría</i>
                                <?php endif; ?>
                                <p class="card-text">$<?php echo e($compra->producto->precio); ?></p>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="col-12">
                        <p>Producto no encontrado para la compra con ID <?php echo e($compra->id); ?></p>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p>No hay compras para mostrar.</p>
            <?php endif; ?>
        </div>

        <a href="<?php echo e(route('usuarios.index')); ?>" class="btn btn-primary mb-4">Volver</a>
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
<?php endif; ?><?php /**PATH C:\xampp1\htdocs\portales\parcial_01\resources\views/usuarios/view.blade.php ENDPATH**/ ?>