<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pokémon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center text-warning">Edit Pokémon</h2>
    <form action="/pokemons/update/{{ $pokemon['_id'] }}" method="POST" class="mt-4">
        <div class="mb-3">
            <label class="form-label">English Name</label>
            <input type="text" name="name_english" class="form-control" value="{{ $pokemon['name']['english'] }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Type (comma separated)</label>
            <input type="text" name="type" class="form-control" value="{{ implode(',', $pokemon['type']) }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">HP</label>
            <input type="number" name="hp" class="form-control" value="{{ $pokemon['base']['HP'] }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Attack</label>
            <input type="number" name="attack" class="form-control" value="{{ $pokemon['base']['Attack'] }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Defense</label>
            <input type="number" name="defense" class="form-control" value="{{ $pokemon['base']['Defense'] }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Pokémon</button>
    </form>
</div>

</body>
</html>
