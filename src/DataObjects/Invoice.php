<?php

namespace Nanuc\LaravelLexoffice\DataObjects;

use Carbon\Carbon;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Casts\DateTimeInterfaceCast;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Transformers\DateTimeInterfaceTransformer;
use Taggy\TaggyBase\Enums\InvoiceInterval;

class Invoice extends Data
{
    public function __construct(
        #[WithCast(DateTimeInterfaceCast::class, format: DATE_RFC3339_EXTENDED)]
        #[WithTransformer(DateTimeInterfaceTransformer::class, format: DATE_RFC3339_EXTENDED)]
        public ?Carbon $voucherDate = null,
        public ?Address $address = null,
        #[DataCollectionOf(LineItem::class)]
        public ?DataCollection $lineItems = null,
        public ?TotalPrice $totalPrice = null,
        public ?TaxConditions $taxConditions = null,
        public ?ShippingConditions $shippingConditions = null,
        public ?string $id = null,
        public ?string $voucherNumber = null,
    ) {}
}
