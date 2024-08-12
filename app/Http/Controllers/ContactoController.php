<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function contacto()
    {
        return view('contacto.contacto');
    }

    public function borrarDatos()
    {
        session()->forget('old');

        return view('contacto.contacto');
    }

    public function confirmacion(Request $request)
    {
        $request->validate([
            'nombre_completo' => 'required',
            'email' => 'required|email',
            'motivo' => 'required',
        ]);

        return view('contacto.confirmacion');
    }
}