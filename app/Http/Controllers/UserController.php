<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('usuarios.index', compact('users')); // Pasa la variable $users a la vista de usuarios
    }

    public function view(int $id)
    {
        $usuario = User::findOrFail($id);
        $compras = Compra::with('producto')->where('user_id', $id)->get();

        return view('usuarios.view', [
            'usuario' => $usuario,
            'compras' => $compras
        ]);
    }
}