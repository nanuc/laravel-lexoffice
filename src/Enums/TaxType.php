<?php

namespace Nanuc\LaravelLexoffice\Enums;

enum TaxType : string
{
    case GROSS = 'gross';
    case NET = 'net';
    case VAT_FREE = 'vatfree';
    case INTRA_COMMUNITY_SUPPLY = 'intraCommunitySupply';
    case CONSTRUCTION_SERVICE_13B = 'constructionService13b';
    case EXTERNAL_SERVICE_13B = 'externalService13b';
    case THIRD_PARTY_COUNTRY_SERVICE = 'thirdPartyCountryService';
    case THIRD_PARTY_COUNTRY_DELIVERY = 'thirdPartyCountryDelivery';
}
