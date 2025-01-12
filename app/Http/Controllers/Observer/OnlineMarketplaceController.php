<?php

namespace App\Http\Controllers\Observer;

use App\Enums\EventTypeEnum;
use App\Http\Controllers\Controller;
use App\Services\OfferService;
use App\Services\OnlineMarketplaceService;
use App\Services\ProductService;

class OnlineMarketplaceController extends Controller
{
    private $marketplaceService;

    public function __construct(OnlineMarketplaceService $marketplaceService)
    {
        $this->marketplaceService = $marketplaceService;
    }

    public function index()
    {
        $onlineMarketplace = $this->marketplaceService;

        $ahmed = new Customer('Ahmed');
        $mahmoud = new Customer('Mahmoud');
        $youssef = new Customer('Youssef');

        $onlineMarketplace->subscribe(EventTypeEnum::NewProduct->value, $ahmed);
        $onlineMarketplace->subscribe(EventTypeEnum::NewOffer->value, $ahmed);
        $onlineMarketplace->subscribe(EventTypeEnum::NewOffer->value, $mahmoud);
        $onlineMarketplace->subscribe(EventTypeEnum::NewProduct->value, $youssef);

        $onlineMarketplace->addNewProduct(new ProductService('Mobile', 1000.0));
        $onlineMarketplace->addNewOffer(new OfferService('New offer with 20% discount for every item.'));
    }
}
