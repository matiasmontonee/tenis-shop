<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Compra;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $compras = Compra::where('user_id', $user->id)->with('producto.categorias')->get();

        return view('perfil.show', compact('user', 'compras'));
    }

    public function edit()
    {
        $user = Auth::user();

        return view('perfil.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        // Verificar si $user es una instancia de User
        if (!($user instanceof User)) {
            return redirect()->route('login')->with('error', 'No se pudo obtener la información del usuario.');
        }

        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255|unique:users,email,' . $user->id,
            'current_password' => 'nullable|required_with:password|string',
            'password' => 'nullable|string|min:8|confirmed'
        ]);

        if ($request->has('name')) {
            $user->name = $request->name;
        }

        if ($request->has('email')) {
            $user->email = $request->email;
        }

        if ($request->filled('password')) {
            if (!Hash::check($request->current_password, $user->password)) {
                return redirect()->back()->withErrors(['current_password' => 'La contraseña actual no es correcta.']);
            }
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('perfil.show')->with('feedback.message', 'Perfil actualizado correctamente')->with('feedback.type', 'success');
    }
}