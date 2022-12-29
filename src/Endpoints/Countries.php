<?php

namespace Nanuc\LaravelLexoffice\Endpoints;

class Countries extends Endpoint
{
    public function retrieveListOfCountries()
    {
        return $this->get('countries');
    }
}
