<!DOCTYPE html>
<html>
<head>
    <title>Create Destination</title>
</head>
<body>
    <h1>Create Destination</h1>
    <form action="{{ route('destinations.store') }}" method="POST">
        @csrf
        <label for="nombre">Destino:</label>
        <input type="text" name="nombre" id="nombre">
        <label for="hora_salida">Hora de Salida:</label>
        <input type="date" name="hora_salida" id="hora_salida">
        <label for="hora_llegada">Hora de Llegada:</label>
        <input type="date" name="hora_llegada" id="hora_llegada">
        <button type="submit">Save</button>
    </form>
</body>
</html>
