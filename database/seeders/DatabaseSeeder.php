<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('dateReservations')->insert(array(
            array(
                'dateReservation' => '2020/08/10',
            ),
            array(
                'dateReservation' => '2020/04/17',
            ),
            array(
                'dateReservation' => '2020/01/29',
            ),
            array(
                'dateReservation' => '2020/02/03',
            ),
            array(
                'dateReservation' => '2020/03/07',
            ),
            array(
                'dateReservation' => '2020/06/27',
            ),
            array(
                'dateReservation' => '2020/11/16',
            ),
            array(
                'dateReservation' => '2020/10/04',
            ),
            array(
                'dateReservation' => '2020/07/09',
            ),
            array(
                'dateReservation' => '2020/08/16',
            ),
        ));
        DB::table('parkings')->insert(array(
            array(
                'idParking' => 1,
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 2 ,
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 3 ,
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 4 ,
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 5 ,
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 6 ,
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 7 ,
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 8 ,
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 9 ,
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 10 ,
                'nbPlaces' => 10,
            ),
        ));
        DB::table('utilisateurs')->insert(array(
            array(
                'idUtilisateur' => 1, 'nomUtilisateur' => 'HugoAraujooooo', 'motDePasseUtilisateur' => 'huhuLaColle', 'motDePasseValide' => 1, 'isAdministrateur' => true ,
            ),
            array(
                'idUtilisateur' => 2, 'nomUtilisateur' => 'RomainTh', 'motDePasseUtilisateur' => 'AyaRomain', 'motDePasseValide' => 1, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 3, 'nomUtilisateur' => 'BoaJulien', 'motDePasseUtilisateur' => 'julien1234', 'motDePasseValide' => 1 , 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 10, 'nomUtilisateur' => 'inconnu', 'motDePasseUtilisateur' => 'mdpInconnu', 'motDePasseValide'=> 0 ,'isAdministrateur' => false ,
            ),
        ));
        DB::table('reservations')->insert(array(
            array(
                'idReservation' => 1, 'positionFileAttente' => 0 ,'numeroPlace' => 0, 'utilisateur' => 1 ,
            ),
            array(
                'idReservation' => 2, 'positionFileAttente' => 0 , 'numeroPlace' => 0, 'utilisateur' => 2,
            ),
            array(
                'idReservation' => 3, 'positionFileAttente' => 0 , 'numeroPlace' => 0, 'utilisateur' => 3 ,
            ),
            array(
                'idReservation' => 4, 'positionFileAttente' => 1 , 'numeroPlace' => 1, 'utilisateur' => 10 ,
            ),
        ));
    }
}
