<?php

namespace App\Enums;

enum EventTypeEnum: string
{
    case NewProduct = 'new_product';
    case NewOffer = 'new_offer';
    case JobOpening = 'job_opening';
}
