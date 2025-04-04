<?php

namespace App\Models;

use MongoDB\Client;

class Item extends BaseModel
{
    protected $collection;

    public function __construct(Client $mongoClient)
    {
        // Správné připojení ke kolekci
        $this->collection = $mongoClient->selectCollection('pokedex', 'items');
    }

    public function getCollectionName(): string
    {
        return 'items';
    }

    public function findById(int $id): ?array
    {
        $result = $this->collection->findOne(['id' => $id]);
        return $result ? json_decode(json_encode($result), true) : null;
    }

    public function findByName(string $name): ?array
    {
        $result = $this->collection->findOne(['name.english' => $name])?->getArrayCopy();
        ddd($result);
        return $result ? json_decode(json_encode($result), true) : null;
    }
}
