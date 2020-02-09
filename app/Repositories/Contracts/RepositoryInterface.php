<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface RepositoryInterface
{
    public function index(): Collection;

    public function find(int $id);

    public function create(array $data);

    public function update(array $data);
}