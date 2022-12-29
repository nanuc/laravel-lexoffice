<?php

namespace Nanuc\LaravelLexoffice\DataObjects;

use Nanuc\LaravelLexoffice\Enums\LineItemType;
use Spatie\LaravelData\Data;

class LineItem extends Data
{
    public function __construct(
        public LineItemType $type,
        public string $name,
        public ?float $quantity,
        public ?string $unitName,
        public UnitPrice $unitPrice,
    ) {}
}
