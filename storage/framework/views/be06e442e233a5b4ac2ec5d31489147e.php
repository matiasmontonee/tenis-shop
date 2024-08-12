<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?> :: TeniShop</title>
    <link rel="shortcut icon" href="<?php echo e(url('favicon.ico')); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo e(url('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('css/styles.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div id="app">
      <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">TeniShop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(route('home')); ?>">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(route('productos.index')); ?>">Productos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(route('noticias.index')); ?>">Noticias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(route('contacto.contacto')); ?>">Contacto</a>
                </li>
                <?php if(auth()->guard()->check()): ?>
                  <?php if(auth()->user()->is_admin): ?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo e(route('usuarios.index')); ?>">Usuarios</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo e(route('dashboard.index')); ?>">Dashboard</a>
                    </li>
                  <?php endif; ?>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('perfil.show')); ?>">Perfil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('carrito.view')); ?>">Carrito</a>
                  </li>
                  <li class="nav-item">
                    <form action="<?php echo e(route('auth.logout.process')); ?>" method="POST">
                      <?php echo csrf_field(); ?>
                      <button class="nav-link"><?php echo e(auth()->user()->email); ?> (Cerrar Sesión)</button>
                    </form>
                  </li>
                <?php else: ?>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('auth.login.form')); ?>">Iniciar sesión</a>
                  </li>
                <?php endif; ?>
              </ul>
            </div>
          </div>
        </nav>
      </header>

      <main>
        <?php if(session()->has('feedback.message')): ?>
          <div class="container p-4 pb-0">
            <div class="alert alert-<?php echo e(session()->get('feedback.type', 'success')); ?>"><?php echo session()->get('feedback.message'); ?></div>
          </div>
        <?php endif; ?>
        
        <?php echo e($slot); ?>

      </main>

      <footer class="footer">
        <p>Copyright &copy; TeniShop 2024</p>
      </footer>
    </div>
    
    <script src="<?php echo e(url('js/bootstrap.bundle.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp1\htdocs\portales\parcial_01\resources\views/components/layout.blade.php ENDPATH**/ ?>