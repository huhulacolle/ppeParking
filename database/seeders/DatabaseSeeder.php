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
        // DB::table('dateReservations')->insert(array(
        //     array(
        //         'dateReservation' => '2020/08/10',
        //     ),
        //     array(
        //         'dateReservation' => '2020/04/17',
        //     ),
        //     array(
        //         'dateReservation' => '2020/01/29',
        //     ),
        //     array(
        //         'dateReservation' => '2020/02/03',
        //     ),
        //     array(
        //         'dateReservation' => '2020/03/07',
        //     ),
        //     array(
        //         'dateReservation' => '2020/06/27',
        //     ),
        //     array(
        //         'dateReservation' => '2020/11/16',
        //     ),
        //     array(
        //         'dateReservation' => '2020/10/04',
        //     ),
        //     array(
        //         'dateReservation' => '2020/07/09',
        //     ),
        //     array(
        //         'dateReservation' => '2020/08/16',
        //     ),
        // ));
        DB::table('parkings')->insert(array(
            array(
                'idParking' => 1,
                'numeroPlace'=> '1A',
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 2 ,
                'numeroPlace'=> '2A',
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 3 ,
                'numeroPlace'=> '3A',
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 4 ,
                'numeroPlace'=> '4A',
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 5 ,
                'numeroPlace'=> '5A',
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 6 ,
                'numeroPlace'=> '6A',
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 7 ,
                'numeroPlace'=> '7A',
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 8 ,
                'numeroPlace'=> '8A',
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 9 ,
                'numeroPlace'=> '9A',
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 10 ,
                'numeroPlace'=> '10A',
                'nbPlaces' => 10,
            ),
        ));
        DB::table('utilisateurs')->insert(array(
            array(
                'idUtilisateur' => 1, 'nomUtilisateur' => 'HugoAraujooooo','nom' =>'Hugo', 'Prenom' => 'Araujo','mail'=>'laTourInfernale@hotmail.com', 'motDePasseUtilisateur' => 'huhuLaColle', 'motDePasseValide' => 1, 'isAdministrateur' => true ,
            ),
            array(
                'idUtilisateur' => 2, 'nomUtilisateur' => 'RomainTh','nom' =>'Thiriot', 'Prenom' => 'RomainTmtc','mail'=>'ayaRT@hotmail.com', 'motDePasseUtilisateur' => 'AyaRomain', 'motDePasseValide' => 1, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 3, 'nomUtilisateur' => 'BoaJulien','nom' =>'Bois', 'Prenom' => 'Julien','mail'=>'julienInconnu@gmail.com', 'motDePasseUtilisateur' => 'julien1234', 'motDePasseValide' => 1 , 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 10, 'nomUtilisateur' => 'inconnu','nom' =>'zagzag', 'Prenom' => 'rh','mail'=>'royaumeDesRH@rhworld.com', 'motDePasseUtilisateur' => 'mdpInconnu', 'motDePasseValide'=> 0 ,'isAdministrateur' => false ,
            ),
        ));
        DB::table('reservations')->insert(array(
            array(
                'idReservation' => 2, 'positionFileAttente' => 0 , 'numeroPlace' => 0, 'utilisateur' => 2,'etatReservation' => 'validé', 'dateDebut' => '2020/08/10', 'dateFin' => '2020/04/17',
            ),
            array(
                'idReservation' => 3, 'positionFileAttente' => 0 , 'numeroPlace' => 0, 'utilisateur' => 3 , 'etatReservation' => 'validé', 'dateDebut' => '2020/01/29', 'dateFin' => '2020/01/20',
            ),
            array(
                'idReservation' => 4, 'positionFileAttente' => 1 , 'numeroPlace' => 1, 'utilisateur' => 10 ,'etatReservation' => 'validé', 'dateDebut' => null,'dateFin' => null,
            ),
        ));
    }
}
