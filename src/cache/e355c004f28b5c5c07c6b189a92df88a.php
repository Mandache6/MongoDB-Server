<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <h1 class="text-center mb-4 text-primary">Pokémon List</h1>
        
        <form action="/pokemons/list" method="GET" class="mb-4">
            <div class="row g-2 align-items-center">
                <!-- Vyhledávací pole -->
                <div class="col-md-6">
                    <input type="text" name="search" class="form-control" placeholder="Search Pokémon..."
                        value="<?= htmlspecialchars($_GET['search'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                </div>
                <div class="row g-2 align-items-center">
                    <div class="col-auto">
                        <label for="type" class="col-form-label">Filter by Type:</label>
                    </div>
                    <div class="col-auto">
                        <select name="type" id="type" class="form-select">
                            <option value="">All</option>
                            <option value="Grass" <?php echo $type == 'Grass' ? 'selected' : ''; ?>>Grass</option>
                            <option value="Fire" <?php echo $type == 'Fire' ? 'selected' : ''; ?>>Fire</option>
                            <option value="Water" <?php echo $type == 'Water' ? 'selected' : ''; ?>>Water</option>
                            <option value="Electric" <?php echo $type == 'Electric' ? 'selected' : ''; ?>>Electric</option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </div>
        </form>

        <div class="row g-4">
            <?php $__currentLoopData = $pokemons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pokemon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card shadow-sm border-0">
                    <a href="/pokemons/<?php echo e($pokemon['id']); ?>" class="text-decoration-none text-dark">
                        <img src="/images/<?php echo e(str_pad($pokemon['id'], 3, 0,STR_PAD_LEFT)); ?>.png" class="card-img-top p-3" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold"><?php echo e($pokemon['name']['english']); ?></h5>
                        </div>
                    </a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</body>


</html><?php /**PATH /var/www/html/views/pokemon/list.blade.php ENDPATH**/ ?>