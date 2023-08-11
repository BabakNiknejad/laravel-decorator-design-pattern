<?php

namespace App\Http\Controllers;

use App\Decorators\RoomDecorator;
use App\Decorators\ServiceDecorator;
use App\Models\Room;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function roomQuote(Request $request)
    {
        $room = Room::findOrFail($request->input('room_id'));

        $roomDecorator = new RoomDecorator($room);

        foreach ($room->services as $service) {
            $roomDecorator = new ServiceDecorator($roomDecorator, $service);
        }

        return response()->json([
            'description' => $roomDecorator->getDescription(),
            'price' => $roomDecorator->calculatePrice()
        ]);
    }
}
