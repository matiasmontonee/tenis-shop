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
     <?php $__env->slot('title', null, []); ?> <?php echo e($producto->nombre); ?> <?php $__env->endSlot(); ?>

    <section class="container p-4">
        <h1 class="mb-4"><?php echo e($producto->nombre); ?></h1>

        <div class="row">
            <div class="col-md-4 mb-4">
                <img src="<?php echo e(asset($producto->imagen)); ?>" class="card-img-top border border-success" alt="<?php echo e($producto->nombre); ?>">
            </div>
            <div class="col-md-8 mb-4">
                <dl>
                    <dt>Marca</dt>
                    <dd><?php echo e($producto->marca); ?></dd>
                    <dt>Precio</dt>
                    <dd>$<?php echo e($producto->precio); ?></dd>
                    <dt>Categorías</dt>
                    <dd>
                        <?php $__empty_1 = true; $__currentLoopData = $producto->categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <span class="badge bg-primary"><?php echo e($categoria->nombre); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <i>Sin categoría</i>
                        <?php endif; ?>
                    </dd>
                    <dt>Peso</dt>
                    <dd><?php echo e($producto->peso->peso); ?>G</dd>
                </dl>
                <p><?php echo e($producto->descripcion); ?></p>
                <form action="<?php echo e(route('carrito.agregar', ['id' => $producto->producto_id])); ?>" method="POST" style="display: inline;">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-success">Agregar al Carrito</button>
                </form>
                <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-secondary ms-2">Volver</a>
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
<?php endif; ?><?php /**PATH C:\xampp1\htdocs\portales\parcial_01\resources\views/productos/view.blade.php ENDPATH**/ ?>