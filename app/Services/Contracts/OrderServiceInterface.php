<?php

namespace App\Services\Contracts;

interface OrderServiceInterface
{
    public function checkItems(array $data): array;
}