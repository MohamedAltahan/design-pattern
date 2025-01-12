<?php

namespace App\Http\Controllers\Observer;

use App\Contracts\Subscriber;

class JobFinder implements Subscriber
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function notify(string $message): void
    {
        echo 'Customer '.$this->name.' received message: '.$message.PHP_EOL;
    }
}
