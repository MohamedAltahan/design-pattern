<?php

namespace App\Contracts;

interface Subscriber
{
    public function notify(string $subject): void;
}
