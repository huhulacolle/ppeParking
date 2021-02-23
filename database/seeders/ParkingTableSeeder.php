<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\parking;

class ParkingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        parking::create(
            ['numeroPlace' => 1 ,'nbPlaces' => 10],
            ['numeroPlace' => 2 ,'nbPlaces' => 10],
            ['numeroPlace' => 3 ,'nbPlaces' => 10],
            ['numeroPlace' => 4 ,'nbPlaces' => 10],
            ['numeroPlace' => 5 ,'nbPlaces' => 10],
            ['numeroPlace' => 6 ,'nbPlaces' => 10],
            ['numeroPlace' => 7 ,'nbPlaces' => 10],
            ['numeroPlace' => 8 ,'nbPlaces' => 10],
            ['numeroPlace' => 9 ,'nbPlaces' => 10],
            ['numeroPlace' => 10 ,'nbPlaces' => 10]
        );
    }
}
