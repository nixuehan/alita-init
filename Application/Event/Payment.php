<?php
namespace Application\Event;

use Alita\Event;

class Payment implements Event
{
    public function handle(array $params)
    {
        return $params;
    }
}