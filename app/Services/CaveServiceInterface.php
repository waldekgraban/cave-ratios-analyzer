<?php

namespace App\Services;

use App\Models\Cave;

interface CaveServiceInterface
{
    public function getById(int $id): Cave;

    public function getByName(string $name): Cave;
}
