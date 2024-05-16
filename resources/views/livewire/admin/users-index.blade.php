<div>
    <div class="card">
        <div class="card-header">
            <input wire:model.live="search" class="form-control" placeholder="Search...">
        </div>
        @if ($users->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Foto</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Fecha de Creación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>
                                    <!-- Mostrar la imagen de perfil en un círculo -->
                                    <div class="w-3 h-3">
                                        @if ($user->photo)
                                            <img id="picture" src="{{ Storage::url($user->photo) }}"
                                                alt="Foto de perfil" width="60" height="60"
                                                style="border-radius: 50%;">
                                        @else
                                            <img src="{{ asset('assets/images/default-profile-image.jpg') }}"
                                                alt="Foto de perfil por defecto" width="60" height="60"
                                                style="border-radius: 50%;">
                                        @endif
                                    </div>



                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ implode(' ,', $user->getRoleNames()->toArray()) }}</td>
                                <td>{{ $user->created_at }}</td>

                                <td>
                                    <a href="{{ route('admin.users.edit', $user->id) }}"
                                        class="btn btn-primary btn-icon">
                                        <i class="fas fa-pencil-alt"></i> <!-- Agrega el ícono del lápiz -->
                                    </a>
                                    <!-- Agregar más acciones según tus necesidades -->
                                </td>
                                <td>
                                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                        onsubmit="return confirm('¿Estás seguro de borrar a este usuario?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-icon">
                                            <i class="fas fa-user-times"></i> <!-- Agrega el ícono del usuario con X -->
                                        </button>
                                    </form>
                                    <!-- Agregar más acciones según tus necesidades -->
                                </td>





                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $users->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>No users found</strong>
            </div>
        @endif
    </div>
</div>
<script>
    function confirmDelete(userId) {
        if (confirm('¿Estás seguro de borrar a este usuario?')) {
            // Si el usuario confirma, redireccionar al enlace de eliminación del usuario
            window.location.href = '/admin/users/delete/' + userId;
        }
    }
</script>
