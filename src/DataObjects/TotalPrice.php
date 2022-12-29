<?php

namespace Nanuc\LaravelLexoffice\DataObjects;

use Spatie\LaravelData\Data;

class TotalPrice extends Data
{
    public function __construct(
        public string $currency,
    ) {}
}
