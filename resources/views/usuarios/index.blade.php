<x-layout>
    <x-slot:title>Usuarios</x-slot>

    <section class="container p-4">
        <h1 class="mb-4">Usuarios registrados</h1>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Compras</th>
                        <th>Registro</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>  
                            <td>{{ $user->email }}</td>
                            <td>
                                @if ($user->is_admin)
                                    Administrador
                                @else
                                    Usuario
                                @endif
                            </td>
                            <td><a href="{{ route('usuarios.view', ['id' => $user->id]) }}" class="btn btn-primary ms-2">Ver</a></td>
                            <td>{{ $user->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-layout>