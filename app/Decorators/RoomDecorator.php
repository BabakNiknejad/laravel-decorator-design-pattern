<?php

namespace App\Decorators;

use App\Contracts\IRoom;
use App\Models\Room;

class RoomDecorator implements IRoom
{
    protected $room;

    public function __construct(Room $room)
    {
        $this->room = $room;
    }

    public function getDescription(): string
    {
        return $this->room->name;
    }

    public function calculatePrice(): float
    {
        return $this->room->price;
    }
}
