<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            ['name' => 'Internet Access', 'price' => 10],
            ['name' => 'Breakfast', 'price' => 20],
            ['name' => 'Gym Access', 'price' => 5]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
