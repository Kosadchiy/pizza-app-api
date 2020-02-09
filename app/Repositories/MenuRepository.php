<?php

namespace App\Repositories;

use App\MenuItem;
use App\Repositories\Contracts\RepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class MenuRepository implements RepositoryInterface
{
    public function index(): Collection
    {
        return MenuItem::all();
    }

    public function find(int $id)
    {
        return MenuItem::find($id);
    }

    public function create(array $data)
    {
        $menuItem = MenuItem::create($data);
        $menuItem->options()->createMany($data['options']);
        return $menuItem;
    }

    public function update(array $data)
    {
        $menuItem = MenuItem::fill($data);
        $menuItem->save();
        return $menuItem;
    }
}