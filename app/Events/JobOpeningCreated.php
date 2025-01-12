<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class JobOpeningCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $job;

    public function __construct(string $job)
    {
        $this->job = $job;
    }
}
