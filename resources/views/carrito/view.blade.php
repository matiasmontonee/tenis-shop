<x-layout>
    <x-slot:title>Carrito de Compras</x-slot>

    <section class="container p-4">
        <h1 class="mb-4">Carrito de Compras</h1>

        @if (count($carrito) > 0)
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio unitario</th>
                        <th>Cantidad</th>
                        <th>Acciones</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carrito as $item)
                    <tr>
                        <td>{{ $item['nombre'] }}</td>
                        <td>${{ number_format($item['precio'], 3) }}</td>
                        <td>{{ $item['cantidad'] }}</td>
                        <td>
                            <form action="{{ route('carrito.eliminar', $item['producto_id']) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                        <td>${{ number_format($item['precio'] * $item['cantidad'], 3) }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="4" class="text-end fw-bold">Total:</td>
                        <td>${{ number_format($total, 3) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        @if ($preference)
        <div id="mercadopago-button"></div>
        @endif

        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Seguir Comprando</a>
        @else
        <p>No hay productos en el carrito.</p>
        <a href="{{ route('productos.index') }}" class="btn btn-primary">Comprar</a>
        @endif
    </section>

    @if ($preference)
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script>
        const mp = new MercadoPago('<?= config('mercadopago.public_key'); ?>');
        mp.bricks().create('wallet', 'mercadopago-button', {
            initialization: {
                preferenceId: '<?= $preference->id; ?>',
            }
        });
    </script>
    @endif
</x-layout>