<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\dateReservation;

class DateReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        dateReservation::create(
            ['dateReservation' => '2020/08/10'],
            ['dateReservation' => '2020/04/17'],
            ['dateReservation' => '2020/01/29'],
            ['dateReservation' => '2020/02/03'],
            ['dateReservation' => '2020/03/07'],
            ['dateReservation' => '2020/06/27'],
            ['dateReservation' => '2020/11/16'],
            ['dateReservation' => '2020/10/04'],
            ['dateReservation' => '2020/07/09'],
            ['dateReservation' => '2020/08/16']
        );
    }
}
