<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class OfferCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $offter;

    public function __construct(string $offter)
    {
        $this->offter = $offter;
    }
}
