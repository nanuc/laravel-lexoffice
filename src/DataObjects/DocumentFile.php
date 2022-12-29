<?php

namespace Nanuc\LaravelLexoffice\DataObjects;

use Nanuc\LaravelLexoffice\Enums\LineItemType;
use Spatie\LaravelData\Data;

class DocumentFile extends Data
{
    public function __construct(
        public string $documentFileId,
    ) {}
}
