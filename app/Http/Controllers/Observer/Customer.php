<?php

namespace App\Http\Controllers\Observer;

use App\Contracts\Subscriber;

class Customer implements Subscriber
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function notify(string $message): void
    {

        echo 'Customer '.$this->name.' received message: '.$message.PHP_EOL;
    }
}
