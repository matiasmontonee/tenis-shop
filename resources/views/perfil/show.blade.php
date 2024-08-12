<x-layout>
    <x-slot:title>Perfil de Usuario</x-slot>

    <section class="container p-4">
       <h1 class="text-center mb-4">Mi perfil</h1>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2 class="h3">Datos Personales</h2>
                <a href="{{ route('perfil.edit') }}" class="btn btn-sm btn-outline-primary">Editar Información</a>
            </div>
            <div class="card-body">
                <p><strong>ID:</strong> {{ $user->id }}</p>
                <p><strong>Nombre:</strong> {{ $user->name }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Fecha de Registro:</strong> {{ $user->created_at->format('d/m/Y') }}</p>
                <p><strong>Rol:</strong> {{ $user->is_admin ? 'Administrador' : 'Usuario' }}</p>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2 class="h3">Historial de Compras</h2>
            </div>
            <div class="card-body">
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
                        <p>No has realizado ninguna compra.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
</x-layout>