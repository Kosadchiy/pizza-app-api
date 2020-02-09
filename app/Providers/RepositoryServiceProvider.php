<?php

namespace App\Providers;

use App\Http\Controllers\Api\MenuController;
use App\Http\Controllers\Api\OrderController;
use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\MenuRepository;
use App\Repositories\OrderRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->when(MenuController::class)
          ->needs(RepositoryInterface::class)
          ->give(MenuRepository::class);

        $this->app->when(OrderController::class)
          ->needs(RepositoryInterface::class)
          ->give(OrderRepository::class);
    }
}
