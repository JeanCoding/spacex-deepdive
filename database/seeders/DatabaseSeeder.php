<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;
use App\Models\Flight;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $locations = [
            [
                'name' => 'Amsterdam',
                'is_on_water' => false,
            ],
            [
                'name' => 'Berlin',
                'is_on_water' => false,
            ],
            [
                'name' => 'Tokyo',
                'is_on_water' => false,
            ],
            [
                'name' => 'Paris',
                'is_on_water' => true,
            ],
            [
                'name' => 'New York',
                'is_on_water' => false,
            ],
            [
                'name' => 'Dubai',
                'is_on_water' => false,
            ],
        ];

        foreach ($locations as $location) {
            Location::create($location);
        }

        $flights = [
            [
                'departure_id' => 1,
                'arrival_id' => 2,
                'flight_time' => 30,
                'co2' => 1367,
                'date' => '2023-05-08',
            ],
            [
                'departure_id' => 5,
                'arrival_id' => 3,
                'flight_time' => 30,
                'co2' => 1367,
                'date' => '2023-05-08',
            ],
            [
                'departure_id' => 2,
                'arrival_id' => 1,
                'flight_time' => 25,
                'co2' => 1200,
                'date' => '2023-10-05',
            ],
            [
                'departure_id' => 6,
                'arrival_id' => 5,
                'flight_time' => 25,
                'co2' => 800,
                'date' => '2023-10-05',
            ],
            [
                'departure_id' => 2,
                'arrival_id' => 4,
                'flight_time' => 25,
                'co2' => 915,
                'date' => '2023-10-05',
            ],
            [
                'departure_id' => 3,
                'arrival_id' => 6,
                'flight_time' => 25,
                'co2' => 1200,
                'date' => '2023-10-05',
            ],
        ];

        foreach ($flights as $flight) {
            Flight::create($flight);
        }
    }
}
