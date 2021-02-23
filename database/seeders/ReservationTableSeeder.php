<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\reservation;

class ReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        reservation::create(
            ['idReservation' => 1, 'positionFileAttente' => 0 ,'numeroPlace' => 0, 'idUtilisateur' => 1 ],
            ['idReservation' => 2, 'positionFileAttente' => 0 , 'numeroPlace' => 0, 'idUtilisateur' => 2 ],
            ['idReservation' => 3, 'positionFileAttente' => 0 , 'numeroPlace' => 0, 'idUtilisateur' => 3 ],
            ['idReservation' => 4, 'positionFileAttente' => 0 , 'numeroPlace' => 1, 'idUtilisateur' => 4 ]
        );
    }
}
