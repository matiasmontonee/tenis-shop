<x-layout>
    <x-slot:title>Contacto</x-slot>

    <section class="container p-4">
        <h1 class="mb-4">Contactanos</h1>
    
        @if($errors->any())
            <div class="alert alert-danger">Hay errores en los datos del formulario. Por favor, revisalos y volvé a intentarlo.</div>
        @endif
    
        <form action="{{ route('contacto.confirmacion') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="nombre_completo" class="form-label">Nombre completo</label>
                <input type="text" id="nombre_completo" name="nombre_completo" class="form-control" value="{{ old('nombre_completo') }}">
                
                @error('nombre_completo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}">
                
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="motivo" class="form-label">Motivo de contacto</label>
                <textarea id="motivo" name="motivo" class="form-control">{{ old('motivo') }}</textarea>
                
                @error('motivo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
            <a href="{{ route('contacto.contacto') }}" class="btn btn-danger ms-2">Borrar datos</a>
        </form>
    </section>
</x-layout>