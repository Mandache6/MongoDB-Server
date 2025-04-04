<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pokemon['name']['english'] }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-lg p-4 text-center">
            <h1 class="text-primary">{{ $pokemon['name']['english'] }}</h1>
            <hr>
            <div class="d-flex justify-content-center">
                <img src="/images/{{ str_pad($pokemon['id'], 3, 0, STR_PAD_LEFT) }}.png" class="img-fluid" style="max-width: 300px;" alt="">
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <h4 class="text-secondary">Base Stats</h4>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>HP:</strong> {{ $pokemon['base']['HP'] }}</li>
                        <li class="list-group-item"><strong>Attack:</strong> {{ $pokemon['base']['Attack'] }}</li>
                        <li class="list-group-item"><strong>Defense:</strong> {{ $pokemon['base']['Defense'] }}</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4 class="text-secondary"> &nbsp; </h4>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Sp. Attack:</strong> {{ $pokemon['base']['Sp. Attack'] }}</li>
                        <li class="list-group-item"><strong>Sp. Defense:</strong> {{ $pokemon['base']['Sp. Defense'] }}</li>
                        <li class="list-group-item"><strong>Speed:</strong> {{ $pokemon['base']['Speed'] }}</li>
                    </ul>
                </div>
            </div>
            <div class="mt-4">
                <p class="fw-bold"><strong>Type:</strong>
                    @foreach ($pokemon['type'] as $type)
                    <span class="badge bg-success px-3 py-2">{{ $type }}</span>
                    @endforeach
                </p>
            </div>
            <div class="mt-3">
                <a href="/pokemons/list" class="btn btn-primary px-4 py-2">Back to List</a>
            </div>

        </div>
</body>

</html>