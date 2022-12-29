<?php

namespace Nanuc\LaravelLexoffice;

use Nanuc\LaravelLexoffice\Endpoints\Countries;
use Nanuc\LaravelLexoffice\Endpoints\Files;
use Nanuc\LaravelLexoffice\Endpoints\Invoices;

class LaravelLexofficeFactory
{
    public function countries()
    {
        return new Countries();
    }

    public function invoices()
    {
        return new Invoices();
    }

    public function files()
    {
        return new Files();
    }
}
