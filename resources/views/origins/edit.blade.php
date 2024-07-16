<!DOCTYPE html>
<html>
<head>
    <title>Edit Origin</title>
</head>
<body>
    <h1>Edit Origin</h1>
    <form action="{{ route('origins.update', $origin->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $origin->name }}">
        <label for="sala_abordaje">Sala de Abordaje:</label>
        <input type="text" name="sala_abordaje" id="sala_abordaje" value="{{ $origin->sala_abordaje }}">
        <button type="submit">Save</button>
    </form>
</body>
</html>
