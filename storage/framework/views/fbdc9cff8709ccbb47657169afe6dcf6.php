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
     <?php $__env->slot('title', null, []); ?> Carrito de Compras <?php $__env->endSlot(); ?>

    <section class="container p-4">
        <h1 class="mb-4">Carrito de Compras</h1>

        <?php if(count($carrito) > 0): ?>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio unitario</th>
                        <th>Cantidad</th>
                        <th>Acciones</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $carrito; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item['nombre']); ?></td>
                        <td>$<?php echo e(number_format($item['precio'], 3)); ?></td>
                        <td><?php echo e($item['cantidad']); ?></td>
                        <td>
                            <form action="<?php echo e(route('carrito.eliminar', $item['producto_id'])); ?>" method="POST" style="display: inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                        <td>$<?php echo e(number_format($item['precio'] * $item['cantidad'], 3)); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td colspan="4" class="text-end fw-bold">Total:</td>
                        <td>$<?php echo e(number_format($total, 3)); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <?php if($preference): ?>
        <div id="mercadopago-button"></div>
        <?php endif; ?>

        <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-secondary">Seguir Comprando</a>
        <?php else: ?>
        <p>No hay productos en el carrito.</p>
        <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-primary">Comprar</a>
        <?php endif; ?>
    </section>

    <?php if($preference): ?>
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script>
        const mp = new MercadoPago('<?= config('mercadopago.public_key'); ?>');
        mp.bricks().create('wallet', 'mercadopago-button', {
            initialization: {
                preferenceId: '<?= $preference->id; ?>',
            }
        });
    </script>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH C:\xampp1\htdocs\portales\parcial_01\resources\views/carrito/view.blade.php ENDPATH**/ ?>