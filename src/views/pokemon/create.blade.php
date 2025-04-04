<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Pokémon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center text-primary">Add New Pokémon</h2>
    <form action="/pokemons/store" method="POST" class="mt-4">
        <div class="mb-3">
            <label class="form-label">ID</label>
            <input type="number" name="id" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">English Name</label>
            <input type="text" name="name_english" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Type (comma separated)</label>
            <input type="text" name="type" class="form-control" placeholder="e.g. Grass, Poison" required>
        </div>
        <div class="mb-3">
            <label class="form-label">HP</label>
            <input type="number" name="hp" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Attack</label>
            <input type="number" name="attack" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Defense</label>
            <input type="number" name="defense" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Add Pokémon</button>
    </form>
</div>

</body>
</html>
