<?php

namespace Nanuc\LaravelLexoffice\DataObjects;

use Carbon\Carbon;
use Nanuc\LaravelLexoffice\Enums\ShippingType;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Casts\DateTimeInterfaceCast;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Transformers\DateTimeInterfaceTransformer;

class ShippingConditions extends Data
{
    public function __construct(
        public ShippingType $shippingType,
        #[WithCast(DateTimeInterfaceCast::class, format: DATE_RFC3339_EXTENDED)]
        #[WithTransformer(DateTimeInterfaceTransformer::class, format: DATE_RFC3339_EXTENDED)]
        public ?Carbon $shippingDate,
        #[WithCast(DateTimeInterfaceCast::class, format: DATE_RFC3339_EXTENDED)]
        #[WithTransformer(DateTimeInterfaceTransformer::class, format: DATE_RFC3339_EXTENDED)]
        public ?Carbon $shippingEndDate,
    ) {}
}
