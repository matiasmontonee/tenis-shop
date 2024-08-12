<x-layout>
    <x-slot:title>Publicar Noticia</x-slot>

    <section class="container p-4">
        <h1 class="mb-4">Publicar una nueva noticia</h1>

        @if($errors->any())
            <div class="alert alert-danger">Hay errores en los datos del formulario. Por favor, revisalos y volvé a intentarlo.</div>
        @endif

        <form action="{{ route('noticias.crear.proceso') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="form-label">Nombre del Tenista</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre') }}">
            
                @error('nombre')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" id="titulo" name="titulo" class="form-control" value="{{ old('titulo') }}">
            
                @error('titulo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="portada" class="form-label">Portada</label>
                <input type="file" id="portada" name="portada" class="form-control">
            
                @error('portada')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="portada_descripcion" class="form-label">Descripción de la Portada</label>
                <input type="text" id="portada_descripcion" name="portada_descripcion" class="form-control" value="{{ old('portada_descripcion') }}">
            
                @error('portada_descripcion')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="resumen" class="form-label">Resumen</label>
                <textarea id="resumen" name="resumen" class="form-control">{{ old('resumen') }}</textarea>
            
                @error('resumen')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="cita" class="form-label">Cita</label>
                <textarea id="cita" name="cita" class="form-control">{{ old('cita') }}</textarea>
            
                @error('cita')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea id="descripcion" name="descripcion" class="form-control">{{ old('descripcion') }}</textarea>
            
                @error('descripcion')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        
            <button type="submit" class="btn btn-primary">Publicar</button>
            <a href="{{ route('noticias.index') }}" class="btn btn-danger ms-2">Cancelar</a>
        </form>
    </section>
</x-layout>