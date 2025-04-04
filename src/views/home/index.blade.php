<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100 justify-content-center align-items-center bg-light">
    <div class="container text-center">
        <h1 class="display-4 text-danger">{{ $message }}</h1>
        <a href="/pokemons/list" class="btn btn-primary mt-3">View Pokémon List</a>
    </div>
</body>
</html>
