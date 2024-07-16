<!DOCTYPE html>
<html>
<head>
    <title>Destinations</title>
</head>
<body>
    <h1>Listado de Destinos</h1>
    <a href="{{ route('destinations.create') }}" class="btn btn-primary mb-3">Crear Nuevo Destino</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Hora de Salida</th>
                <th>Hora de Llegada</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($destinations as $destination)
                <tr>
                    <td>{{ $destination->id }}</td>
                    <td>{{ $destination->nombre }}</td>
                    <td>{{ $destination->hora_salida }}</td>
                    <td>{{ $destination->hora_llegada }}</td>
                    <td>
                        <a href="{{ route('destinations.show', $destination->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('destinations.edit', $destination->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('destinations.destroy', $destination->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este destino?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
