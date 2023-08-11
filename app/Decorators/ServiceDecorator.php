<?php

namespace App\Decorators;

use App\Contracts\IRoom;
use App\Models\Service;

class ServiceDecorator implements IRoom
{
    protected $room;
    protected $service;

    public function __construct(IRoom $room, Service $service)
    {
        $this->room = $room;
        $this->service = $service;
    }

    public function getDescription(): string
    {
        return $this->room->getDescription() . ', ' . $this->service->name;
    }

    public function calculatePrice(): float
    {
        return $this->room->calculatePrice() + $this->service->price;
    }
}
