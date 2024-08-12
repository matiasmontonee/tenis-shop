<x-layout>
    <x-slot:title>Noticias</x-slot>

    <section class="container p-4">
        <h1 class="mb-4">Últimas noticias sobre Tenis <i class="fas fa-newspaper icon-gray-large"></i></h1>
    
        @if($noticias->isNotEmpty())
            @auth
                @if(auth()->user()->is_admin)
                    <div class="mb-4">
                        <a href="{{ route('noticias.crear.form') }}">Publicar una nueva noticia</a>
                    </div>
                @endif
            @endauth
    
            <div class="row">
                @foreach ($noticias as $noticia)
                <div class="col-lg-12 mb-4">
                    <div class="card card-hover d-flex flex-column flex-md-row align-items-center">
                        @if($noticia->portada !== null && \Storage::exists($noticia->portada))
                            <img src="{{ \Storage::url($noticia->portada) }}" alt="{{ $noticia->portada_descripcion }}" class="p-2 img-fluid w-100 d-block d-md-none">
                            <img src="{{ \Storage::url($noticia->portada) }}" alt="{{ $noticia->portada_descripcion }}" class="p-2 img-fluid d-none d-md-block" style="max-width: 300px;">
                        @endif
                        <div class="card-body d-flex flex-column">
                            <p class="card-title mb-0 fw-bold">{{ $noticia->nombre }}</p>
                            <p class="card-title mb-2">{{ $noticia->titulo }}</p>
                            <div>
                                <a href="{{ route('noticias.view', ['id' => $noticia->noticia_id]) }}" class="btn btn-primary">Ver más</a>
                                @auth
                                    @if(auth()->user()->is_admin)
                                        <a href="{{ route('noticias.editar.form', ['id' => $noticia->noticia_id]) }}" class="ms-2 btn btn-secondary">Editar</a>
                                        <a href="{{ route('noticias.eliminar.form', ['id' => $noticia->noticia_id]) }}" class="ms-2 btn btn-danger">Eliminar</a>
                                    @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <p>No hay noticias que mostrar actualmente. @auth @if(auth()->user()->is_admin)Podés empezar por <a href="{{ route('noticias.crear.form') }}">publicar una noticia</a>. @endif @endauth</p>
        @endif
    </section>
</x-layout>