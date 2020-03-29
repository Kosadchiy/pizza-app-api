<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Contracts\CurrencyServiceInterface;

class CurrencyController extends Controller
{
    protected $currencyService;

    public function __construct(CurrencyServiceInterface $currencyService)
    {
        $this->currencyService = $currencyService;
    }

    public function getUSDRate()
    {
        $USDRate = 1 / $this->currencyService->getRates()->rates->USD;
        return response()->json([
            'rate' => $USDRate
        ]);
    }
}
