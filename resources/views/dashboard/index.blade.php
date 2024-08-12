<x-layout>
    <x-slot:title>Dashboard</x-slot>

    <section class="container p-4">
        <h1 class="text-center mb-4">Dashboard</h1>

        <div class="card mb-4">
            <div class="card-header">
                <h2 class="h3">Productos más vendidos</h2>
            </div>
            <div class="card-body">
                @if ($productosMasComprados->isEmpty())
                    <p>No hay datos para mostrar.</p>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Productos</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productosMasComprados as $producto)
                                <tr>
                                    <td>{{ $producto->nombre }}</td>
                                    <td>{{ $producto->compras_count }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h2 class="h3">Meses con Mayor Facturación</h2>
            </div>
            <div class="card-body">
                @if (empty($facturacionPorMes))
                    <p>No hay datos para mostrar.</p>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Mes</th>
                                <th>Total facturado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($facturacionPorMes as $facturacion)
                                <tr>
                                    <td>{{ $facturacion->fecha }}</td>
                                    <td>${{ number_format($facturacion->total) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h2 class="h3">Usuarios registrados por mes</h2>
            </div>
            <div class="card-body">
                @if (empty($usuariosRegistrados))
                    <p>No hay datos para mostrar.</p>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Total de usuarios</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuariosRegistrados as $registro)
                                <tr>
                                    <td>{{ $registro->fecha }}</td>
                                    <td>{{ $registro->total }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h2 class="h3">Total de ingresos de los últimos 5 años</h2>
            </div>
            <div class="card-body">
                @if (empty($ingresosAnuales))
                    <p>No hay datos para mostrar.</p>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Año</th>
                                <th>Total ingresado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ingresosAnuales as $ingreso)
                                <tr>
                                    <td>{{ $ingreso->year }}</td>
                                    <td>${{ number_format($ingreso->total, 2) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </section>
</x-layout>