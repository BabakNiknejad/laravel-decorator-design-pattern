<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = [
            ['name' => 'Standard Room', 'price' => 100],
            ['name' => 'Deluxe Room', 'price' => 150]
        ];

        foreach ($rooms as $room) {
            Room::create($room);
        }
    }
}
