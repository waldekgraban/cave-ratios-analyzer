<?php

namespace App\Repositories;

use App\Repositories\CaveRepositoryInterface;
use App\Models\Cave;

class CaveRepository implements CaveRepositoryInterface
{
    public function getById(int $id): Cave
    {
        return Cave::where('id', $id)->first();
    }

    public function getByName(string $name): Cave
    {
        return Cave::where('name', $name)->first();
    }
}
