<x-layout>
    <x-slot:title>Eliminar Noticia</x-slot>

    <section class="container p-4">
        <h1 class="mb-4">Eliminar la noticia "<b>{{ $noticia->titulo }}</b>"</h1>
    
        <p class="mb-4">Estás por eliminar la siguiente noticia, y es necesario una confirmación.</p>
    
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4" style="width: 100%;">
                    <div class="card-body d-flex flex-column flex-md-row">
                        @if($noticia->portada !== null && \Storage::exists($noticia->portada))
                        <img src="{{ \Storage::url($noticia->portada) }}" alt="{{ $noticia->portada_descripcion }}" class="p-2 img-fluid w-100 d-block d-md-none">
                        <img src="{{ \Storage::url($noticia->portada) }}" alt="{{ $noticia->portada_descripcion }}" class="p-2 img-fluid d-none d-md-block" style="max-width: 300px;">
                        @endif
                        <div>
                            <p class="card-title fw-bold">{{ $noticia->nombre }}</p>
                            <p class="card-title">{{ $noticia->titulo }}</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <form action="{{ route('noticias.eliminar.proceso', ['id' => $noticia->noticia_id]) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Confirmar Eliminación</button>
                    </form>
                    <a href="{{ route('noticias.index') }}" class="btn btn-secondary ms-2">Cancelar</a>
                </div>
            </div>
        </div>
    </section>
</x-layout>