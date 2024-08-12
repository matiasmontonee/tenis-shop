<x-layout>
    <x-slot:title>{{ $producto->nombre }}</x-slot>

    <section class="container p-4">
        <h1 class="mb-4">{{ $producto->nombre }}</h1>

        <div class="row">
            <div class="col-md-4 mb-4">
                <img src="{{ asset($producto->imagen) }}" class="card-img-top border border-success" alt="{{ $producto->nombre }}">
            </div>
            <div class="col-md-8 mb-4">
                <dl>
                    <dt>Marca</dt>
                    <dd>{{ $producto->marca }}</dd>
                    <dt>Precio</dt>
                    <dd>${{ $producto->precio }}</dd>
                    <dt>Categorías</dt>
                    <dd>
                        @forelse($producto->categorias as $categoria)
                            <span class="badge bg-primary">{{ $categoria->nombre }}</span>
                        @empty
                            <i>Sin categoría</i>
                        @endforelse
                    </dd>
                    <dt>Peso</dt>
                    <dd>{{ $producto->peso->peso }}G</dd>
                </dl>
                <p>{{ $producto->descripcion }}</p>
                <form action="{{ route('carrito.agregar', ['id' => $producto->producto_id]) }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-success">Agregar al Carrito</button>
                </form>
                <a href="{{ route('productos.index') }}" class="btn btn-secondary ms-2">Volver</a>
            </div>
        </div>
    </section>
</x-layout>