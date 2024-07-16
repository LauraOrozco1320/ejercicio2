<!DOCTYPE html>
<html>
<head>
    <title>Origins</title>
</head>
<body>
    <h1>Listado de Orígenes</h1>
    <a href="{{ route('origins.create') }}" class="btn btn-primary mb-3">Crear Nuevo Origen</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Sala de Abordaje</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($origins as $origin)
                <tr>
                    <td>{{ $origin->id }}</td>
                    <td>{{ $origin->name }}</td>
                    <td>{{ $origin->sala_abordaje }}</td>
                    <td>
                        <a href="{{ route('origins.show', $origin->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('origins.edit', $origin->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('origins.destroy', $origin->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este origen?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
