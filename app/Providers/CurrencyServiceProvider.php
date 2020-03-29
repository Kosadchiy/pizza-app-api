<?php

namespace App\Providers;

use App\Services\Contracts\CurrencyServiceInterface;
use App\Services\FixerService;
use Illuminate\Support\ServiceProvider;

class CurrencyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(CurrencyServiceInterface::class, FixerService::class);
    }
}
