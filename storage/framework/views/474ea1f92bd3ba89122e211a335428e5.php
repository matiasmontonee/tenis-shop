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
     <?php $__env->slot('title', null, []); ?> Home <?php $__env->endSlot(); ?>

    <section class="home-section" id = "styleBodyHome">
        <div class="home-content mb-5">
            <h1>¡Bienvenidos a TeniShop! <span class ="subtituloHome">Aquí encontrarás las mejores raquetas y sus últimos modelos</span></h1>
            <p>Somos una reconocida marca que se dedica a vender raquetas de primera marca. Decidimos aplicar nuestros conocimientos sobre el Tenis en este sitio web y así surgió nuestro negocio, el cual utilizamos para ofrecer un amplio catálogo de productos para los entusiastas del Tenis, ¡por lo que te invitamos a explorar todo nuestro sitio!</p>
            <a class="btn btn-primary" href="<?php echo e(route('productos.index')); ?>">Ver productos</a>
        </div>

        <div class="home-content">
            <span class ="subtituloHome">Queremos que conozcas las últimas noticias sobre Tenis</span>
            <p>Además de vender productos de primera marca, también tenemos un apartado de noticias el cual utilizamos para facilitar a los usuarios la comprensión del Tenis vía la información proporcionada aquí. ¡No te pierdas las novedades más recientes del Tenis!</p>
            <a class="btn btn-primary" href="<?php echo e(route('noticias.index')); ?>">Ver noticias</a>
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
<?php endif; ?><?php /**PATH C:\xampp1\htdocs\portales\parcial_01\resources\views/home.blade.php ENDPATH**/ ?>