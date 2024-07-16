<!DOCTYPE html>
<html>
<head>
    <title>Edit Destination</title>
</head>
<body>
    <h1>Edit Destination</h1>
    <form action="{{ route('destinations.update', $destination->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Name:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $destination->nombre }}">
        <label for="hora_salida">Departure Time:</label>
        <input type="date" name="hora_salida" id="hora_salida" value="{{ $destination->hora_salida }}">
        <label for="hora_llegada">Arrival Time:</label>
        <input type="date" name="hora_llegada" id="hora_llegada" value="{{ $destination->hora_llegada }}">
        <button type="submit">Save</button>
    </form>
</body>
</html>
