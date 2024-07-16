<!DOCTYPE html>
<html>
<head>
    <title>Origin Details</title>
</head>
<body>
    <h1>Origin Details</h1>
    <p><strong>Name:</strong> {{ $origin->name }}</p>
    <p><strong>Sala de Abordaje:</strong> {{ $origin->sala_abordaje }}</p>
    <a href="{{ route('origins.index') }}">Back to List</a>
</body>
</html>
