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
     <?php $__env->slot('title', null, []); ?> Dashboard <?php $__env->endSlot(); ?>

    <section class="container p-4">
        <h1 class="text-center mb-4">Dashboard</h1>

        <div class="card mb-4">
            <div class="card-header">
                <h2 class="h3">Productos más vendidos</h2>
            </div>
            <div class="card-body">
                <?php if($productosMasComprados->isEmpty()): ?>
                    <p>No hay datos para mostrar.</p>
                <?php else: ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Productos</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $productosMasComprados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($producto->nombre); ?></td>
                                    <td><?php echo e($producto->compras_count); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h2 class="h3">Meses con Mayor Facturación</h2>
            </div>
            <div class="card-body">
                <?php if(empty($facturacionPorMes)): ?>
                    <p>No hay datos para mostrar.</p>
                <?php else: ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Mes</th>
                                <th>Total facturado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $facturacionPorMes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facturacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($facturacion->fecha); ?></td>
                                    <td>$<?php echo e(number_format($facturacion->total)); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h2 class="h3">Usuarios registrados por mes</h2>
            </div>
            <div class="card-body">
                <?php if(empty($usuariosRegistrados)): ?>
                    <p>No hay datos para mostrar.</p>
                <?php else: ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Total de usuarios</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $usuariosRegistrados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($registro->fecha); ?></td>
                                    <td><?php echo e($registro->total); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h2 class="h3">Total de ingresos de los últimos 5 años</h2>
            </div>
            <div class="card-body">
                <?php if(empty($ingresosAnuales)): ?>
                    <p>No hay datos para mostrar.</p>
                <?php else: ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Año</th>
                                <th>Total ingresado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $ingresosAnuales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ingreso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($ingreso->year); ?></td>
                                    <td>$<?php echo e(number_format($ingreso->total, 2)); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                <?php endif; ?>
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
<?php endif; ?><?php /**PATH C:\xampp1\htdocs\portales\parcial_01\resources\views/dashboard/index.blade.php ENDPATH**/ ?>