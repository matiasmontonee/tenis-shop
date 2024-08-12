<x-layout>
    <x-slot:title>{{ $noticia->nombre }}</x-slot>

    <section class="container p-4">
        <h1 class="mb-4">{{ $noticia->titulo }}</h1>
    
        <p>{{ $noticia->resumen }}</p>
        <p class="fw-bold">Publicado el {{ $noticia->created_at->format('d/m/Y, H:i') }}hs.</p>
        @if($noticia->portada !== null && \Storage::exists($noticia->portada))
            <img src="{{ \Storage::url($noticia->portada) }}" alt="{{ $noticia->portada_descripcion }}" class="mb-2">
        @endif
        <p class="fw-bold">{{ $noticia->portada_descripcion }}</p>
        <p>{{ $noticia->descripcion }}</p>
        <p>{{ $noticia->cita }}</p>
    
        <a href="{{ route('noticias.index') }}" class="btn btn-primary">Volver</a>
    </section>
</x-layout>