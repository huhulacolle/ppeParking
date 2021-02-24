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
        DB::table('dateReservation')->insert(array(
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
        DB::table('parking')->insert(array(
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
        DB::table('utilisateur')->insert(array(
            array(
                'idUtilisateur' => 1, 'nomUtilisateur' => 'HugoAraujooooo', 'motDePasseUtilisateur' => 'huhuLaColle', 'isAdministrateur' => true ,
            ),
            array(
                'idUtilisateur' => 2, 'nomUtilisateur' => 'RomainTh', 'motDePasseUtilisateur' => 'AyaRomain', 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 3, 'nomUtilisateur' => 'BoaJulien', 'motDePasseUtilisateur' => 'julien1234', 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 10, 'nomUtilisateur' => 'inconnu', 'motDePasseUtilisateur' => 'mdpInconnu', 'isAdministrateur' => false ,
            ),
        ));
        DB::table('reservation')->insert(array(
            array(
                'idReservation' => 1, 'positionFileAttente' => 0 ,'numeroPlace' => DB::table('parking')->select('idParking')->where('idParking','=',1)->get(), 'utilisateur' => 1 ,
            ),
            array(
                'idReservation' => 2, 'positionFileAttente' => 0 , 'numeroPlace' => 0, 'utilisateur' => 2,
            ),
            array(
                'idReservation' => 3, 'positionFileAttente' => 0 , 'numeroPlace' => 0, 'utilisateur' => 3 ,
            ),
            array(
                'idReservation' => 4, 'positionFileAttente' => 0 , 'numeroPlace' => 1, 'utilisateur' => 4 ,
            ),
        ));
    }
}
