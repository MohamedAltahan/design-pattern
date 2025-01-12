<?php

namespace App\Services;

use App\Contracts\Subscriber;
use App\Enums\EventTypeEnum;
use App\Events\OfferCreated;
use App\Events\ProductCreated;

class OnlineMarketplaceService
{
    private $subscribers;

    private $products;

    private $offers;

    public function __construct()
    {
        $this->initSubscriberEvents();
    }

    public function initSubscriberEvents()
    {
        $this->subscribers[EventTypeEnum::NewOffer->value] = [];
        $this->subscribers[EventTypeEnum::NewProduct->value] = [];
        $this->subscribers[EventTypeEnum::JobOpening->value] = [];
    }

    public function subscribe(string $eventType, Subscriber $subscriber)
    {
        $this->subscribers[$eventType][] = $subscriber;
    }

    public function unsubscribe(string $eventType, Subscriber $subscriber)
    {
        $this->subscribers[$eventType] = array_filter(
            $this->subscribers[$eventType],
            function ($existingSubscriber) use ($subscriber) {

                return $existingSubscriber !== $subscriber;
            }
        );
    }

    public function addNewProduct(ProductService $product)
    {
        $this->products[] = $product;
        $this->notifySubscribers(EventTypeEnum::NewProduct->value, 'New product is added: '.$product->getName());
        event(new ProductCreated('xxxxx'));
    }

    public function addNewJobOpening(string $jobTitle)
    {
        $this->notifySubscribers(EventTypeEnum::JobOpening->value, 'New opening position is available: '.$jobTitle);
    }

    public function addNewOffer(OfferService $offer)
    {
        $this->offers[] = $offer;
        $this->notifySubscribers(EventTypeEnum::NewOffer->value, 'New offer is added: '.$offer->getMessage());
        event(new OfferCreated('xxxxx'));
    }

    public function notifySubscribers($eventType, $message)
    {
        foreach ($this->subscribers[$eventType] as $subscriber) {
            $subscriber->notify($message);
        }
    }
}
