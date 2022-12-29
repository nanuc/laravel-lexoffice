<?php

namespace Nanuc\LaravelLexoffice\DataObjects;

use Spatie\LaravelData\Data;

class UnitPrice extends Data
{
    public function __construct(
        public string $currency,
        public float $netAmount,
        public float $grossAmount,
        public float $taxRatePercentage,
    ) {}
}
