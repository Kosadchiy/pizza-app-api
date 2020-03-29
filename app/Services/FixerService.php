<?php

namespace App\Services;

use App\Services\Contracts\CurrencyServiceInterface;
use GuzzleHttp\Client;

class FixerService implements CurrencyServiceInterface
{
    const FIXER_API_KEY = 'c757afc523443c0abe5180c9bd42763a';
    const FIXER_ENDPOINT = 'https://data.fixer.io/api/latest';

    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getRates()
    {
        return json_decode($this->client->get(self::FIXER_ENDPOINT, [
            'query' => [
                'access_key' => self::FIXER_API_KEY
            ]
        ])->getBody());
    }
}