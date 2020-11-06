<?php

namespace App\Repositories;

use App\Models\Cave;

interface CaveRepositoryInterface
{
    public function getById(int $id): Cave;

    public function getByName(string $name): Cave;
}
