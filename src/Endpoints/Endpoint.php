<?php

namespace Nanuc\LaravelLexoffice\Endpoints;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Nanuc\LaravelLexoffice\Exceptions\LexofficeException;
use Nanuc\LaravelLexoffice\Facades\Lexoffice;

class Endpoint
{
    protected function get($url)
    {
        return $this->getClient()
            ->get($url)
            ->json();
    }

    protected function post($url, $data = [])
    {
        return $this->getClient()
            ->post($url, $data)
            ->json();
    }

    private function getClient()
    {
        return Http::acceptJson()
            ->baseUrl(config('services.lexoffice.endpoint'))
            ->withToken(config('services.lexoffice.token'));
    }
}
