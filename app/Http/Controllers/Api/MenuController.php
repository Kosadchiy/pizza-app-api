<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\RepositoryInterface;

class MenuController extends Controller
{
    protected $menuRepository;

    public function __construct(RepositoryInterface $menuRepository)
    {
        $this->menuRepository = $menuRepository;
    }

    public function index()
    {
        $items = $this->menuRepository->index();
        return response()->json([
            'data' => $items
        ]);
    }
}
