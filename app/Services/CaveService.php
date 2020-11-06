<?php

namespace App\Services;

use App\Services\CaveServiceInterface;
use App\Models\Cave;
use App\Repositories\CaveRepositoryInterface;

class CaveService implements CaveServiceInterface
{
    private CaveRepositoryInterface $caveRepository;

    public function __construct(CaveRepositoryInterface $caveRepository)
    {
        $this->caveRepository  = $caveRepository;
    }

    public function getById(int $id): Cave
    {
        return $this->caveRepository->getById($id);
    }

    public function getByName(string $name): Cave
    {
        return $this->caveRepository->getByName($name);
    }
}
