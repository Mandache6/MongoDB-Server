<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Pokemon;
use App\Models\Item;

class PokemonController extends AbstractController
{
    public function index(): string
    {
        $query_params = $this->getQueryParams();

        return $this->render('pokemon.index', ['query' => $query_params]);
    }

    /**
     * Zobrazí seznam Pokémonů, případně filtrovaný podle typu.
     */
    public function list(): string
    {
        $query_params = $this->getQueryParams();
        $pokemonModel = new Pokemon($this->mongo_client);

        $type = $_GET['type'] ?? null;
        $search = $_GET['search'] ?? null;
        

        // Filtrování podle typu
        if ($type) {
            $pokemons = $pokemonModel->filterByType($type);
        } else {
            $pokemons = $pokemonModel->all();
        }
        // Filtrování podle názvu
        if ($search) {
            $pokemons = array_filter($pokemons, function ($pokemon) use ($search) {
                return stripos($pokemon['name']['english'], $search) !== false;
            });
        }
        $data = [
            'title' => 'Pokémon List',
            'pokemons' => json_decode(json_encode($pokemons), true),
            'type' => $type,
            'search' => $search,
            'query' => $query_params,
        ];

        return $this->render('pokemon.list', $data);
    }


    /**
     * Zobrazí detail pokémona podle ID.
     */
    public function details(string $id): string
    {
        $pokemonModel = new Pokemon($this->mongo_client);
        $pokemon = $pokemonModel->findById((int)$id);

        if (!$pokemon) {
            http_response_code(404);
            return $this->render('error', ['message' => "Pokémon with ID {$id} not found."]);
        }

        return $this->render('pokemon.details', ['pokemon' => $pokemon]);
    }

    /**
     * Zobrazí detail itemu podle ID.
     */
 
}
