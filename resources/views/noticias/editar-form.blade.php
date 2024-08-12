<x-layout>
    <x-slot:title>Editar Noticia</x-slot>

    <section class="container p-4">
        <h1 class="mb-4">Editar la noticia "<b>{{ $noticia->titulo }}</b>"</h1>
    
        @if($errors->any())
            <div class="alert alert-danger">Hay errores en los datos del formulario. Por favor, revisalos y volvé a intentarlo.</div>
        @endif
        
        <form action="{{ route('noticias.editar.proceso', ['id' => $noticia->noticia_id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="form-label">Nombre del Tenista</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre', $noticia->nombre) }}">
                
                @error('nombre')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" id="titulo" name="titulo" class="form-control" value="{{ old('titulo', $noticia->titulo) }}">
                
                @error('titulo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <p>Portada actual</p>
                @if($noticia->portada !== null && \Storage::exists($noticia->portada))
                    <img src="{{ \Storage::url($noticia->portada) }}" alt="">
                @else
                    <p class="fw-bold">Sin portada</p>
                @endif
            </div>
            <div class="mb-4">
                <label for="portada" class="form-label">Nueva portada <span class="small">(solo elegir una si se quiere cambiar la actual)</span></label>
                <input type="file" id="portada" name="portada" class="form-control">
            
                @error('portada')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="portada_descripcion" class="form-label">Descripción de la portada</label>
                <input type="text" id="portada_descripcion" name="portada_descripcion" class="form-control" value="{{ old('portada_descripcion', $noticia->portada_descripcion) }}">
            
                @error('portada_descripcion')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="resumen" class="form-label">Resumen</label>
                <textarea id="resumen" name="resumen" class="form-control">{{ old('resumen', $noticia->resumen) }}</textarea>
                
                @error('resumen')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="cita" class="form-label">Cita</label>
                <textarea id="cita" name="cita" class="form-control">{{ old('cita', $noticia->cita) }}</textarea>
                
                @error('cita')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea id="descripcion" name="descripcion" class="form-control">{{ old('descripcion', $noticia->descripcion) }}</textarea>
                
                @error('descripcion')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Editar</button>
            <a href="{{ route('noticias.index') }}" class="btn btn-danger ms-2">Cancelar</a>
        </form>
    </section> 
</x-layout>