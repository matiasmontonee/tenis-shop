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
     <?php $__env->slot('title', null, []); ?> Productos <?php $__env->endSlot(); ?>

    <section class="container p-4">
        <h1 class="mb-4">Catálogo de productos <i class="fas fa-table-tennis icon-green-large"></i></h1>

        <div class="row">
            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card border border-success card-hover" style="width: 100%;">
                    <a href="<?php echo e(route('productos.view', ['id' => $producto->producto_id])); ?>">
                        <img src="<?php echo e($producto->imagen); ?>" class="card-img-top" alt="<?php echo e($producto->nombre); ?>">
                    </a>
                    <div class="card-body">
                        <p class="card-title fw-bold"><?php echo e($producto->marca); ?></p>
                        <p class="card-title"><?php echo e($producto->nombre); ?></p>
                        <?php $__empty_1 = true; $__currentLoopData = $producto->categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <span class="badge bg-primary mb-2"><?php echo e($categoria->nombre); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <i>Sin categoría</i>
                        <?php endif; ?>
                        <p class="card-text">$<?php echo e($producto->precio); ?></p>
                        <form action="<?php echo e(route('carrito.agregar', ['id' => $producto->producto_id])); ?>" method="POST" style="display: inline;">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-success">Agregar al Carrito</button>
                        </form>

                        <a href="<?php echo e(route('productos.view', ['id' => $producto->producto_id])); ?>" class="btn btn-secondary ms-2">Ver detalle</a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php endif; ?><?php /**PATH C:\xampp1\htdocs\portales\parcial_01\resources\views/productos/index.blade.php ENDPATH**/ ?>