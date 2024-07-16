<!DOCTYPE html>
<html>
<head>
    <title>Destination Details</title>
</head>
<body>
    <h1>Destination Details</h1>
    <p><strong>Name:</strong> {{ $destination->nombre }}</p>
    <p><strong>Departure Time:</strong> {{ $destination->hora_salida }}</p>
    <p><strong>Arrival Time:</strong> {{ $destination->hora_llegada }}</p>
    <a href="{{ route('destinations.index') }}">Back to List</a>
</body>
</html>
