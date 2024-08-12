<x-layout>
    <x-slot:title>Productos</x-slot>

    <section class="container p-4">
        <h1 class="mb-4">Catálogo de productos <i class="fas fa-table-tennis icon-green-large"></i></h1>

        <div class="row">
            @foreach ($productos as $producto)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card border border-success card-hover" style="width: 100%;">
                    <a href="{{ route('productos.view', ['id' => $producto->producto_id]) }}">
                        <img src="{{ $producto->imagen }}" class="card-img-top" alt="{{ $producto->nombre }}">
                    </a>
                    <div class="card-body">
                        <p class="card-title fw-bold">{{ $producto->marca }}</p>
                        <p class="card-title">{{ $producto->nombre }}</p>
                        @forelse($producto->categorias as $categoria)
                            <span class="badge bg-primary mb-2">{{ $categoria->nombre }}</span>
                        @empty
                            <i>Sin categoría</i>
                        @endforelse
                        <p class="card-text">${{ $producto->precio }}</p>
                        <form action="{{ route('carrito.agregar', ['id' => $producto->producto_id]) }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-success">Agregar al Carrito</button>
                        </form>

                        <a href="{{ route('productos.view', ['id' => $producto->producto_id]) }}" class="btn btn-secondary ms-2">Ver detalle</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</x-layout>