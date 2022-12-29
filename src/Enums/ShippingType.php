<?php

namespace Nanuc\LaravelLexoffice\Enums;

enum ShippingType : string
{
    case NONE = 'none';
    case SERVICE = 'service';
    case SERVICE_PERIOD = 'serviceperiod';
    case DELIVERY = 'delivery';
    case DELIVERY_PERIOD = 'deliveryperiod';
}
