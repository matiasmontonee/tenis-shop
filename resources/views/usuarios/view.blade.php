<x-layout>
    <x-slot:title>Compras de {{ $usuario->name }}</x-slot>

    <section class="container p-4">
        <h1 class="mb-4">Compras de {{ $usuario->name }}</h1>

        <div class="row">
            @forelse ($compras as $compra)
                @if ($compra->producto)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card border border-success" style="width: 100%;">
                            <div class="card-body">
                                <p class="card-title fw-bold">{{ $compra->producto->nombre }}</p>
                                <p class="card-title fw-bold">{{ $compra->producto->marca }}</p>
                                @forelse($compra->producto->categorias as $categoria)
                                    <span class="badge bg-primary mb-2">{{ $categoria->nombre }}</span>
                                @empty
                                    <i>Sin categoría</i>
                                @endforelse
                                <p class="card-text">${{ $compra->producto->precio }}</p>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-12">
                        <p>Producto no encontrado para la compra con ID {{ $compra->id }}</p>
                    </div>
                @endif
            @empty
                <p>No hay compras para mostrar.</p>
            @endforelse
        </div>

        <a href="{{ route('usuarios.index') }}" class="btn btn-primary mb-4">Volver</a>
    </section>
</x-layout>