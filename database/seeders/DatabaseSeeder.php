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
            array(
                'idUtilisateur' => 4, 'nomUtilisateur' => 'PasDeReservation','nom' =>'vinci', 'Prenom' => 'guerra','mail'=>'supraluminique@vinci.universe', 'motDePasseUtilisateur' => 'slatumGreut', 'motDePasseValide'=> 1 ,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 5, 'nomUtilisateur' => 'Escriva','nom' =>'Escriva', 'Prenom' => 'gOublié','mail'=>'escrivaSafari@safari.com', 'motDePasseUtilisateur' => 'JeKiffeLesParkings', 'motDePasseValide'=> 0 ,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 6, 'nomUtilisateur' => 'bruney','nom' =>'faitesNousDesOrdisQuiMarchent', 'Prenom' => 'DIDIER','mail'=>'jeNeComprendspas@bloodyHell.com', 'motDePasseUtilisateur' => 'onTheFly', 'motDePasseValide'=> 0 ,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 7, 'nomUtilisateur' => 'titli','nom' =>'fastFood', 'Prenom' => 'vintage','mail'=>'çaMarcheComment@huawei.com', 'motDePasseUtilisateur' => 'lesTrains', 'motDePasseValide'=> 0 ,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 8, 'nomUtilisateur' => 'InèsMGG','nom' =>'Maganga', 'Prenom' => 'Inès','mail'=>'wtfmgg@iSpeakEngish.com', 'motDePasseUtilisateur' => 'holyShit', 'motDePasseValide'=> 0 ,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 9, 'nomUtilisateur' => 'GianniBosioFromCunt','nom' =>'Bosio', 'Prenom' => 'Gianni','mail'=>'gianniBosio@kant.com', 'motDePasseUtilisateur' => 'narutoXmanonLove', 'motDePasseValide'=> 0 ,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 11, 'nomUtilisateur' => 'MelvRedur','nom' =>'Redureau', 'Prenom' => 'Melvin','mail'=>'MelDokkan@battle.com', 'motDePasseUtilisateur' => 'CquantiqueToutça', 'motDePasseValide'=> 0 ,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 12, 'nomUtilisateur' => 'Alex','nom' =>'CHERAMNAC', 'Prenom' => 'Alexei','mail'=>'jepechobeaucouptrop@tinder.com', 'motDePasseUtilisateur' => 'rocketLeague3000€', 'motDePasseValide'=> 0 ,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 13, 'nomUtilisateur' => 'ProfDeMath','nom' =>'exponentiel', 'Prenom' => 'logarithmique','mail'=>'maths@calculatrice.com', 'motDePasseUtilisateur' => 'çacemangesansfaim', 'motDePasseValide'=> 0 ,'isAdministrateur' => false ,
            ),
        ));
        DB::table('reservations')->insert(array(
            array(
                'idReservation' => 2, 'positionFileAttente' => null , 'numeroPlace' => '0', 'utilisateur' => 2,'etatReservation' => 0, 'dateDebut' => '2020/08/10', 'dateFin' => '2020/04/17',
            ),
            array(
                'idReservation' => 3, 'positionFileAttente' => null , 'numeroPlace' => '0', 'utilisateur' => 3 , 'etatReservation' => 0, 'dateDebut' => '2020/01/29', 'dateFin' => '2020/01/20',
            ),
            array(
                'idReservation' => 4, 'positionFileAttente' => 1 , 'numeroPlace' => '1A', 'utilisateur' => 10 ,'etatReservation' => 0, 'dateDebut' => null,'dateFin' => null,
            ),
            array(
                'idReservation' => 5, 'positionFileAttente' => null , 'numeroPlace' => '2A', 'utilisateur' => 5 ,'etatReservation' => 0, 'dateDebut' => '2019/01/17','dateFin' => '2019/02/17',
            ),
            array(
                'idReservation' => 6, 'positionFileAttente' => null , 'numeroPlace' => '7A', 'utilisateur' => 5 ,'etatReservation' => 0, 'dateDebut' => '2019/07/10','dateFin' => '2019/08/10',
            ),
            array(
                'idReservation' => 7, 'positionFileAttente' => null , 'numeroPlace' => '9A', 'utilisateur' => 5 ,'etatReservation' => 0, 'dateDebut' => '2019/11/21','dateFin' => '2019/12/21',
            ),
            array(
                'idReservation' => 8, 'positionFileAttente' => null , 'numeroPlace' => '3A', 'utilisateur' => 5 ,'etatReservation' => 0, 'dateDebut' => '2020/01/10','dateFin' => '2019/02/10',
            ),
            array(
                'idReservation' => 9, 'positionFileAttente' => 3 , 'numeroPlace' => '7A', 'utilisateur' => 5 ,'etatReservation' => 0, 'dateDebut' => null,'dateFin' => null,
            ),
            array(
                'idReservation' => 10, 'positionFileAttente' => null , 'numeroPlace' => '7A', 'utilisateur' => 10 ,'etatReservation' => 1, 'dateDebut' => '2020/01/12','dateFin' => '2020/02/12',
            ),
            array(
                'idReservation' => 11, 'positionFileAttente' => 4 , 'numeroPlace' => '3A', 'utilisateur' => 6 ,'etatReservation' => 0, 'dateDebut' => null,'dateFin' => null,
            ),
            array(
                'idReservation' => 12, 'positionFileAttente' => 5 , 'numeroPlace' => '5A', 'utilisateur' => 7 ,'etatReservation' => 0, 'dateDebut' => null,'dateFin' => null,
            ),
            array(
                'idReservation' => 13, 'positionFileAttente' => 6 , 'numeroPlace' => '10A', 'utilisateur' => 9 ,'etatReservation' => 0, 'dateDebut' => null,'dateFin' => null,
            ),
            array(
                'idReservation' => 14, 'positionFileAttente' => 7 , 'numeroPlace' => '1B', 'utilisateur' => 6 ,'etatReservation' => 0, 'dateDebut' => null,'dateFin' => null,
            ),
            array(
                'idReservation' => 15, 'positionFileAttente' => null , 'numeroPlace' => '2A', 'utilisateur' => 13 ,'etatReservation' => 0, 'dateDebut' => '2019/01/28','dateFin' => '2019/02/28',
            ),
            array(
                'idReservation' => 16, 'positionFileAttente' => null , 'numeroPlace' => '7A', 'utilisateur' => 13 ,'etatReservation' => 0, 'dateDebut' => '2019/04/27','dateFin' => '2019/05/27',
            ),
            array(
                'idReservation' => 17, 'positionFileAttente' => null , 'numeroPlace' => '9A', 'utilisateur' => 13 ,'etatReservation' => 0, 'dateDebut' => '2019/12/21','dateFin' => '2020/01/21',
            ),
            array(
                'idReservation' => 18, 'positionFileAttente' => null , 'numeroPlace' => '3A', 'utilisateur' => 13,'etatReservation' => 0, 'dateDebut' => '2020/02/04','dateFin' => '2019/03/04',
            ),
            array(
                'idReservation' => 19, 'positionFileAttente' => 2 , 'numeroPlace' => '3A', 'utilisateur' => 13,'etatReservation' => 0, 'dateDebut' => null,'dateFin' => null,
            ),
        ));
    }
}
