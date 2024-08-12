<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = Producto::with(['peso', 'categorias'])->get();

        return view('productos.index', [
            'productos' => $productos
        ]);
    }

    public function comprar(Request $request, $id)
    {
        $user = auth()->user();
    
        if (!$user) {
            return redirect()->route('auth.login.form');
        }
    
        Compra::create([
            'user_id' => $user->id,
            'producto_id' => $id,
        ]);
    
        return redirect()->route('productos.confirmacion');
    }

    public function view(int $id)
    {
        $producto = Producto::findOrFail($id);

        return view('productos.view', [
            'producto' => $producto
        ]);
    }
}