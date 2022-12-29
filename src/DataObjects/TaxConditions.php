<?php

namespace Nanuc\LaravelLexoffice\DataObjects;

use Carbon\Carbon;
use Nanuc\LaravelLexoffice\Enums\TaxType;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Casts\DateTimeInterfaceCast;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Transformers\DateTimeInterfaceTransformer;
use Taggy\TaggyBase\Enums\InvoiceInterval;

class TaxConditions extends Data
{
    public function __construct(
        public TaxType $taxType,
    ) {}
}
