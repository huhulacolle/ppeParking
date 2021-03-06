<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\reservation;
use App\Models\utilisateur;
use App\Models\parking;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        parking::insert(array(
            array(
                'idParking' => 1,
                'numeroPlace'=> '1A',
            ),
            array(
                'idParking' => 2 ,
                'numeroPlace'=> '2A',
            ),
            array(
                'idParking' => 3 ,
                'numeroPlace'=> '3A',
            ),
            array(
                'idParking' => 4 ,
                'numeroPlace'=> '4A',
            ),
            array(
                'idParking' => 5 ,
                'numeroPlace'=> '5A',
            ),
            array(
                'idParking' => 6 ,
                'numeroPlace'=> '6A',
            ),
            array(
                'idParking' => 7 ,
                'numeroPlace'=> '7A',
            ),
            array(
                'idParking' => 8 ,
                'numeroPlace'=> '8A',
            ),
            array(
                'idParking' => 9 ,
                'numeroPlace'=> '9A',
            ),
            array(
                'idParking' => 10 ,
                'numeroPlace'=> '10A',
            ),
        ));
        utilisateur::insert(array(
            array(
                'idUtilisateur' => 1, 'nomUtilisateur' => 'HugoAraujooooo','nom' =>'Hugo', 'Prenom' => 'Araujo','mail'=>'laTourInfernale@hotmail.com', 'motDePasseUtilisateur' => Hash::make('huhuLaColle'), 'estInscrit' => true, 'isAdministrateur' => true ,
            ),
            array(
                'idUtilisateur' => 2, 'nomUtilisateur' => 'RomainTh','nom' =>'Thiriot', 'Prenom' => 'RomainTmtc','mail'=>'ayaRT@hotmail.com', 'motDePasseUtilisateur' => Hash::make('AyaRomain'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 3, 'nomUtilisateur' => 'BoaJulien','nom' =>'Bois', 'Prenom' => 'Julien','mail'=>'julienInconnu@gmail.com', 'motDePasseUtilisateur' => Hash::make('julien1234'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 10, 'nomUtilisateur' => 'inconnu','nom' =>'zagzag', 'Prenom' => 'rh','mail'=>'royaumeDesRH@rhworld.com', 'motDePasseUtilisateur' => Hash::make('mdpInconnu') ,'estInscrit' => true,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 4, 'nomUtilisateur' => 'PasDeReservation','nom' =>'vinci', 'Prenom' => 'guerra','mail'=>'supraluminique@vinci.universe', 'motDePasseUtilisateur' => Hash::make('slatumGreut'),'estInscrit' => false,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 5, 'nomUtilisateur' => 'Escriva','nom' =>'Escriva', 'Prenom' => 'gOublié','mail'=>'escrivaSafari@safari.com', 'motDePasseUtilisateur' => Hash::make('JeKiffeLesParkings') ,'estInscrit' => true,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 6, 'nomUtilisateur' => 'bruney','nom' =>'faitesNousDesOrdisQuiMarchent', 'Prenom' => 'DIDIER','mail'=>'jeNeComprendspas@bloodyHell.com', 'motDePasseUtilisateur' => Hash::make('onTheFly'),'estInscrit' => true,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 7, 'nomUtilisateur' => 'titli','nom' =>'fastFood', 'Prenom' => 'vintage','mail'=>'çaMarcheComment@huawei.com', 'motDePasseUtilisateur' => Hash::make('lesTrains') ,'estInscrit' => true,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 8, 'nomUtilisateur' => 'InèsMGG','nom' =>'Maganga', 'Prenom' => 'Inès','mail'=>'wtfmgg@iSpeakEngish.com', 'motDePasseUtilisateur' => Hash::make('holyShit') ,'estInscrit' => true,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 9, 'nomUtilisateur' => 'GianniBosioFromCunt','nom' =>'Bosio', 'Prenom' => 'Gianni','mail'=>'gianniBosio@kant.com', 'motDePasseUtilisateur' => Hash::make('narutoXmanonLove') ,'estInscrit' => true,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 11, 'nomUtilisateur' => 'MelvRedur','nom' =>'Redureau', 'Prenom' => 'Melvin','mail'=>'MelDokkan@battle.com', 'motDePasseUtilisateur' => Hash::make('CquantiqueToutça') ,'estInscrit' => true,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 12, 'nomUtilisateur' => 'Alex','nom' =>'CHERAMNAC', 'Prenom' => 'Alexei','mail'=>'jepechobeaucouptrop@tinder.com', 'motDePasseUtilisateur' => Hash::make('rocketLeague3000€') ,'estInscrit' => false,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 13, 'nomUtilisateur' => 'ProfDeMath','nom' =>'exponentiel', 'Prenom' => 'logarithmique','mail'=>'maths@calculatrice.com', 'motDePasseUtilisateur' => Hash::make('çacemangesansfaim') ,'estInscrit' => true,'isAdministrateur' => false ,
            ),
        ));
        reservation::insert(array(
            array(
                'idReservation' => 2, 'positionFileAttente' => null , 'numeroPlace' => null, 'utilisateur' => 2,'etatReservation' => 0, 'dateDebut' => '2020/08/10', 'dateFin' => '2020/04/17',
            ),
            array(
                'idReservation' => 3, 'positionFileAttente' => null , 'numeroPlace' => null, 'utilisateur' => 3 , 'etatReservation' => 0, 'dateDebut' => '2020/01/29', 'dateFin' => '2020/01/20',
            ),
            array(
                'idReservation' => 4, 'positionFileAttente' => 1 , 'numeroPlace' => null, 'utilisateur' => 10 ,'etatReservation' => 0, 'dateDebut' => null,'dateFin' => null,
            ),
            array(
                'idReservation' => 5, 'positionFileAttente' => null , 'numeroPlace' => 2, 'utilisateur' => 5 ,'etatReservation' => 0, 'dateDebut' => '2019/01/17','dateFin' => '2019/02/17',
            ),
            array(
                'idReservation' => 6, 'positionFileAttente' => null , 'numeroPlace' => 7, 'utilisateur' => 5 ,'etatReservation' => 0, 'dateDebut' => '2019/07/10','dateFin' => '2019/08/10',
            ),
            array(
                'idReservation' => 7, 'positionFileAttente' => null , 'numeroPlace' => 9, 'utilisateur' => 5 ,'etatReservation' => 0, 'dateDebut' => '2019/11/21','dateFin' => '2019/12/21',
            ),
            array(
                'idReservation' => 8, 'positionFileAttente' => null , 'numeroPlace' => 3, 'utilisateur' => 5 ,'etatReservation' => 0, 'dateDebut' => '2020/01/10','dateFin' => '2019/02/10',
            ),
            array(
                'idReservation' => 9, 'positionFileAttente' => 3 , 'numeroPlace' => null, 'utilisateur' => 5 ,'etatReservation' => 0, 'dateDebut' => null,'dateFin' => null,
            ),
            array(
                'idReservation' => 10, 'positionFileAttente' => null , 'numeroPlace' => 7, 'utilisateur' => 10 ,'etatReservation' => 1, 'dateDebut' => '2020/01/12','dateFin' => '2020/02/12',
            ),
            array(
                'idReservation' => 11, 'positionFileAttente' => 4 , 'numeroPlace' => null, 'utilisateur' => 6 ,'etatReservation' => 0, 'dateDebut' => null,'dateFin' => null,
            ),
            array(
                'idReservation' => 12, 'positionFileAttente' => 5 , 'numeroPlace' => null, 'utilisateur' => 7 ,'etatReservation' => 0, 'dateDebut' => null,'dateFin' => null,
            ),
            array(
                'idReservation' => 13, 'positionFileAttente' => 6 , 'numeroPlace' => null, 'utilisateur' => 9 ,'etatReservation' => 0, 'dateDebut' => null,'dateFin' => null,
            ),
            array(
                'idReservation' => 14, 'positionFileAttente' => 7 , 'numeroPlace' => null, 'utilisateur' => 6 ,'etatReservation' => 0, 'dateDebut' => null,'dateFin' => null,
            ),
            array(
                'idReservation' => 15, 'positionFileAttente' => null , 'numeroPlace' => 2, 'utilisateur' => 13 ,'etatReservation' => 0, 'dateDebut' => '2019/01/28','dateFin' => '2019/02/28',
            ),
            array(
                'idReservation' => 16, 'positionFileAttente' => null , 'numeroPlace' => 7, 'utilisateur' => 13 ,'etatReservation' => 0, 'dateDebut' => '2019/04/27','dateFin' => '2019/05/27',
            ),
            array(
                'idReservation' => 17, 'positionFileAttente' => null , 'numeroPlace' => 9, 'utilisateur' => 13 ,'etatReservation' => 0, 'dateDebut' => '2019/12/21','dateFin' => '2020/01/21',
            ),
            array(
                'idReservation' => 18, 'positionFileAttente' => null , 'numeroPlace' => 3, 'utilisateur' => 13,'etatReservation' => 0, 'dateDebut' => '2020/02/04','dateFin' => '2019/03/04',
            ),
            array(
                'idReservation' => 19, 'positionFileAttente' => 2 , 'numeroPlace' => null, 'utilisateur' => 13,'etatReservation' => 0, 'dateDebut' => null,'dateFin' => null,
            ),
        ));
    }
}
