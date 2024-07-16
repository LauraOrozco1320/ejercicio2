<!DOCTYPE html>
<html>
<head>
    <title>Create Origin</title>
</head>
<body>
    <h1>Create Origin</h1>
    <form action="{{ route('origins.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <label for="sala_abordaje">Sala de Abordaje:</label>
        <input type="text" name="sala_abordaje" id="sala_abordaje">
        <button type="submit">Save</button>
    </form>
</body>
</html>
