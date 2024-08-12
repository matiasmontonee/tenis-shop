<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, "home"])
    ->name('home');

Route::get('/contacto', [\App\Http\Controllers\ContactoController::class, "contacto"])
    ->name('contacto.contacto');

Route::get('/contacto', [\App\Http\Controllers\ContactoController::class, 'borrarDatos'])
    ->name('contacto.contacto');

Route::post('/contacto/confirmacion', [\App\Http\Controllers\ContactoController::class, "confirmacion"])
    ->name('contacto.confirmacion');

Route::get('/perfil', [\App\Http\Controllers\ProfileController::class, 'show'])
    ->name('perfil.show')
    ->middleware('auth');

Route::get('/perfil/editar', [\App\Http\Controllers\ProfileController::class, 'edit'])
    ->name('perfil.edit')
    ->middleware('auth');

Route::post('/perfil/editar', [\App\Http\Controllers\ProfileController::class, 'update'])
    ->name('perfil.update')
    ->middleware('auth');

Route::get('/usuarios', [\App\Http\Controllers\UserController::class, "index"])
    ->name('usuarios.index')
    ->middleware('admin-login');

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, "index"])
    ->name('dashboard.index')
    ->middleware('admin-login');

Route::get('/usuarios/{id}', [\App\Http\Controllers\UserController::class, "view"])
    ->name('usuarios.view')
    ->middleware('admin-login');

// autenticación
Route::get('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, "loginForm"])
    ->name('auth.login.form');
Route::post('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, "loginProcess"])
    ->name('auth.login.process');
Route::post('/cerrar-sesion', [\App\Http\Controllers\AuthController::class, "logoutProcess"])
    ->name('auth.logout.process');
    Route::get('/registrarse', [\App\Http\Controllers\AuthController::class, 'registerForm'])
    ->name('auth.register.form');
Route::post('/registrarse', [\App\Http\Controllers\AuthController::class, 'registerProcess'])
    ->name('auth.register.process');

Route::get('/productos', [\App\Http\Controllers\ProductosController::class, "index"])
    ->name('productos.index');

Route::get('/carrito', [\App\Http\Controllers\MercadoPagoController::class, 'show'])
    ->name('carrito.view')
    ->middleware('auth');
Route::post('/carrito/agregar/{id}', [\App\Http\Controllers\CarritoController::class, 'agregar'])
    ->name('carrito.agregar')
    ->middleware('auth');
Route::delete('/carrito/eliminar/{id}', [\App\Http\Controllers\CarritoController::class, 'eliminar'])
    ->name('carrito.eliminar')
    ->middleware('auth');
Route::get('/carrito/mercadopago/success', [\App\Http\Controllers\MercadoPagoController::class, 'success'])
    ->name('test.mercadopago.success');
Route::get('/carrito/mercadopago/pending', [\App\Http\Controllers\MercadoPagoController::class, 'pending'])
    ->name('test.mercadopago.pending');
Route::get('/carrito/mercadopago/failure', [\App\Http\Controllers\MercadoPagoController::class, 'failure'])
    ->name('test.mercadopago.failure');
    
Route::post('/productos/comprar/{id}', [\App\Http\Controllers\ProductosController::class, 'comprar'])
    ->name('productos.comprar')
    ->middleware('auth');

Route::get('/productos/{id}', [\App\Http\Controllers\ProductosController::class, "view"])
    ->name('productos.view');

Route::get('/noticias', [\App\Http\Controllers\NoticiasController::class, "index"])
    ->name('noticias.index');

Route::get('/noticias/publicar', [\App\Http\Controllers\NoticiasController::class, "crearForm"])
    ->name('noticias.crear.form')
    ->middleware('admin-login');
Route::post('/noticias/publicar', [\App\Http\Controllers\NoticiasController::class, "crearProceso"])
    ->name('noticias.crear.proceso')
    ->middleware('admin-login');

Route::get('/noticias/{id}', [\App\Http\Controllers\NoticiasController::class, "view"])
    ->name('noticias.view')
    ->whereNumber('id');

Route::get('/noticias/{id}/editar', [\App\Http\Controllers\NoticiasController::class, "editarForm"])
    ->name('noticias.editar.form')
    ->whereNumber('id')
    ->middleware('admin-login');
Route::post('/noticias/{id}/editar', [\App\Http\Controllers\NoticiasController::class, "editarProceso"])
    ->name('noticias.editar.proceso')
    ->whereNumber('id')
    ->middleware('admin-login');
    
Route::get('/noticias/{id}/eliminar', [\App\Http\Controllers\NoticiasController::class, "eliminarForm"])
    ->name('noticias.eliminar.form')
    ->whereNumber('id')
    ->middleware('admin-login');
Route::post('/noticias/{id}/eliminar', [\App\Http\Controllers\NoticiasController::class, "eliminarProceso"])
    ->name('noticias.eliminar.proceso')
    ->whereNumber('id')
    ->middleware('admin-login');