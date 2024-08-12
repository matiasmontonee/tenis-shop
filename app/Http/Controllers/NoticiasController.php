<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NoticiasController extends Controller
{
    public function index()
    {
        $noticias = Noticia::all();

        return view('noticias.index', [
            'noticias' => $noticias,
        ]);
    }

    public function view(int $id)
    {
        $noticia = Noticia::findOrFail($id);

        return view('noticias.view', [
            'noticia' => $noticia,
        ]);
    }

    public function crearForm()
    {
        return view('noticias.crear-form');
    }

    public function crearProceso(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'titulo' => 'required',
            'resumen' => 'required',
            'cita' => 'required',
            'descripcion' => 'required',
            'portada' => 'required',
            'portada_descripcion' => 'required'
        ]);
        
        $input = $request->only(['nombre', 'titulo', 'portada', 'portada_descripcion', 'resumen', 'cita', 'descripcion']);
        
        if($request->hasFile('portada')){
            $input['portada'] = $request->file('portada')->store('imgs');
        }
            
        $noticia = Noticia::create($input);

        return redirect()
            ->route('noticias.index')
            ->with('feedback.message', 'La noticia <b>"' . e($input['titulo']) . '"</b> se publicó con éxito. <a href="' . route('noticias.view', $noticia->noticia_id) . '">Ver noticia</a>');
    }

    public function editarForm(int $id)
    {
        return view('noticias.editar-form', [
            'noticia' => Noticia::findOrFail($id),
        ]);
    }

    public function editarProceso(int $id, Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'titulo' => 'required',
            'portada_descripcion' => 'required',
            'resumen' => 'required',
            'cita' => 'required',
            'descripcion' => 'required'
        ]);

        $input = $request->only(['nombre', 'titulo', 'portada_descripcion', 'resumen', 'cita', 'descripcion']);
        
        $noticia = Noticia::findOrFail($id);

        $portada_vieja = $noticia->portada;

        if($request->hasFile('portada')){
            $input['portada'] = $request->file('portada')->store('imgs');
        }

        $noticia->update($input);

        if(
            $request->hasFile('portada') &&
            $portada_vieja !== null &&
            Storage::exists($portada_vieja)
        ) {
            Storage::delete($portada_vieja);
        }

        return redirect()
            ->route('noticias.index')
            ->with('feedback.message', 'La noticia <b>"' . e($input['titulo']) . '"</b> se editó con éxito. <a href="' . route('noticias.view', $noticia->noticia_id) . '">Ver noticia</a>');
    }

    public function eliminarForm(int $id)
    {
        return view('noticias.eliminar-form', [
            'noticia' => Noticia::findOrFail($id),
        ]);
    }

    public function eliminarProceso(int $id)
    {
        $noticia = Noticia::findOrFail($id);

        $noticia->delete();

        if($noticia->portada !== null && Storage::exists($noticia->portada)
        ) {
            Storage::delete($noticia->portada);
        }

        return redirect()
            ->route('noticias.index')
            ->with('feedback.message', 'La noticia <b>"' . e($noticia->titulo) . '"</b> se eliminó con éxito.');
    }
}